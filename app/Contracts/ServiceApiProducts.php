<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 25.07.2019
 * Time: 15:56
 */

namespace App\Contracts;


interface ServiceApiProducts
{
    public function showProduct(int $id);
    public function showProductsByApp(int $id);
    public function showProductsByBrand(int $id);
    public function addProduct(array $data);
    public function delProduct(int $id);
}
