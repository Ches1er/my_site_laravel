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
use App\Models\Sales_area;
use App\MyTraits\getObjWithImagesPath;

class DBApiClientsService implements ServiceApiClients
{
    Use getObjWithImagesPath;
    public function clients(string $sales_area)
    {
        if ($sales_area === 'pack')$sales_area = SalesAreaConfigs::PACK;
        if ($sales_area === 'building')$sales_area = SalesAreaConfigs::BUILDING;
        if ($sales_area === 'all')return $this->getWithImagesPath(Client::get());
        $sales_area_db = Sales_area::where('name',$sales_area)->first();
        return $this->getWithImagesPath(Client::where('sales_area_id', $sales_area_db->id)->get());
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
        if (Client::where('name',$data['name']) && $data['action']==='add')return ['response'=>'this client exists'];
        if (Client::updateOrCreate(['id'=> $data['id']],[
            'name'=>$data['name'],
            'sales_area_id'=>(int) $data['salesArea'],
            'desc'=>$data['desc'],
            'img'=>(int)$data['img']
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
