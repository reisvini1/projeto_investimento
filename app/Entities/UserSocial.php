<?php

namespace App\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Autheticatable;

class User extends Authenticatable 
{
    use SoftDeletes;
    use Notifiable;

    public $timestamps = true;
    public $table = 'users';
    public $fillable = ['user_id', 'social_network', 'social_id', 'social_email', 'social_avatar'];
    public $hidden = [];

}
