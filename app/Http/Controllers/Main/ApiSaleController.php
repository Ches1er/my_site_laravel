<?php

namespace App\Http\Controllers\Main;

use App\Contracts\ServiceApiSale;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiSaleController extends Controller
{
    protected $salesService;

    /**
     * ApiSaleController constructor.
     * @param $salesService
     */
    public function __construct(ServiceApiSale $salesService)
    {
        $this->salesService = $salesService;
    }

    public function actionShowProducts(){
        return json_encode($this->salesService->showProducts());
    }
    public function actionShowProduct(int $id){
        return json_encode($this->salesService->showProduct($id));
    }
    public function actionGetBrandExchange(int $brand_id){
        return json_encode($this->salesService->getExchange($brand_id));
    }
    public function actionShowProductsByBrand($brandid){
        return json_encode($this->salesService->showProductsByBrand($brandid));
    }
    public function actionSaveOrder(Request $request){
        $data = $request->only('id','order','userId','date');
        return json_encode($this->salesService->saveOrder($data));
    }
    public function actionSendOrderByEmail(Request $request) {
        $data = $request->only('userId','order','amount');
        return json_encode($this->salesService->sendOrderByEmail($data));
    }
}
