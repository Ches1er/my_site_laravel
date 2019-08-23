<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 31.07.2019
 * Time: 18:21
 */

namespace App\Services\Main;


use App\Configs\SalesAreaConfigs;
use App\Contracts\ServiceApiClients;
use App\Models\Client;
use App\Models\Image;
use App\Models\Product;
use App\Models\Sales_area;
use App\MyTraits\getObjWithImagesPath;

class DBApiClientsService implements ServiceApiClients
{
    Use getObjWithImagesPath;

    private function getWithProductName ($obj) {
        foreach ($obj as $object){
            $products_id_array = explode(',',$object->products);
            $products_array = [];
            foreach ($products_id_array as $item){
                $product = Product::where('id',(int)$item)->first();
                $products_array[] = $product->name;
            }
            $products_str = implode(',',$products_array);
            $object->products_name = $products_str;
        }
        return $obj;
    }
    public function clients(string $sales_area)
    {
        if ($sales_area === 'pack')$sales_area = SalesAreaConfigs::PACK;
        if ($sales_area === 'building')$sales_area = SalesAreaConfigs::BUILDING;
        if ($sales_area === 'all') {
            $clients = Client::get();
            $clients_w_product_name = $this->getWithProductName($clients);
            return $this->getWithImagesPath($clients_w_product_name);
        };
        $sales_area_db = Sales_area::where('name',$sales_area)->first();
        $clients = Client::where('sales_area_id', $sales_area_db->id)->get();
        $clients_w_product_name = $this->getWithProductName($clients);
        return $this->getWithImagesPath($clients_w_product_name);
    }

    public function client(int $id)
    {
        return $this->getWithImagesPath(Client::where('id',$id)->first());
    }

    public function addClient(array $data)
    {
        if (!$data['img']){
            $default_image = Image::where('name','default_news')->first();
            $data['img'] = $default_image->id;
        }
        if (Client::where('name',$data['name'])->first() && $data['action']==='add')return ['response'=>'this client exists'];
        if (Client::updateOrCreate(['id'=> $data['id']],[
            'name'=>$data['name'],
            'sales_area_id'=>(int) $data['salesArea'],
            'desc'=>$data['desc'],
            'img'=>(int)$data['img'],
            'products'=>$data['products']
        ])) {
            if ($data['action']==='update')return ['response'=>'update success'];
            return ['response'=>'insert success'];
        };
        return ['response'=>'error'];
    }

    public function delClient(int $id)
    {
        Client::destroy($id);
        return ['response'=>'success'];
    }
}
