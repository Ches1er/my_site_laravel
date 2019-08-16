<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 04.08.2019
 * Time: 11:31
 */

namespace App\Contracts;


interface ServiceApiImages
{
    public function showImages();
    public function showImage($name);
    public function addImage($destination_path, $file_name);

}
