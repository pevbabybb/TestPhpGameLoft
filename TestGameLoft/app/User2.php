<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User2 extends Model
{
    protected $fillable = [
        'username',
        'password',
        'email',
        'birthday'
    ];
}
