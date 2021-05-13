<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        User::create([
          'firstname' => $request->firstname,
          'lastname' => $request->lastname,
          'email' => $request->email,
          'role' => User::USER_CLIENT,
          'password' => Hash::make($request->password),
        ]);

        session()->flash('success', 'You have successfully registered');

        return redirect('login');
    }

    public function showRecoverPassword()
    {
      return view('auth.recover-password');
    }

    public function recoverPassword()
    {
      return view('auth.recover-password');
    }
}
