<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client_discount extends Model
{
    protected $table = 'clients_discounts';
    protected $fillable = ['client_id','brand_id','discount'];
}
