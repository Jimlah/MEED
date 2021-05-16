<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class notLoggedIn
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
      if (Auth::check()) {
        dd(Auth::check());
        session()->flash('warning', 'User is currently logged in');
        return redirect()->route('dashboards.index');
      }
        return $next($request);
    }
}
