<?php

namespace Modules\User\Repository;


use Modules\User\Entities\User;
use Illuminate\Support\Facades\Hash;

class UserRepository 
{
    public function getUser()
    {
        return User::all();
    }

    public function create($request)
    {
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
           
        ]);
    
    }
}