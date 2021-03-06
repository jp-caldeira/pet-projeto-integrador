<?php

namespace App\Http\Middleware;

use Closure;
use\Illuminate\Support\Facades\Auth;

class CheckAdmin
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
        $usuario =  Auth::user();

        if($usuario != null && $usuario->email == "adminproj@gmail.com"){
            return $next($request);
        }else{
        return redirect('/home');
    }
}
}