<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Build_object extends Model
{
    protected $table='objects';
    protected $fillable = ['name','desc','photo'];
}
