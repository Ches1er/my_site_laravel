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
use App\MyTraits\getObjWithImagesPath;

class DBApiProductsService implements ServiceApiProducts
{
    Use getObjWithImagesPath;

    public function showAllProducts()
    {
        $products = Product::get();
        return $this->getWithImagesPath($products);
    }

    public function showProduct(int $id)
    {
        $product = Product::where('id',$id)->get();
        return $this->getWithImagesPath($product);
    }

    public function addUpdateProduct(array $data)
    {
        if (Product::where('name',$data['name'])->first() && $data['action']==='add')return ['response'=>'this product exists'];
        if (Product::updateOrCreate(['id'=>(int)$data['id']],[
            'name'=> $data['name'],
            'brand_id'=>$data['brandId'],
            'sales_area_id' => $data['salesArea'],
            'active' => (int)$data['active'],
            'img' => $data['img'],
            'tech_info' => $data['tech_info'],
            'applying_group_id' => $data['applying_group']
        ])) {
            if ($data['action']==='update')return ['response'=>'update success'];
            return ['response'=>'insert success'];
        };
        return ['response'=>'error'];
    }

    public function delProduct(int $id)
    {
        // TODO: Implement delProduct() method.
    }

    public function showProductsByApp(int $id)
    {
        $products = Product::where('applying_group_id',$id)->get();
        return $this->getWithImagesPath($products);
    }

    public function showProductsByBrand(int $id)
    {
        $products = Product::where('brand_id',$id)->get();
        return $this->getWithImagesPath($products);
    }
}
