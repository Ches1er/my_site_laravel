<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 16.08.2019
 * Time: 16:53
 */

namespace App\Contracts;


interface ServiceApiSolutions
{
    public function showSolutions();
    public function addSolution($data);
    public function delSolutions($id);
}
