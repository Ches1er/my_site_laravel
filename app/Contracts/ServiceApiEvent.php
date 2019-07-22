<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 22.07.2019
 * Time: 17:09
 */

namespace App\Contracts;


interface ServiceApiEvent
{
    public function showEvents(string $sales_area);
    public function addEvent(Array $data);
    public function delEvent(int $id);
}
