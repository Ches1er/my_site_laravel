<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 24.07.2019
 * Time: 16:24
 */

namespace App\Services\Main;


use App\Configs\SalesAreaConfigs;
use App\Contracts\ServiceApiBrands;
use App\Models\Brand;
use App\Models\Sales_area;

class DBApiBrandsService implements ServiceApiBrands
{

    public function showBrands($sales_area)
    {
        if ($sales_area === 'pack')$sales_area = SalesAreaConfigs::PACK;
        if ($sales_area === 'building')$sales_area = SalesAreaConfigs::BUILDING;
        $sales_area_db = Sales_area::where('name',$sales_area)->first();
        return Brand::where('sales_area_id',$sales_area_db->id)->get();
    }

    public function addBrand(Array $data)
    {
        if ($data['sales_area'] === 'pack')$sales_area = SalesAreaConfigs::PACK;
        if ($data['sales_area'] === 'building')$sales_area = SalesAreaConfigs::BUILDING;
        $sales_area_db = Sales_area::where('name',$sales_area)->first();
        Brand::create([
            'name'=>$data['name'],
            'sales_area_id'=>$sales_area_db->id,
            'active'=>1,
            'img'=>$data['img']
        ]);
        return ['response'=>'success'];
    }

    public function delBrand(int $id)
    {
        Brand::destroy($id);
        return ['response'=>'success'];
    }
}
