<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 04.08.2019
 * Time: 11:32
 */

namespace App\Services\Main;


use App\Configs\UploadUrlConfig;
use App\Contracts\ServiceApiImages;
use App\Models\Image;

class DBApiImagesService implements ServiceApiImages
{
    private $uploadUrlConfig;
    /**
     * DBApiImagesService constructor.
     */
    public function __construct()
    {
        $this->uploadUrlConfig = new UploadUrlConfig();
    }

    public function showImages()
    {
        return Image::orderBy('id','DESC')->get();
    }

    public function addImage($destination_path, $file_name)
{
    $path = $this->uploadUrlConfig::UPLOAD_ROOT_URL.$destination_path.'/'.$file_name;
    if (Image::create(['name'=>$file_name, 'path'=>$path]))return [
        'status' => true,
        'originalName' => $file_name,
        'generatedName' => $file_name,
        'msg'=>"Image upload successful",
        'imageUrl' => $path
    ];
    return ['response'=>'error'];
}

    public function showImage($name)
    {
        return Image::where('name',$name)->first();
    }
}
