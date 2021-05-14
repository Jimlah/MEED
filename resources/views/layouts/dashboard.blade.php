<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles()
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body>
    <div class="static h-screen bg-center bg-cover" style="background-image: url('{{ asset('img/bg-image.jpg') }}');" x-data="nav()">
        <button class="absolute mx-2 my-3 lg:hidden" x-on:click="toggle"
        :class="{'hidden': isOpen() == false}">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#0797E0]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
        <div class="grid w-full h-full grid-cols-6">
            <div class="flex flex-col justify-between col-span-1 py-2 bg-white lg:pr-0 lg:bg-opacity-40 lg:flex"
              :class="{'hidden': isOpen(), 'absolute h-screen pr-5 bg-opacity-90': isOpen() == false}"
              x-on:click.away="close">
                <div class="flex flex-col items-start space-y-8">
                    <span class="flex items-center justify-start pl-5 space-x-1 text-xl font-bold text-[#0797E0]">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                            </svg>
                        </span>
                        <span>
                            MEED
                        </span>
                    </span>
                    <div class="flex flex-col space-y-2 text-gray-800">
                        <a href="{{ route('dashboards.index') }}"
                            class="flex pl-5 space-x-1 text-sm border-l-2 hover:text-[#0797E0] hover:border-[#0797E0] {{ url()->current() == route('dashboards.index') ? 'text-[#0797E0] border-[#0797E0]' : '' }}">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                            </span>
                            <span class="font-semibold">Dashbaord</span>
                        </a>
                        <a href="{{ route('users.index') }}"
                            class="flex pl-5 space-x-1 text-sm border-l-2 hover:text-[#0797E0] hover:border-[#0797E0] {{ url()->current() == route('requests.create') ? 'text-[#0797E0] border-[#0797E0]' : '' }}">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </span>
                            <span class="font-semibold">Users</span>
                        </a>
                        <a href="{{ route('requests.index') }}"
                            class="flex pl-5 space-x-1 text-sm border-l-2 hover:text-[#0797E0] hover:border-[#0797E0] {{ url()->current() == route('requests.index') ? 'text-[#0797E0] border-[#0797E0]' : '' }}">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                            </span>
                            <span class="font-semibold">Requests</span>
                        </a>
                    </div>
                </div>
                <div class="mb-5">
                    <a href="{{ route('logout') }}"
                        class="flex pl-5 space-x-1 text-sm border-l-2 hover:text-[#0797E0] hover:border-[#0797E0]">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-[#0797E0]" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                        </span>
                        <span class="font-semibold">Logout</span>
                    </a>
                </div>
            </div>
            <div class="flex flex-col w-full h-full col-span-6 bg-white lg:col-span-5 bg-opacity-70">
                <div class="flex items-center justify-end w-full px-5 py-1 space-x-3 bg-white border bg-opacity-60">

                    <div class="static flex flex-col" x-data="notify()">
                        <button class="flex flex-col justify-center" x-on:click="toggle">
                            <span class="self-end text-[0.5rem] text-red-500">24</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#0797E0]" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                </svg>
                            </span>
                        </button>
                        <ul class="absolute flex flex-col mt-10 mr-5 text-sm text-gray-700 bg-white divide-y divide-gray-500 bg-opacity-80 -ml-28 divide-opacity-50"
                            :class="{ 'hidden': isClose()}" x-on:click.away="close">
                            <li>
                                <a href="{{ route('requests.show', [1]) }}"
                                    class="flex items-center px-2 py-1 space-x-2 ">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                    <span>
                                        You have been attached to a complaint
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('requests.show', [1]) }}"
                                    class="flex items-center px-2 py-1 space-x-2 ">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                    <span>
                                        You have been attached to a complaint
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('requests.show', [1]) }}"
                                    class="flex items-center px-2 py-1 space-x-2 ">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                    <span>
                                        You have been attached to a complaint
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('requests.show', [1]) }}"
                                    class="flex items-center justify-center px-2 py-1 space-x-2 text-[#0797E0]">
                                    <span>
                                        View all notification
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="static flex flex-col" x-data="dropdown()">
                        <button class="flex items-center justify-center" x-on:click="toggle">
                            <img src="{{ asset('img/user.png') }}" class="w-10 h-10 rounded-full">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </button>
                        <ul class="absolute flex flex-col mt-12 mr-5 -ml-10 text-sm text-gray-700 bg-white divide-y divide-gray-500 bg-opacity-80 divide-opacity-50"
                            :class="{ 'hidden': isClose() }" x-on:click.away="close">
                            <li>
                                <a href="{{ route('requests.show', [1]) }}"
                                    class="flex items-center px-2 py-1 space-x-2 ">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                    <span>
                                        profile
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('requests.show', [1]) }}"
                                    class="flex items-center px-2 py-1 space-x-2 ">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </span>
                                    <span>
                                        settings
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="flex flex-col w-full h-full p-5 space-y-3">
                    <span class="text-xs font-bold text-gray-500 justify-self-start">
                      <livewire:alerts>
                        {{ pagePath(url()->current()) }}
                    </span>
                    <div class="flex w-full h-full overscroll-auto">
                        @yield('body')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/dash.js') }}"></script>
</body>

</html>
