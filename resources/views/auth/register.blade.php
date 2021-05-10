@extends('layouts.auth')

@section('body')
    <div class="flex flex-col items-center justify-center w-full h-full space-y-5">
        <div class="flex flex-col items-center w-full">
            <span>MEED</span>
            <span class="text-2xl font-extrabold tracking-tighter">Sign up</span>
        </div>
        <form action="{{ route('register') }}" method="POST" class="flex flex-col items-start w-full space-y-7">
          <div class="hidden">
            @csrf()
          </div>
            <div class="flex flex-col items-start w-full">
                <label for="firstname" class="text-sm font-bold text-gray-900 ">First Name</label>
                <input type="text" id="firstname" name="firstname"
                    class="w-full px-3 py-2 text-sm bg-transparent border border-gray-500 rounded focus:border-gray-700 focus:bg-gray-100">
            </div>
            <div class="flex flex-col items-start w-full">
                <label for="lastname" class="text-sm font-bold text-gray-900 ">Last Name</label>
                <input type="text" id="lastname" name="lastname"
                    class="w-full px-3 py-2 text-sm bg-transparent border border-gray-500 rounded focus:border-gray-700 focus:bg-gray-100">
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
            <div class="flex flex-col items-start w-full">
                <label for="password_confirmation" class="text-sm font-bold text-gray-900 ">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation"
                    class="w-full px-3 py-2 text-sm bg-transparent border border-gray-500 rounded focus:border-gray-700 focus:bg-gray-100">
            </div>
            <button type="submit" class="w-full py-2 font-bold text-white bg-blue-600 hover:bg-blue-800">Login</button>
        </form>
        <span class="text-sm">
            Already have an account? <a href="{{ route('showlogin') }}" class="text-sm text-blue-500">Login</a>
        </span>
    </div>
@endsection
