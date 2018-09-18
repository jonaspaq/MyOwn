<?php

namespace App\Http\Middleware;

use Closure;

class CarolinianMiddleware
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
        if(auth()->check() && $request->carolinian()->userType == 'Student'){
            return redirect()->route('users.student.profile');
        }
        return $next($request);
    }
}
