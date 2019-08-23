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
        if (!$data['img']){
            $default_image = Image::where('name','default_news')->first();
            $data['img'] = $default_image->id;
        }
        if (Build_object::where('name',$data['name'])->first() && $data['action']==='add')return ['response'=>'this object exists'];
        if (Build_object::updateOrCreate(['id'=> $data['id']],[
            'name'=>$data['name'],
            'desc'=>$data['desc'],
            'img'=>$data['img']
        ])) {
            if ($data['action']==='update')return ['response'=>'update success'];
            return ['response'=>'insert success'];
        };
        return ['response'=>'error'];
    }

    public function delObject(int $id)
    {
        // TODO: Implement delObject() method.
    }
}
