<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table = 'branches';
    protected $fillable = ['name','address','phone','long','lat','role_id'];

    public function hasRole(){
            return $this->belongsTo('branch_roles','id','role_id')->first();
    }
}
