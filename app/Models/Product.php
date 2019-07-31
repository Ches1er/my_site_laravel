<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name','brand_id','sales_area_id','applying_group_id','active','img','tech_info'];
}
