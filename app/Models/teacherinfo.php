<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class teacherinfo extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'name', 'email', 'password',
    ];

 /**
 * The attributes that should be hidden for arrays.
    *
    * @var array
    */
   protected $hidden = [
               'password', 'remember_token',
   ];

   
} 


