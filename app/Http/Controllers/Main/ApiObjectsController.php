<?php

namespace App\Http\Controllers\Main;

use App\Contracts\ServiceApiObjects;
use App\Http\Controllers\Controller;
use App\MyTraits\getObjWithImagesPath;

class ApiObjectsController extends Controller
{

    protected $objService;

    /**
     * ApiObjectsController constructor.
     * @param ServiceApiObjects $objectsService
     */
    public function __construct(ServiceApiObjects $objectsService){
        $this->objService = $objectsService;
    }

    public function actionShowObject($id){
        $obj = $this->objService->object($id);
        $obj->photo = explode(',',$obj->photo);
        return json_encode($obj);
    }

    public function actionShowObjects(){
        $objs = $this->objService->objects();
        return json_encode($objs);
    }
}
