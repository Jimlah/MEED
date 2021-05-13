@extends('layouts.dashboard')

@section('body')
    <div class="w-full h-full p-5 overflow-x-auto bg-white shadow-sm bg-opacity-90">
        <div class="flex flex-wrap items-center justify-between w-full">
            <div>
                <form method="GET" action=""
                    class="flex items-center justify-start bg-transparent bg-white border-b border-gray-500">
                    <input type="search" name="q" class="px-3 py-2 focus:outline-none">
                    <button type="submit">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </form>
            </div>
            <a href="{{ route('users.create') }}"
                class="flex items-center justify-between space-x-2 bg-[#0797E0] text-white px-3 py-2 font-bold rounded hover:bg-blue-600">
                <span>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                </span>
                <span>New User</span>
            </a>
        </div>
        <table class="w-full text-left table-auto">
            <thead>
                <tr>
                    <th class="px-6 py-3 text-sm font-bold tracking-wider border-b-2 border-gray-800">First Name</th>
                    <th class="px-6 py-3 text-sm font-bold tracking-wider border-b-2 border-gray-800">Last Name</th>
                    <th class="px-6 py-3 text-sm font-bold tracking-wider border-b-2 border-gray-800">Email</th>
                    <th class="px-6 py-3 text-sm font-bold tracking-wider border-b-2 border-gray-800">Role</th>
                    <th class="px-6 py-3 text-sm font-bold tracking-wider border-b-2 border-gray-800">Status</th>
                    <th class="px-6 py-3 text-sm font-bold tracking-wider border-b-2 border-gray-800">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td
                            class="px-6 py-2 text-sm font-bold text-gray-500 border-b border-gray-800 border-opacity-50 whitespace-nowrap">
                            <span>{{ $user->firstname }}</span>
                        </td>
                        <td
                            class="px-6 py-2 text-sm font-bold text-gray-500 border-b border-gray-800 border-opacity-50 whitespace-nowrap">
                            {{ $user->lastname }}
                        </td>
                        <td
                            class="px-6 py-2 text-sm font-bold text-gray-500 border-b border-gray-800 border-opacity-50 whitespace-nowrap">
                            <span>
                                {{ $user->email }}
                            </span>
                        </td>
                        <td
                            class="px-6 py-2 text-sm font-bold text-gray-500 border-b border-gray-800 border-opacity-50 whitespace-nowrap">
                            <span>
                                {{ $user->role() }}
                            </span>
                        </td>
                        <td
                            class="px-6 py-2 text-sm font-bold text-gray-500 border-b border-gray-800 border-opacity-50 whitespace-nowrap">
                            <div class="group">
                                <span class="px-2 py-1 text-white bg-green-500 bg-opacity-40 group-hover:hidden">
                                    Active
                                </span>
                                <span class="hidden text-black group-hover:block">
                                    <input type="range" min="0" max="1" class="w-8 h-4 py-2 bg-green-500">
                                </span>
                            </div>
                        </td>
                        <td
                            class="px-6 py-2 text-sm font-bold text-gray-500 border-b border-gray-800 border-opacity-50 whitespace-nowrap">
                            <div class="flex space-x-1">
                                <a href="{{ route('users.show', [$user->id]) }}">
                                    <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                        </path>
                                    </svg>
                                </a>
                                <a href="{{ route('users.edit', [$user->id]) }}">
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
        <div class="">
          <button>Prev</button>
          <span>10</span>
          <button>Next</button>
        </div>
    </div>


@endsection
