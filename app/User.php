<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    protected $fillable = [
        'name', 'email', 'password',"weight","objective",
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function dates()
    {
        return $this->hasMany(Date::class);
    }
    

}
