<?php

namespace App\Http\Middleware;

use Closure;

class votermiddleware
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
        if($request->session()->get('loggedUser')->persontypeid != "2")
        {
            return redirect()->route('login.home');
        }
        return $next($request);
    }
}
