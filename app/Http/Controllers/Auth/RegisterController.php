<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\VerifyUser;
use Illuminate\Support\Str;
use App\Mail\EmailConfirmation;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $user = User::create([
          'firstname' => $request->firstname,
          'lastname' => $request->lastname,
          'email' => $request->email,
          'role' => User::USER_CLIENT,
          'password' => Hash::make($request->password),
        ]);

        VerifyUser::create([
          'user_id' => $user->id,
          'token' => Str::random(40)
        ]);

        Mail::to($user->email)->send(new EmailConfirmation($user));

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
