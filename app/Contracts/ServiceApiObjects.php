<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 01.08.2019
 * Time: 10:37
 */

namespace App\Contracts;


interface ServiceApiObjects
{
    public function objects();
    public function object(int $id);
    public function addObject(array $data);
    public function delObject(int $id);
}
