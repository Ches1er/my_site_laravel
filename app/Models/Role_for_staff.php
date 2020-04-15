<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role_for_staff extends Model
{
    protected $table = 'roles_for_staff';
    protected $fillable = ['role'];

    public function roleBelongsToManagers () {
        $staff_array = [];
        $collection = $this->hasManyThrough(Staff::class, Staff_role::class, 'id_role',
            'id', 'id', 'id_staff')->get();
        foreach ($collection as $staff){
            array_push($staff_array, $staff);
        }
        return $staff_array;
    }
}
