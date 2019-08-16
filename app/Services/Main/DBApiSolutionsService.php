<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 16.08.2019
 * Time: 16:54
 */

namespace App\Services\Main;


use App\Contracts\ServiceApiSolutions;
use App\Models\Solution;
use App\MyTraits\getObjWithImagesPath;

class DBApiSolutionsService implements ServiceApiSolutions
{
    use getObjWithImagesPath;
    public function showSolutions()
    {
        return $this->getWithImagesPath(Solution::get());
    }

    public function addSolution($data)
    {
        // TODO: Implement addSolution() method.
    }

    public function delSolutions($id)
    {
        // TODO: Implement delSolutions() method.
    }
}
