<?php

namespace App\Http\Middleware;

use Closure;

class verifyusertype
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
        if($request->session()->get('loggedUser')->usertype != "admin")
        {
            return redirect()->route('home.index');
        }
        return $next($request);
    }
}
