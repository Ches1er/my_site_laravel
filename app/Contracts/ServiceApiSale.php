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
    public function showProductsForAdmin();
    public function showProduct(int $id);
    public function getExchange(int $brandid);
    public function showProductsByBrand(int $brandid);
    public function showOrders(int $user_id);
    public function saveOrder(array $data);
    public function sendOrderByEmail(array $data);
    public function addProduct(array $data);
    public function getSaleClients();
    public function clientDiscounts(int $clientid);
    public function updateDiscount(array $data);
}
