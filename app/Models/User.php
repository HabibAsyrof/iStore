<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'phone_number',
        'email',
        'email_verified_at',
        'password',
    ];

}