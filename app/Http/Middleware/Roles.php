<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Roles
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
        // return $next($request);
        // return redirect('/login');
        if (Auth::check() && Auth::user()->isAdmin()) {
            echo "";
            return $next($request);
        }else{
            echo "";
        }
        abort(403); //redirect to login
    }
    
}
