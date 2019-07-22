<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    protected $fillable = ['name',
        'short_event',
        'full_event',
        'img',
        'date',
        'expiration',
        'sales_area_id'];
}
