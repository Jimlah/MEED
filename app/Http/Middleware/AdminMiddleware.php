<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;

class AdminMiddleware
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
    if ($request->user()->role == User::USER_CLIENT) {

      session()->flash('warning', 'You dont have authority to acceess resource');
      return redirect()->route('dashboards.index');
    }
    return $next($request);
  }
}
