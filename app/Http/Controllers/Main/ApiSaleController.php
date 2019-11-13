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
    public function actionShowProductsForAdmin(){
        return json_encode($this->salesService->showProductsForAdmin());
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
    public function actionAddProduct(Request $request){
        $data = $request->only('action','id','name','price', 'brandId', 'measure');
        return json_encode($this->salesService->addProduct($data));
    }
    public function actionShowOrders($userid){
        return json_encode($this->salesService->showOrders($userid));
    }
    public function actionGetClientDisc(Request $request){
        $data = $request->only('client_id');
        return json_encode($this->salesService->clientDiscounts($data['client_id']));
    }
    public function actionGetSaleClients(){
        return json_encode($this->salesService->getSaleClients());
    }
    public function actionUpdateDiscount(Request $request){
       $data = $request->only('id', 'brandId', 'discount', 'clientId');
       return json_encode($this->salesService->updateDiscount($data));
    }
}
