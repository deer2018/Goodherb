<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

   
    protected $fillable = [
        'name', 'email', 'password', 'role','username', 'surname' , 'sex' , 'age' , 'phone' , 'address', 'province', 'district', 'subdistrict', 'zipcode', 'race', 'relationship', 'occupation', 'income', 'religion', 'education', 'relevance'
    ];

    
    protected $hidden = [
        'password', 'remember_token',
    ];

   
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
