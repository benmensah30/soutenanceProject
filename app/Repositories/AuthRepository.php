<?php

namespace App\Repositories;

use App\Models\User;
use App\Interface\AuthInterface;
use Illuminate\Support\Facades\Hash;

class AuthRepository implements AuthInterface
{
    public function index()
    {
        return User::all();
    }

    public function show($id)
    {
        return User::findOrFail($id);
    }

    public function store(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            // 'password' =>  bcrypt($data['password']),
            "password" => Hash::make($data['password'])
        ]);
    }

    public function update(array $data, $id)
    {
        return User::findOrFail($id)->update($data);
    }

    public function delete($id)
    {
        return User::destroy($id);
    }
}
