<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 24.07.2019
 * Time: 15:56
 */

namespace App\Contracts;


interface ServiceApiBrands
{
    public function showBrands($sales_area);
    public function addBrand(Array $data);
    public function delBrand(int $id);
    public function addUpdateExchange(array $data);
    public function showExchanges();
}
