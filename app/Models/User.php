<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{

    /**
        * @var array<int, string>
     */

    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'isadmin'
    ];
}
