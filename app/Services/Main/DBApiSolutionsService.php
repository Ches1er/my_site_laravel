<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 16.08.2019
 * Time: 16:54
 */

namespace App\Services\Main;


use App\Contracts\ServiceApiSolutions;
use App\Models\Image;
use App\Models\Solution;
use App\MyTraits\findLittleHelper;
use App\MyTraits\getObjWithImagesPath;

class DBApiSolutionsService implements ServiceApiSolutions
{
    use getObjWithImagesPath;
    use findLittleHelper;

    public function showSolutions()
    {
        return $this->getWithImagesPath(Solution::get());
    }

    public function addSolution(Array $data)
    {
        if (!$data['img']){
            $default_image = Image::where('name','default_news')->first();
            $data['img'] = $default_image->id;
        }
        if (Solution::where('name',$data['name'])->first() && $data['action']==='add')return ['response'=>'this solution exist'];
        if (Solution::updateOrCreate(['id'=>$data['id']],
            [
                'name' => $data['name'],
                'desc'=>$data['desc'],
                'img'=>$data['img'],
                'products'=>$data['products'],
                'items'=>$data['items']
            ]
        )){
            if ($data['action']==='update')return ['response'=>'update success'];
            return ['response'=>'insert success'];
        }
        return ['response'=>'error'];
    }

    public function delSolutions($id)
    {
        // TODO: Implement delSolutions() method.
    }

    public function findSolutions(string $findData)
    {
        $solutionIdsArray = $this->getSolutionsIdArray($findData);
        return Solution::whereIn('id', $solutionIdsArray)->get();

    }
}
