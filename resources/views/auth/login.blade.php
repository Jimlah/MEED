@extends('layouts.auth')

@section('body')
    <div class="flex flex-col items-center justify-center w-full h-full space-y-5">
        <div class="flex flex-col items-center w-full">
            <span>MEED</span>
            <span class="text-2xl font-extrabold tracking-tighter">Sign in to your Account</span>
        </div>
        <form action="" method="POST" class="flex flex-col items-start w-full space-y-7">
            <div class="hidden">
              @csrf()
            </div>
            <div class="flex flex-col items-start w-full">
                <label for="email" class="text-sm font-bold text-gray-900 ">Email</label>
                <input type="email" id="email" name="email"
                    class="w-full px-3 py-2 text-sm bg-transparent border border-gray-500 rounded focus:border-gray-700 focus:bg-gray-100">
            </div>
            <div class="flex flex-col items-start w-full">
                <label for="password" class="text-sm font-bold text-gray-900 ">Password</label>
                <input type="password" id="password" name="password"
                    class="w-full px-3 py-2 text-sm bg-transparent border border-gray-500 rounded focus:border-gray-700 focus:bg-gray-100">
            </div>
            <div class="flex flex-wrap justify-between w-full text-sm ">
                <div class="flex items-center justify-between space-x-1">
                    <input type="checkbox" name="remember"> <span>Remember me</span>
                </div>
                <a href="" class="text-blue-500">Forgot your Password?</a>
            </div>
            <button type="submit" class="w-full py-2 font-bold text-white bg-blue-600 hover:bg-blue-800">Login</button>
        </form>
        <span class="text-sm">
            Don't have an account? <a href="{{ route('showregister') }}" class="text-sm text-blue-500">Sign up</a>
        </span>
    </div>
@endsection
