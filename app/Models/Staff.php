<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staff';
    protected $fillable = ['name', 'surname', 'phone_work', 'phone_personal', 'branch_id', 'email'];
}
