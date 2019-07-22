<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    protected $fillable = [
        'name', 'short_news', 'full_news', 'img', 'date', 'sales_area_id'
    ];
}
