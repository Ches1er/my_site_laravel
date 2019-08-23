<?php

namespace App\Http\Controllers\Main;

use App\Contracts\ServiceApiClients;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiClientsController extends Controller
{
    protected $clientsService;

    /**
     * ApiClientsController constructor.
     * @param ServiceApiClients $serviceApiClients
     */
    public function __construct(ServiceApiClients $serviceApiClients)
    {
        $this->clientsService = $serviceApiClients;
    }

    public function actionShowClient($id){
        return json_encode($this->clientsService->client($id));
    }
    public function actionShowClients($sales_ares){
        return json_encode($this->clientsService->clients($sales_ares));
    }
    public function actionAddClient(Request $request){
        $data = $request->only('id','action','name', 'desc', 'salesArea','img','products');
        return json_encode($this->clientsService->addClient($data));
    }
}
