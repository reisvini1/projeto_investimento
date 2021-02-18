<?php

namespace App\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use SoftDeletes;
    use Notifiable;

    public $timestamps = true;
    public $table = 'users';
    public $fillable = ['cpf', 'name', 'phone', 'birth', 'gender', 'notes', 'email',  'password', 'status', 'permission'];
    public $hidden = ['password', 'remember_token'];

    public function getPassowordAtribbute($value){
        $this->attributes['password'] = env('PASSWORD_HASH') ? bcrypt($value) : $value;
    }

}
