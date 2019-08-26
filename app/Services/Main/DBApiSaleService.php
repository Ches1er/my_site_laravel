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
use App\Models\Brand_exchange;
use App\Models\Order;
use App\Models\Product_sale;
use App\User;
use Illuminate\Support\Facades\Mail;
use function PHPSTORM_META\map;

class DBApiSaleService implements ServiceApiSale
{
    private function getUahPrice($obj){
        foreach ($obj as $obj_unit){
            $brand_exchange = Brand_exchange::where('brand_id',$obj_unit->brand_id)->first();
            $obj_unit->price = round($obj_unit->price*$brand_exchange->exchange, 2);
        }
        return $obj;
    }

    public function showProducts()
    {
        return $this->getUahPrice(Product_sale::all());
    }

    public function showProduct(int $id)
    {
        return $this->getUahPrice(Product_sale::where('id', $id)->get());
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
        Order::updateOrCreate(['id'=>$data['id']],[
            'user_id'=> $data['userId'],
            'date'=> $data['date'],
            'order'=> $data['order'],
        ]);
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
        print_r($order_to_array);
        $order_to_array  = array_map(array($this, 'jsonDecode'),$order_to_array);
        Mail::to([$user->email, 'myblogtestemail@gmail.com'])
            ->send(new OrderAccepted($order_to_array,$user,$date, $amount));
        return ['response'=>'email send'];
    }
}
