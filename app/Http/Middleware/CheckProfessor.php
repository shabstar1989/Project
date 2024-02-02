<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\RoleUser;

class CheckProfessor
{
    protected $role_User;
    function __construct( RoleUser $role_User){

        $this->role_User = $role_User;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (Auth::check()) {

            $Role = $this->role_User->where("user_id", Auth::user()->id)->where("role_id", 2)->exists();
            if($Role)
            {
                return $next($request);
            }
            return redirect('/');
        }
        return redirect('/');

    }
}
