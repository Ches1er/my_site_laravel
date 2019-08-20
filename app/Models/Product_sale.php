<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_sale extends Model
{
    protected $table = 'products_sale';
    protected $fillable = ['name','price','brand_id','measure'];
}
