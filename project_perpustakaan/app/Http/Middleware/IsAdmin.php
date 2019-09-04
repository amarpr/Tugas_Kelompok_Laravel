<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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

        $requestedUserId = $request->route()->parameter('id');

        if (Auth::user()->level === 'admin' || Auth::user()->id == $requestedUserId) {
            return $next($request);
        } else {
            return response()->view('pages.home');
        }
    }
}
