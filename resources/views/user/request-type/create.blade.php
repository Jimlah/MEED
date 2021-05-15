@extends('layouts.dashboard')

@section('body')
    <div class="grid w-full h-full grid-cols-2 gap-5">
        <div class="flex flex-col p-5 space-y-2 bg-white md:col-span-1 col-span-full bg-opacity-90">
                <form action="{{ route('request-types.store') }}" class="" method="POST">
                  <div class="hidden">
                    @csrf
                  </div>
                    <div class="grid grid-cols-1 gap-5">
                        <div class="flex flex-col col-span-1 ">
                            <label for="name" class="text-sm font-bold text-gray-700 uppercase">Name</label>
                            <input type="text" name="name" id="name"
                                class="px-3 py-2 border-2 border-[#0797E0] focus:outline-none">
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
