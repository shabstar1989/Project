<?php

namespace App\Commands\Auth;

use Illuminate\Support\Facades\Hash;

class RegisterUserCommand
{
    protected $name;
    protected $family;
    protected $age;
    protected $email;
    protected $password;
    protected $address;
    protected $city;
    protected $gender;

    public function __construct($Data)
    {
        if(is_array($Data))
        {
            foreach($Data as $Key => $Value)
            {
                $this->$Key = $Value;
            }
        }
    }


    public function GetName(): string
    {
        return $this->name;
    }
    public function GetFamily(): string
    {
        return $this->family;
    }
    public function GetAge(): string
    {
        return $this->age;
    }
    public function GetEmail(): string
    {
        return $this->email;
    }
    public function GetPassword(): string
    {
        return Hash::make($this->password);
    }
    public function GetGender(): string
    {
        return $this->gender;
    }
    public function GetCity(): string
    {
        return $this->city;
    }
    public function GetAddress(): string
    {
        return $this->address;
    }
}
