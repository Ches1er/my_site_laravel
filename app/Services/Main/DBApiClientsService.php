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
use App\Models\Sales_area;

class DBApiClientsService implements ServiceApiClients
{

    public function clients(string $sales_area)
    {
        if ($sales_area === 'pack')$sales_area = SalesAreaConfigs::PACK;
        if ($sales_area === 'building')$sales_area = SalesAreaConfigs::BUILDING;
        $sales_area_db = Sales_area::where('name',$sales_area)->first();
        return Client::where('sales_area_id', $sales_area_db->id)->get();
    }

    public function client(int $id)
    {
        return Client::where('id',$id)->first();
    }

    public function addClient(array $data)
    {
        if ($data['sales_area'] === 'pack')$sales_area = SalesAreaConfigs::PACK;
        if ($data['sales_area'] === 'building')$sales_area = SalesAreaConfigs::BUILDING;
        $sales_area_db = Sales_area::where('name',$sales_area)->first();
        Client::create([
            'name'=>$data['name'],
            'sales_area_id'=>$sales_area_db->id,
            'logo'=>$data['logo'],
            'desc'=>$data['desc']
        ]);
        return ['response'=>'success'];
    }

    public function delClient(int $id)
    {
        Client::destroy($id);
        return ['response'=>'success'];
    }
}
