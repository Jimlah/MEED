@extends('layouts.dashboard')

@section('body')
    <div class="grid w-full h-full grid-cols-2 gap-5">
        <div class="flex flex-col p-5 space-y-2 bg-white md:col-span-1 col-span-full bg-opacity-90" x-data="{ tab: 'foo' }">
            <div class="flex items-start justify-start">
                <button class="p-2 text-sm bg-blue-300 focus:outline-none" :class="{ 'active bg-gray-100': tab === 'foo' }" x-on:click="tab = 'foo'">Self</button>
                <button class="p-2 text-sm bg-blue-300 focus:outline-none" :class="{ 'active bg-gray-100': tab === 'bar' }"
                    x-on:click="tab = 'bar'">Others</button>
            </div>
            <div>
                <div class="" x-show="tab === 'foo'">
                    <form action="{{ route('requests.store') }}" class="" method="POST">
                        <div class="hidden">
                            @csrf
                            <input type="text" name="type" value="self">
                        </div>
                        <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                            <div class="flex flex-col col-span-1 md:col-span-2">
                                <label for="firstname" class="text-sm font-bold text-gray-700 uppercase">Request
                                    Type</label>
                                <select name="request_type_id" id="request_type_id"
                                    class="px-3 py-2 border-2 border-[#0797E0] focus:outline-none">
                                    @foreach ($requesttypes as $requesttype)
                                        <option value="{{ $requesttype->id }}"> {{ $requesttype->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex flex-col col-span-1 md:col-span-2">
                                <label for="lastname" class="text-sm font-bold text-gray-700 uppercase">Description</label>
                                <textarea type="text" name="description" id="description"
                                    class="px-3 py-2 border-2 border-[#0797E0] focus:outline-none resize-none form-textarea block w-full text-left"
                                    placeholder="Describe the request type" rows="10">

                                    </textarea>
                            </div>
                            <div class="flex flex-col col-span-1 md:col-span-2">
                                <button type="submit"
                                    class="px-3 py-2 bg-[#0797E0] text-white font-bold hover:bg-blue-600">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="" x-show="tab === 'bar'">
                    <form action="{{ route('requests.store') }}" class="" method="POST">
                        <div class="hidden">
                            @csrf
                            <input type="text" name="type" value="others">
                        </div>
                        <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                            <div class="flex flex-col col-span-1 ">
                                <label for="firstname" class="text-sm font-bold text-gray-700 uppercase">First Name</label>
                                <input type="text" name="firstname" id="firstname"
                                    class="px-3 py-2 border-2 border-[#0797E0] focus:outline-none">
                            </div>
                            <div class="flex flex-col col-span-1">
                                <label for="lastname" class="text-sm font-bold text-gray-700 uppercase">Last Name</label>
                                <input type="text" name="lastname" id="lastname"
                                    class="px-3 py-2 border-2 border-[#0797E0] focus:outline-none">
                            </div>
                            <div class="flex flex-col col-span-1 ">
                                <label for="email" class="text-sm font-bold text-gray-700 uppercase">Email</label>
                                <input type="email" name="email" id="email"
                                    class="px-3 py-2 border-2 border-[#0797E0] focus:outline-none">
                            </div>
                            <div class="flex flex-col col-span-1 ">
                                <label for="firstname" class="text-sm font-bold text-gray-700 uppercase">Request
                                    Type</label>
                                <select name="request_type_id" id="request_type_id"
                                    class="px-3 py-2 border-2 border-[#0797E0] focus:outline-none">
                                    @foreach ($requesttypes as $requesttype)
                                        <option value="{{ $requesttype->id }}"> {{ $requesttype->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex flex-col col-span-1 md:col-span-2">
                                <label for="lastname" class="text-sm font-bold text-gray-700 uppercase">Description</label>
                                <textarea type="text" name="description" id="description"
                                    class="px-3 py-2 border-2 border-[#0797E0] focus:outline-none resize-none form-textarea block w-full text-left"
                                    placeholder="Describe the request type" rows="8">

                                  </textarea>
                            </div>
                            <div class="flex flex-col col-span-1 md:col-span-2">
                                <button type="submit"
                                    class="px-3 py-2 bg-[#0797E0] text-white font-bold hover:bg-blue-600">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="hidden p-5 bg-white md:col-span-1 md:block bg-opacity-90">

            <livewire:calender>

        </div>
    </div>
@endsection
