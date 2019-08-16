<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 15.08.2019
 * Time: 15:05
 */

namespace App\Services\Main;


use App\Contracts\ServiceApiContacts;
use App\Models\Branch;
use App\Models\Branch_role;

class DBApiContactsServices implements ServiceApiContacts
{
    private function getBranchesRole($branches){
        foreach ($branches as $branch){
            $role = Branch_role::where('id',$branch->role_id)->first();
            $branch->role = $role->role;
        }
        return $branches;
    }
    public function showBranches()
    {
        $branches = Branch::get();
        return $this->getBranchesRole($branches);
    }
}
