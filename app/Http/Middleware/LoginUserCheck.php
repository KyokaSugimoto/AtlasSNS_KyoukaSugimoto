<?php

namespace App\Http\Middleware;
use App\User;

use Closure;




class LoginUserCheck extends User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $mail = Auth::guard()->mail;
        $requestMail = $request->input('mail');

        if($mail == $requestMail)
        {
                    return $next($request);
        }
        return response(view("auth.login"));
    }
}
