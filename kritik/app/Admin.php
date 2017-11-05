<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;

class Admin extends Authenticatable
{
    use Notifiable;

    public function role()
    {
        return $this->belongsToMany(role::class,'role_admins');
    }

    protected $guard = 'admin';




    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    

}
