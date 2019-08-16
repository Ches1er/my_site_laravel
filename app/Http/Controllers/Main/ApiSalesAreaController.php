<?php

namespace App\Http\Controllers\Main;

use App\Contracts\ServiceApiSalesArea;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiSalesAreaController extends Controller
{
    private $salesAreaService;

    /**
     * ApiSalesAreaController constructor.
     * @param $salesAreaService
     */
    public function __construct(ServiceApiSalesArea $salesAreaService)
    {
        $this->salesAreaService = $salesAreaService;
    }

    public function actionSalesAreas(){
        return json_encode($this->salesAreaService->salesAreas());
    }
    public function actionSalesArea($id){
        return json_encode($this->salesAreaService->salesArea($id));
    }

}
