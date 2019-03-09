<?php

namespace App\Http\Middleware;

use Closure;

class employeeSessionVerify
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
       if(session('loggedEmployee') == null){
            return redirect()->route('login.index');
        }

        return $next($request);
    }
}
