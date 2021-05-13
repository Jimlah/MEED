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
                                Action
                              </span>
                            </div>
                        </td>
                        <td
                            class="px-6 py-2 text-sm font-bold text-gray-500 border-b border-gray-800 border-opacity-50 whitespace-nowrap">
                            <div class="flex space-x-1">
                              <span>view</span>
                              <span>edit</span>
                              <span>delete</span>
                            </div>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection
