<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 01.08.2019
 * Time: 11:00
 */

namespace App\Services\Main;


use App\Contracts\ServiceApiObjects;
use App\Models\Build_object;
use App\MyTraits\getObjWithImagesPath;

class DBApiObjectsService implements ServiceApiObjects
{
    Use getObjWithImagesPath;
    public function objects()
    {
        $objects = Build_object::get();
        return $this->getWithImagesArrayPath($objects);
    }

    public function object(int $id)
    {
        return Build_object::where('id',$id)->first();
    }

    public function addObject(array $data)
    {
        // TODO: Implement addObject() method.
    }

    public function delObject(int $id)
    {
        // TODO: Implement delObject() method.
    }
}
