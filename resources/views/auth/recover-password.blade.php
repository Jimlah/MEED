@extends('layouts.auth')

@section('body')
    <div class="flex flex-col items-center justify-center w-full h-full space-y-5">
        <div class="flex flex-col items-center w-full">
            <span>MEED</span>
            <span class="text-2xl font-extrabold tracking-tighter">Recover Your Password</span>
        </div>
        <form action="{{ route('recoverPasswordWithEmail') }}" method="POST" class="flex flex-col items-start w-full space-y-7">
            <div class="hidden">
              @csrf()
            </div>
            <div class="flex flex-col items-start w-full">
                <label for="email" class="text-sm font-bold text-gray-900 ">Email</label>
                <input type="email" id="email" name="email"
                    class="w-full px-3 py-2 text-sm bg-transparent border border-gray-500 rounded focus:border-gray-700 focus:bg-gray-100">
            </div>
            <button type="submit" class="w-full py-2 font-bold text-white bg-blue-600 hover:bg-blue-800">Recover Password</button>
        </form>
        <span class="text-sm">
            Don't have an account? <a href="{{ route('showregister') }}" class="text-sm text-blue-500">Sign up</a>
        </span>
    </div>
@endsection
