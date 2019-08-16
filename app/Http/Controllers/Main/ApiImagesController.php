<?php

namespace App\Http\Controllers\Main;

use App\Configs\UploadUrlConfig;
use App\Contracts\ServiceApiImages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiImagesController extends Controller
{
    protected $images_service;
    private $uploadUrlConfig;

    /**
     * ApiImagesController constructor.
     * @param ServiceApiImages $imgService
     */
    public function __construct(ServiceApiImages $imgService)
    {
        $this->images_service = $imgService;
    }

    public function actionGetAllImages(){
        return json_encode($this->images_service->showImages());
    }
    public function actionGetImage($name){
        return json_encode($this->images_service->showImage($name));
    }
    public function actionUploadImage(Request $request){
        $file = $request->file('file');
        $uploaddir = 'img';
        $file_name = $file -> getClientOriginalName();
        $destination_path = $uploaddir;
        if ($file->move($destination_path,$file_name)) {
            return json_encode($this->images_service->addImage($destination_path, $file_name));
        }
        else return json_encode(['response' => 'error']);

    }
}
