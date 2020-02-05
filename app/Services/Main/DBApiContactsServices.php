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
    public function showBranchesRoles(){
        $brR = Branch_role::get();
        return $brR;
    }

    public function addBranch(Array $data)
    {
        if (Branch::where('name', $data['name'])->first()&& $data['action']==='add')return ['response'=>'this branch exists'];
        if (Branch::updateOrCreate(['id'=>$data['id']],[
            'name' => $data['name'],
            'address'=>$data['address'],
            'phone'=>$data['phone'],
            'long'=>$data['long'],
            'lat'=>$data['lat'],
            'role_id' => $data['role_id']
        ])) {
            if ($data['action']==='update')return ['response'=>'update success'];
            return ['response'=>'insert success'];
        }
        return ['response'=>'error'];
    }
}
