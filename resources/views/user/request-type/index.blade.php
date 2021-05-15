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
            <a href="{{ route('request-types.create') }}"
                class="flex items-center justify-between space-x-2 bg-[#0797E0] text-white px-3 py-2 font-bold rounded hover:bg-blue-600">
                <span>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                </span>
                <span>New Request Type</span>
            </a>
        </div>
        <table class="w-full max-w-full text-left table-fixed">
            <thead>
                <tr>
                    <th class="px-6 py-3 text-sm font-bold tracking-wider border-b-2 border-gray-800">Name</th>
                    <th class="px-6 py-3 text-sm font-bold tracking-wider border-b-2 border-gray-800">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reqType as $req)
                    <tr>
                        <td
                            class="px-6 py-2 text-sm font-bold text-gray-500 border-b border-gray-800 border-opacity-50 whitespace-nowrap">
                            <span>{{ $req->name }}</span>
                        </td>
                        <td
                            class="px-6 py-2 text-sm font-bold text-gray-500 border-b border-gray-800 border-opacity-50 whitespace-nowrap">
                            <div class="flex space-x-1">
                                <a href="{{ route('request-types.edit', [$req->id]) }}">
                                    <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
        @if ($reqType->hasPages())
            <div class="flex items-center justify-start space-x-1">
                <a href="{{ $reqType->previousPageUrl() }}"
                    class="p-1 bg-gray-300 rounded-full {{ $reqType->onFirstPage() ? 'bg-gray-100 ' : ' hover:bg-gray-200' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </a>
                <span>{{ $reqType->currentPage() }}</span>
                <a href="{{ $reqType->nextPageUrl() }}"
                    class="p-1 bg-gray-300 rounded-full {{ $reqType->hasMorePages() ? ' hover:bg-gray-200' : 'bg-gray-100' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        @endif
    </div>


@endsection
