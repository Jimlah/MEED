@extends('layouts.dashboard')

@section('body')
    <div class="grid w-full h-full grid-cols-2 gap-5">
        <div class="p-5 bg-white md:col-span-1 col-span-full bg-opacity-90">
          
        </div>
        <div class="hidden p-5 bg-white md:col-span-1 md:block bg-opacity-90">

            <livewire:calender>

        </div>
    </div>
@endsection
