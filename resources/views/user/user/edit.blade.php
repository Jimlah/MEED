@extends('layouts.dashboard')

@section('body')
    <div class="grid w-full h-full grid-cols-2 gap-5">
        <div class="p-5 bg-white md:col-span-1 col-span-full bg-opacity-90">
            <form action="{{ route('users.update', [$user->id]) }}" class="" method="POST">
                <div class="hidden">
                    @method('PUT')
                    @csrf
                </div>
                <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                    <div class="flex flex-col col-span-1 md:col-span-2">
                        <label for="firstname" class="text-sm font-bold text-gray-700 uppercase">First Name</label>
                        <input type="text" name="firstname" id="firstname" value="{{ $user->firstname }}"
                            class="px-3 py-2 border-2 border-[#0797E0] focus:outline-none">
                    </div>
                    <div class="flex flex-col col-span-1 md:col-span-2">
                        <label for="lastname" class="text-sm font-bold text-gray-700 uppercase">Last Name</label>
                        <input type="text" name="lastname" id="lastname" value="{{ $user->lastname }}"
                            class="px-3 py-2 border-2 border-[#0797E0] focus:outline-none">
                    </div>
                    <div class="flex flex-col col-span-1 md:col-span-2">
                        <label for="email" class="text-sm font-bold text-gray-700 uppercase">Email</label>
                        <input type="email" name="email" id="email" value="{{ $user->email }}"
                            class="px-3 py-2 border-2 border-[#0797E0] focus:outline-none">
                    </div>
                    <div class="flex flex-col col-span-1 md:col-span-2">
                        <label for="role" class="text-sm font-bold text-gray-700 uppercase">Role</label>
                        <select name="role" id="role" class="px-3 py-2 border-2 border-[#0797E0] focus:outline-none">
                            @foreach ($roles as $key => $role)
                                <option value="{{ $key }}" {{ $user->role == $key ? "SELECTED" : "" }}>{{ $role }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex flex-col col-span-1 md:col-span-2">
                        <button type="submit"
                            class="px-3 py-2 bg-[#0797E0] text-white font-bold hover:bg-blue-600">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="hidden p-5 bg-white md:col-span-1 md:block bg-opacity-90">

            <livewire:calender>

        </div>
    </div>
@endsection

