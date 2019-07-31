<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 31.07.2019
 * Time: 18:20
 */

namespace App\Contracts;


interface ServiceApiClients
{
    public function clients(string $sales_area);
    public function client(int $id);
    public function addClient(array $data);
    public function delClient(int $id);
}
