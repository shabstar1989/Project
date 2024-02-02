<?php

namespace App\Http\Controllers\Auth;

use App\CommandBus;
use App\Commands\Auth\LoginCommand;
use App\Commands\Auth\RegisterUserCommand;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthRequest;
use App\Http\Requests\Auth\LoginRequest;
use App\Queries\Auth\LoginQuery;
use App\QueryBus;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function __construct(protected CommandBus $CommandBus, protected QueryBus $QueryBus)
    {
    }


    public function PageRegister()
    {
        return view("Pages.Auth.Register");
    }

    public function Register(AuthRequest $request)
    {
        $Data = $request->except('_token');
        $Command = new RegisterUserCommand($Data);
        $this->CommandBus->handle($Command);

    }

    public function PageLogin(Request $request)
    {
        return view('Pages.Auth.Login');
    }

    public function Login(LoginRequest $request)
    {

        $Data = $request->except("_token");
        $Command = new LoginQuery($Data);
        return $this->QueryBus->handle($Command);

    }
}
