<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 25.07.2019
 * Time: 15:58
 */

namespace App\Services\Main;


use App\Contracts\ServiceApiProducts;
use App\Models\Product;

class DBApiProductsService implements ServiceApiProducts
{

    public function showProduct(int $id)
    {
        return Product::where('id',$id)->first();
    }

    public function addProduct(array $data)
    {
        // TODO: Implement addProduct() method.
    }

    public function delProduct(int $id)
    {
        // TODO: Implement delProduct() method.
    }

    public function showProductsByApp(int $id)
    {
        return Product::where('applying_group_id',$id)->get();
    }

    public function showProductsByBrand(int $id)
    {
        return Product::where('brand_id',$id)->get();
    }
}
