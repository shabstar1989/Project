<?php

namespace App\Repositories\Auth;

use App\Queries\Auth\LoginQuery;
use Illuminate\Support\Facades\Auth;

class LoginRepository
{
    public function __invoke(LoginQuery $command)
    {
        $credentials['email'] = $command->GetEmail();
        $credentials['password'] = $command->GetPassword();
        if (Auth::attempt($credentials)) {

            return "User Logged";
        }
    }
}
