<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 03.08.2019
 * Time: 12:33
 */

namespace App\Contracts;


interface ServiceApiSalesArea
{
    public function salesAreas();
    public function salesArea(int $id);
}
