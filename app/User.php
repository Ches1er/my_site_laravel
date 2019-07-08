<?php

namespace App;

use App\Models\Role;
use App\Models\User_Roles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'email_verified_at',
        'api_token',
        'phones',
        'remember_token',
        'confirmed_client',
        'verification_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Roles():array {
        $roles_array = [];
            $collection =  $this->hasManyThrough(Role::class,User_Roles::class,
                "user_id","id","id","role_id")->get();
            foreach ($collection as $user){
                $roles_array[]=$user->role;
            }
            return $roles_array;

    }
}
