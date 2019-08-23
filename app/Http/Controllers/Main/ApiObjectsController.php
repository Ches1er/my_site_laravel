<?php

namespace App\Http\Controllers\Main;

use App\Contracts\ServiceApiObjects;
use App\Http\Controllers\Controller;
use App\MyTraits\getObjWithImagesPath;
use Illuminate\Http\Request;

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
    public function actionAddObject(Request $request){
        $data = $request->only('action','id','name','desc','img');
        return json_encode($this->objService->addObject($data));
    }
}
