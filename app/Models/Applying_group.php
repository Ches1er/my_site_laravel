<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Applying_group extends Model
{
    protected $table = 'applying_groups';

    protected $fillable = ['name','sales_area_id'];
}
