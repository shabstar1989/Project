<?php

namespace App\Queries\Auth;

class LoginQuery
{
    protected $email;
    protected $password;

    public function __construct($Data)
    {
        if (is_array($Data))
        {
            foreach ($Data as $Key => $Value)
            {
                $this->$Key = $Value;
            }
        }
    }

    public function GetPassword(): string
    {
        return $this->password;
    }
    public function GetEmail(): string
    {
        return $this->email;
    }
}
