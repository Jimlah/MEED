<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
  public function index()
  {
    return view('auth.login');
  }

  public function login(LoginRequest $request)
  {
    $validated = $request->except(['remember', '_token']);

    if (Auth::attempt($validated, $request->only('remember') ?? false)) {

      if (!auth()->user()->status) {
        session()->flash('warning', "You have been deactivated. Kindly contact the admin");
        Auth::logout();
      }
      session()->flash('success', "You have successfully logged in");
      return redirect()->route('dashboards.index');
    }

    session()->flash('error', "Invalid Credentials");
    Auth::logout();
    return redirect()->back();
  }

  public function logout()
  {
    Auth::logout();
    session()->flash('success', "You have successfully logged out");
    return redirect()->route('login');
  }
}
