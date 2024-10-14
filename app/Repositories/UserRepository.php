<?php

namespace App\Repositories;

use App\Interfaces\UserInterface;
use App\Models\User;

class UserRepository implements \App\Interface\UserInterface
{

    public function index()
    {
        return User::All();
    }
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
}
