@extends('layouts.dashboard')

@section('body')
    <div class="grid w-full h-full grid-cols-2 gap-5">
        <div class="flex flex-col p-5 space-y-2 bg-white md:col-span-1 col-span-full bg-opacity-90">

            <div>
                <div class="">
                    <form action="{{ route('requests.update', [$reqmod->id]) }}" class="" method="POST">
                        <div class="hidden">
                            @csrf
                            @method('PUT')
                            <input type="text" name="type" value="self">
                        </div>
                        <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                            <div class="flex flex-col col-span-1 md:col-span-2">
                                <label for="firstname" class="text-sm font-bold text-gray-700 uppercase">Request
                                    Type</label>
                                <select name="request_type_id" id="request_type_id"
                                    class="px-3 py-2 border-2 border-[#0797E0] focus:outline-none">
                                    @foreach ($requesttypes as $requesttype)
                                        <option value="{{ $requesttype->id }}" {{ $requesttype->id == $reqmod->id ? "SELECTED" : "" }}> {{ $requesttype->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex flex-col col-span-1 md:col-span-2">
                                <label for="lastname" class="text-sm font-bold text-gray-700 uppercase">Description</label>
                                <textarea type="text" name="description" id="description"
                                    class="px-3 py-2 border-2 border-[#0797E0] focus:outline-none resize-none form-textarea block w-full text-left"
                                    placeholder="Describe the request type" rows="10">
                                  {{ $reqmod->description }}
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
