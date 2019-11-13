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
use App\Models\Brand_exchange;
use App\Models\Sales_area;

class DBApiBrandsService implements ServiceApiBrands
{

    public function showBrands($sales_area)
    {
        if ($sales_area === 'pack')$sales_area = SalesAreaConfigs::PACK;
        if ($sales_area === 'building')$sales_area = SalesAreaConfigs::BUILDING;
        if ($sales_area === 'all') return Brand::get();
        $sales_area_db = Sales_area::where('name',$sales_area)->first();
        return Brand::where('sales_area_id',$sales_area_db->id)->get();
    }

    public function addBrand(Array $data)
    {
        /* Client give us request without img, in service set img by default
        * In perspective we can send with request img.
         * By default each brand has active = true
        */
        $img = 1;
        if ($data['action']==='add'){
            if (Brand::where('name', $data['name'])->first())return ['response'=>'this brand exists'];
            if (Brand::create([
                'name' => $data['name'],
                'sales_area_id' => (int)$data['sales_area'],
                'img' => $img,
                'active' => 1,
                'official'=>(int)($data['official']==true),
                'web'=>$data['web']
            ])) {
                $brand_id_obj = Brand::where('name', $data['name'])->first();
                Brand_exchange::create(['brand_id' => $brand_id_obj->brand_id, 'exchange' => (float)$data['exchange']]);
                return ['response'=>'insert success'];
            }
        }
        if ($data['action']==='update'){
            if (Brand::where('id',$data['id'])->update([
                'name' => $data['name'],
                'sales_area_id' => (int) $data['sales_area'],
                'active' => (int)($data['active']==true),
                'official'=>(int)($data['official']==true),
                'web'=>$data['web']
            ])) {
                $brand_id_obj = Brand::where('name', $data['name'])->first();
                if (Brand_exchange::where(['brand_id' => $brand_id_obj->id])->first()){
                    Brand_exchange::where(['brand_id' => $brand_id_obj->id])->update(['exchange' => (float)$data['exchange']]);
                } else {
                    Brand_exchange::create(['brand_id' => $brand_id_obj->id, 'exchange' => (float)$data['exchange']]);
                }
                return ['response'=>'update success'];
            }
        }
        return ['response'=>'error'];
    }

    public function delBrand(int $id)
    {
        Brand::destroy($id);
        return ['response'=>'success'];
    }
    public function addUpdateExchange(array $data)
    {
        // TODO: Implement addExchange() method.
    }

    public function showExchanges()
    {
        return Brand_exchange::all();
    }
}
