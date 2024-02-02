<?php

namespace App\Handlers\Auth;

use App\Commands\Auth\RegisterUserCommand;
use App\Models\User;

class RegisterUserHandler
{
    public function __invoke(RegisterUserCommand $command)
    {
        $User = new User();
        $User->name = $command->GetName();
        $User->family = $command->GetFamily();
        $User->age = $command->GetAge();
        $User->password = $command->GetPassword();
        $User->email = $command->GetEmail();
        $User->gender = $command->GetGender();
        $User->city = $command->GetCity();
        $User->address = $command->GetAddress();
        $User->save();


        $roleIds = 2;
        $User->Roles()->attach($roleIds);

    }

}
