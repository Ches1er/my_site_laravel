<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff_role extends Model
{
    protected $table = 'staff_roles';
    protected $fillable = ['id_role', 'id_staff'];
}
