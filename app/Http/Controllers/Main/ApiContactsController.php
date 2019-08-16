<?php

namespace App\Http\Controllers\Main;

use App\Contracts\ServiceApiContacts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiContactsController extends Controller
{
    protected $contactsService;

    /**
     * ApiContactsController constructor.
     * @param $contactsService
     */
    public function __construct(ServiceApiContacts $contactsService)
    {
        $this->contactsService = $contactsService;
    }

    public function actionShowBranches(){
         return json_encode($this->contactsService->showBranches());
    }
}
