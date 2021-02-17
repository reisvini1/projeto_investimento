<?php

namespace App;

use Iluminate\Notifications\Notifiable;
use Iluminate\Foundation\Auth\User as Autheticatable;

class User extends Authenticatable 
{
    use SoftDeletes;
    use Notifiable;

    public $timestamps = true;
    public $table = 'users';
    public $fillable = ['name', 'email', 'password'];
    public $hidden = ['password', 'remember_token'];
}