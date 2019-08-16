<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 03.08.2019
 * Time: 12:35
 */

namespace App\Services\Main;


use App\Contracts\ServiceApiSalesArea;
use App\Models\Sales_area;

class DBApiSalesAreaService implements ServiceApiSalesArea
{

    public function salesAreas()
    {
        return Sales_area::get();
    }

    public function salesArea(int $id)
    {
        return Sales_area::where('id',$id)->first();
    }
}
