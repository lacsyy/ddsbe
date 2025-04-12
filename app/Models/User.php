<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users'; // only if your table isn't named "users" by default

    protected $fillable = [
        'username',
        'password',
        'gender'
    ];

    public $timestamps = false; // if you don’t have created_at and updated_at columns
}

