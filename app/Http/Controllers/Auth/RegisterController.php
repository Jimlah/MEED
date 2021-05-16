<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\VerifyUser;
use Illuminate\Support\Str;
use App\Mail\EmailConfirmation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\RegisterRequest;
use App\Mail\recoverPassword;

class RegisterController extends Controller
{
  public function index()
  {
    return view('auth.register');
  }

  public function register(RegisterRequest $request)
  {
    $user = User::create([
      'firstname' => $request->input('firstname'),
      'lastname' => $request->input('lastname'),
      'email' => $request->input('email'),
      'role' => User::USER_CLIENT,
      'password' => Hash::make($request->password),
      'status' => true,
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

  public function recoverPasswordWithEmail(Request $request)
  {
    $request->validate([
      'email' => 'required|email'
    ]);

    $user = User::where('email', $request->input('email'))->first();

    VerifyUser::create([
      "user_id" => $user->id,
      "token" => Str::random(20),
    ]);

    Mail::to($user->email)->send(new recoverPassword($user));

    session()->flash('success', 'An email has been sent to you');
    return redirect()->back();
  }

  public function recoverPassword(Request $request)
  {
    $user_token = VerifyUser::where('token', $request->token)->first();
    if($user_token){
      $user = User::find($user_token);
      session()->flash('success', 'Enter Your new  password');
      return redirect()->route('showLogin');
    }
    session()->flash('error', "Invalid recovery link");
    return view('auth.recover-password');
  }
}
