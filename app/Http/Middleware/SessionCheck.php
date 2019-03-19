<?php

namespace App\Http\Middleware;

use Closure;

class SessionCheck
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
        if(!$request->session()->has('loggedUser'))
        {
            return redirect()->route('login.index')->with('sessioncheck',"Please Login To Access The Page");
        }
        return $next($request);
    }
}
