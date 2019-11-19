<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {

        if (Auth::guard($guard)->check()) {
            return $next($request);
        }

        elseif (($request->subtopic == 5) || ($request->subtopic == 2)) {
            return Redirect::back()->with('msg', 'This formula is only available for registered users ');
        }

        else {
            return $next($request);
        }

    }
}
