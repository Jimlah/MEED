<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body>
    <div class="h-screen bg-center bg-cover" style="background-image: url('{{ asset('img/bg-image.jpg') }}');">
        <div class="grid w-full h-full grid-cols-6">
            <div class="flex flex-col justify-between col-span-1 py-2 bg-white bg-opacity-40">
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
                        <a href="{{ route('requests.create') }}"
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
                    <a href="{{ route('requests.index') }}"
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
            <div class="flex flex-col w-full h-full col-span-5 bg-white bg-opacity-70">
                <div class="flex items-center justify-end px-5 py-1 space-x-3 bg-white bg-opacity-60">
                    <div>
                        <button class="flex flex-col justify-center">
                            <span class="self-end text-[0.5rem] text-red-500">24</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#0797E0]" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                </svg>
                            </span>
                        </button>
                    </div>

                    <div>
                        <button>
                            <span>
                                message
                            </span>
                        </button>
                    </div>

                </div>
                <div class="flex flex-col p-5 overscroll-auto">
                  <div class="justify-self-start">
                    @pageroute()
                  </div class="">
                    @yield('body')
                </div>
            </div>
        </div>
    </div>
</body>

</html>
