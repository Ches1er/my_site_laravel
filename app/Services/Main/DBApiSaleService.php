<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 20.08.2019
 * Time: 17:44
 */

namespace App\Services\Main;


use App\Contracts\ServiceApiSale;
use App\Models\Brand_exchange;
use App\Models\Product_sale;

class DBApiSaleService implements ServiceApiSale
{
    private function getUahPrice($obj){
        foreach ($obj as $obj_unit){
            $brand_exchange = Brand_exchange::where('brand_id',$obj_unit->brand_id)->first();
            $obj_unit->price = $obj_unit->price*$brand_exchange->exchange;
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
}
