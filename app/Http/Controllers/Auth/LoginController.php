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
        
        if (Auth::attempt($validated, $request->only('remember') ?? false) ) {
            session()->flash('success', "You have successfully logged in");
            if (auth()->user()->role == User::USER_ADMIN || auth()->user()->role === User::USER_MEMBER) {
                return redirect()->route('dashboards.index');
            }
            if (auth()->user()->role == User::USER_CLIENT) {
                return redirect()->route('requests.index');
            }
        }
        session()->flash('error', "You are unable to login");
        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();
        session()->flash('success', "You have successfully logged out");
        return redirect()->route('login');
    }
}
