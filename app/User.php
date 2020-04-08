<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    use Notifiable;
    protected $fillable = ['id', 'nombres', 'grupo', 'name', 'username', 'password',];
    protected $hidden = ['password', 'remember_token',];
}
