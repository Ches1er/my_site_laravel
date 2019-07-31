<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 24.07.2019
 * Time: 13:15
 */

namespace App\Contracts;


interface ServiceApplyingGroup
{
    public function showApplyingGroups($salesarea);
    public function addApplyingGroup(Array $data);
    public function delApplyingGroup(int $id);
}
