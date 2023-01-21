<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Company extends Model
{
    protected $fillable = [
        'name','email'

     ];
     protected $hidden = [
        'password', 'remember_token',
    ];
    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }
}
