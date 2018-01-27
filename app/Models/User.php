<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     protected $table = 'users';

     protected $fillable = [
         'username','email','password','tgl_lahir','tempat_lahir'
     ];

     protected $hidden = [
         'password',
     ];

     public function places()
     {
       return $this->hasMany('App\Models\Place');
     }


}
