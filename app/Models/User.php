<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    public $timestamps = false;

    protected $guarded = ['c_IdUser'];
    protected $table = 'user';
    protected $primarykey = 'c_IdUser';

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
