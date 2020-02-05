<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 20.08.2019
 * Time: 17:44
 */

namespace App\Services\Main;


use App\Configs\MailConfigs;
use App\Contracts\ServiceApiSale;
use App\Mail\OrderAccepted;
use App\Models\Brand;
use App\Models\Brand_exchange;
use App\Models\Client_discount;
use App\Models\Order;
use App\Models\Product_sale;
use App\User;
use Illuminate\Support\Facades\Mail;
use function PHPSTORM_META\map;

class DBApiSaleService implements ServiceApiSale
{
    private $userHasDiscounts = 0;

    public function showProducts()
    {
        return $this->getUahPrice(Product_sale::all());
    }
    public function showProductsForAdmin()
    {
        return Product_sale::all();
    }

    public function showProduct(int $id)
    {
        return $this->getUahPrice(Product_sale::where('id', $id)->get());
    }
    private function getUahPrice($obj){
        foreach ($obj as $obj_unit){
            $brand_exchange = Brand_exchange::where('brand_id',$obj_unit->brand_id)->first();
            $obj_unit->price = round($obj_unit->price*$brand_exchange->exchange, 0);
        }
        return $obj;
    }

    public function getExchange(int $brandid)
    {
        return Brand_exchange::where('brand_id',$brandid)->get();
    }

    public function showProductsByBrand(int $brandid)
    {
        return $this->getUahPrice(Product_sale::where('brand_id', $brandid)->get());
    }

    public function saveOrder(array $data)
    {
        // For email
/*        $user = User::where('id',$data['userId'])->first();
        $date = date("Y-m-d H:i:s",time());*/
        Order::updateOrCreate(['id'=>$data['id']],[
            'user_id'=> $data['userId'],
            'date'=> $data['date'],
            'order'=> $data['order'],
        ]);
        // -- MAIL -->
/*        MailConfigs::instance()->verificationEmail();
        $order_to_array = explode(';',$data['order']);
        $order_to_array  = array_map(array($this, 'jsonDecode'),$order_to_array);
        Mail::to('myblogtestemail@gmail.com')
            ->send(new OrderAccepted($order_to_array,$user,$date,'amount'));*/
        return ['response'=>'insert success'];
    }

    private function jsonDecode($e){
        return json_decode($e);
    }

    public function sendOrderByEmail(array $data)
    {
        $user = User::where('id',$data['userId'])->first();
        $date = date("Y-m-d H:i:s",time());
        $amount = $data['amount'];
        // -- MAIL -->
        MailConfigs::instance()->verificationEmail();
        $order_to_array = explode(';',$data['order']);
        $order_to_array  = array_map(array($this, 'jsonDecode'),$order_to_array);
        Mail::to([$user->email, 'myblogtestemail@gmail.com'])
            ->send(new OrderAccepted($order_to_array,$user,$date, $amount));
        return ['response'=>'email send'];
    }

    public function addProduct(array $data)
    {
        // Measure by default
        $measure = 'шт.';
        if (Product_sale::where('name',$data['name'])->first() && $data['action']==='add')return ['response'=>'this product exists'];
        if (Product_sale::updateOrCreate(['id'=>$data['id']],[
            'name'=> $data['name'],
            'price'=> $data['price'],
            'brand_id'=> $data['brandId'],
            'measure'=> $measure,
        ])) {
            if ($data['action']==='update')return ['response'=>'update success'];
            return ['response'=>'insert success'];
        };
        return ['response'=>'error'];
    }


    public function showOrders(int $userid)
    {
        return  Order::where('user_id', $userid)->get();
    }

    public function clientDiscounts(int $clientid)
    {
        return $this->clientDiscountWithBrandName(Client_discount::where('client_id', $clientid)->get());
    }
    private function clientDiscountWithBrandName($object) {
        foreach ($object as $obj_unit) {
            $brand = Brand::where('id', $obj_unit->brand_id)->first();
            $obj_unit->brand = $brand->name;
        }
        return $object;
    }

    public function getSaleClients()
    {
        return User::all();
    }

    public function updateDiscount(array $data)
    {
        $this->userHasDiscounts=0;
        $ids_array = explode(';', $data['id']);
        // If user doesnt have discounts, first element of $ids_array will be empty string, because of explode method
        $this->isUserHasDiscounts($ids_array[0]);
        $discounts_array = explode(';', $data['discount']);
        $brandId_array = explode(';', $data['brandId']);
        if (count($ids_array) < count($discounts_array) || $ids_array[0] === '') {
            echo $this->userHasDiscounts;
            if ($this->userHasDiscounts){
                $discounts_array_sliced = array_slice($discounts_array, count($ids_array));
                $brandId_array_sliced = array_slice($brandId_array, count($ids_array));
            } else {
                $discounts_array_sliced = $discounts_array;
                $brandId_array_sliced = $brandId_array;
            }
            $this->createNewDiscounts($data['clientId'], $discounts_array_sliced, $brandId_array_sliced);
            // If user doesnt have yet any discounts, add them, and interrupt process before updating
            if (!$this->userHasDiscounts)return ['response'=>'success'];
        }
        foreach ($ids_array as $index => $id){
            $cl_disc = Client_discount::updateOrCreate(['id' => $id],['discount' => $discounts_array[$index]]);
            $cl_disc->save();
        }
        return ['response'=>'success'];
    }

    private function isUserHasDiscounts($firstDiscount){
        if ($firstDiscount === '') $this->userHasDiscounts = 0;
        else $this->userHasDiscounts = 1;

}
    private function createNewDiscounts($client_id, array $discounts, array $brandIds){
        foreach ($discounts as $index=>$discount) {
            Client_discount::create(['client_id'=>$client_id, 'brand_id'=>$brandIds[$index], 'discount'=>$discount]);
        }
    }
}
