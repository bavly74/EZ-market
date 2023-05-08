<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DashboardMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // dd(auth()->user());
        if(auth()->user()->roles()->count() == 0){
            return redirect()->route('home.index');
        }
        return $next($request);
    }
}
