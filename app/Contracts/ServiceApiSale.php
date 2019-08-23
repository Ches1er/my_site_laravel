<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 20.08.2019
 * Time: 17:42
 */

namespace App\Contracts;


interface ServiceApiSale
{
    public function showProducts();
    public function showProduct(int $id);
    public function getExchange(int $brandid);
    public function showProductsByBrand(int $brandid);
}
