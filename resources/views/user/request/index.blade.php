@extends('layouts.dashboard')

@section('body')
    <div class="w-full h-full p-5 space-y-2 overflow-x-auto bg-white shadow-sm bg-opacity-90">
        <div class="flex flex-wrap items-center justify-between w-full">
            <div>
                <form method="GET" action=""
                    class="flex items-center justify-start bg-transparent bg-white border-b border-gray-500">
                    <input type="search" name="q" class="px-3 py-2 focus:outline-none" value="{{ old('q') }}">
                    <button type="submit">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </form>
            </div>
            <a href="{{ route('requests.create') }}"
                class="flex items-center justify-between space-x-2 bg-[#0797E0] text-white px-3 py-2 font-bold rounded hover:bg-blue-600">
                <span>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                </span>
                <span>New Request</span>
            </a>
        </div>
        <table class="w-full max-w-full text-left table-fixed">
            <thead>
                <tr>
                    <th class="px-6 py-3 text-sm font-bold tracking-wider border-b-2 border-gray-800">Client Name</th>
                    <th class="px-6 py-3 text-sm font-bold tracking-wider border-b-2 border-gray-800">Request Type</th>
                    <th class="px-6 py-3 text-sm font-bold tracking-wider border-b-2 border-gray-800">Description</th>
                    <th class="px-6 py-3 text-sm font-bold tracking-wider border-b-2 border-gray-800">Status</th>
                    <th class="px-6 py-3 text-sm font-bold tracking-wider border-b-2 border-gray-800">Priority</th>
                    <th class="px-6 py-3 text-sm font-bold tracking-wider border-b-2 border-gray-800">Period</th>
                    <th class="px-6 py-3 text-sm font-bold tracking-wider border-b-2 border-gray-800">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reqs as $req)
                    <tr>
                        <td
                            class="px-6 py-2 text-sm font-bold text-gray-500 border-b border-gray-800 border-opacity-50 whitespace-nowrap">
                            <span>{{ $req->client->firstname ?? "" }}</span>
                        </td>
                        <td
                            class="px-6 py-2 text-sm font-bold text-gray-500 border-b border-gray-800 border-opacity-50 whitespace-nowrap">
                            {{ $req->request_type->name }}
                        </td>
                        <td
                            class="px-6 py-2 text-sm font-bold text-gray-500 truncate border-b border-gray-800 border-opacity-50 whitespace-nowrap">
                            <span class="w-12 truncate">
                                {{ $req->description }}
                            </span>
                        </td>
                        <td
                            class="px-6 py-2 text-sm font-bold text-gray-500 border-b border-gray-800 border-opacity-50 whitespace-nowrap">
                            <span>
                                {{ $req->status() }}
                            </span>
                        </td>
                        <td
                            class="px-6 py-2 text-sm font-bold text-gray-500 border-b border-gray-800 border-opacity-50 whitespace-nowrap">
                            <div class="static flex flex-col group">
                                <span class="group-hover:hidden">
                                    <svg class="w-4 h-4 {!! 'text-' . $req->priority_color() . '-500' !!}" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9">
                                        </path>
                                    </svg>
                                </span>
                                @if (auth()->user()->role != \App\Models\User::USER_CLIENT)
                                    @livewire('flag-request', ["reqid"=>$req->id])
                                @else
                                    <span class="hidden group-hover:block">
                                        {{ $req->priority() }}
                                    </span>
                                @endif
                            </div>
                        </td>
                        <td
                            class="px-6 py-2 text-sm font-bold text-gray-500 border-b border-gray-800 border-opacity-50 whitespace-nowrap">
                            <span>
                                {{ $req->priority }}
                            </span>
                        </td>
                        <td
                            class="px-6 py-2 text-sm font-bold text-gray-500 border-b border-gray-800 border-opacity-50 whitespace-nowrap">
                            <div class="flex space-x-1">
                                <a href="{{ route('requests.show', [$req->id]) }}">
                                    <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                        </path>
                                    </svg>
                                </a>
                                @if (auth()->user()->id == $req->client_id)
                                    <a href="{{ route('requests.edit', [$req->id]) }}">
                                        <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                            </path>
                                        </svg>
                                    </a>
                                @endif
                            </div>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
        @if ($reqs->hasPages())
            <div class="flex items-center justify-start space-x-1">
                <a href="{{ $reqs->previousPageUrl() }}"
                    class="p-1 bg-gray-300 rounded-full {{ $reqs->onFirstPage() ? 'bg-gray-100 ' : ' hover:bg-gray-200' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </a>
                <span>{{ $reqs->currentPage() }}</span>
                <a href="{{ $reqs->nextPageUrl() }}"
                    class="p-1 bg-gray-300 rounded-full {{ $reqs->hasMorePages() ? ' hover:bg-gray-200' : 'bg-gray-100' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        @endif
    </div>


@endsection
