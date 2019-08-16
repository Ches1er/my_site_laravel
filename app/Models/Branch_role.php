<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch_role extends Model
{
    protected $table = 'branch_roles';
    protected $fillable = ['role'];
    public function hasBranches(){
        return $this->hasMany('branches','role_id','id')->get();
    }
}
