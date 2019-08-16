<?php
namespace App\MyTraits;
use App\Models\Image;

/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 04.08.2019
 * Time: 10:07
 */

trait getObjWithImagesPath
{

    private function getWithImagesPath($objects){
        if ($objects){
            foreach ($objects as $object){
                $img_id = $object->img;
                $object->img_id = (int)$img_id;
                $img_str = $object->img;
                $img_path = Image::where('id',(int) $img_str)->first();
                $object->img = $img_path->path;
            }
        }
        return $objects;
    }
    private function getWithImagesArrayPath($objects){
        if ($objects){
            foreach ($objects as $object){
                $img_id = $object->img;
                $img_id_array = explode(',',$img_id);
                $object->img_id = $img_id_array;
                                $path_array = [];
                                foreach ($img_id_array as $img){
                                    $img_path = Image::where('id',(int) $img)->first();
                                    array_push($path_array, $img_path->path);
                                }
                $object->img = $path_array;
            }
        }
        return $objects;
    }
}
