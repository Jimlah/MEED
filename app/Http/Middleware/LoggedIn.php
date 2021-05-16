<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoggedIn
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
    if (!Auth::check()){
        Auth::logout();
        session()->flash('warning', 'You are not logged in');
      return redirect()->route('showlogin');
    }
    return $next($request);
  }
}
