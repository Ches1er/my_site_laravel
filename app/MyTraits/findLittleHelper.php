<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 12.02.2020
 * Time: 14:43
 */

namespace App\MyTraits;


use App\Models\Product;
use App\Models\Solution;

trait findLittleHelper
{
    // Find solutions by product name we have

    private function getSolutionsIdArray($findData){
        $prodIdsArray = $this->getProductsIdArray($findData);
        $solutionIdsArray = [];
        $solutions = Solution::all();
        foreach ($solutions as $solution){
            $productsIdsStr = $solution->products;
            $productIdsArray = explode(',',$productsIdsStr);
            $result = array_intersect($prodIdsArray,$productIdsArray);
            if (count($result))array_push($solutionIdsArray, $solution->id);
        }
        return $solutionIdsArray;
    }
    private function getProductsIdArray ($findData) {
        $idsArray = [];
        $products = Product::where('name','like','%'.$findData.'%')->get();
        foreach ($products as $product){
            array_push($idsArray,$product->id);
        }
        return $idsArray;
    }
}
