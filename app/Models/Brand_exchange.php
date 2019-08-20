<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand_exchange extends Model
{
    protected $table = 'brands_exchange';
    protected $fillable = ['brand_id','exchange'];
}
