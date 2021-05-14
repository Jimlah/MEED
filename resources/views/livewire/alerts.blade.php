<div class="static text-sm font-bold">
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="absolute right-0 flex flex-col items-start mr-5 space-y-2" x-data="nos()">
        @if ($type != null)
            @if ($type == 'success')
                <div
                    class="flex items-center justify-between p-1 bg-green-300 bg-opacity-25 border border-green-700 shadow rounded-xl space-x-14 border-opacity-80">
                    <div class="flex items-center justify-between space-x-3">
                        <span class="p-2 bg-green-500 rounded-2xl">
                            <svg class="w-6 h-6 text-green-800 bg-white rounded-full" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </span>
                        <span class="font-semibold blur-sm">
                            {{ $message }}
                        </span>
                    </div>
                    <button class="text-gray-500 focus:outline-none hover:text-gray-700" x-on:click="hide()">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </button>
                </div>
            @endif

            @if ($type == 'info')
                <div
                    class="flex items-center justify-between p-1 bg-blue-300 bg-opacity-25 border border-blue-700 shadow rounded-xl space-x-14 border-opacity-80">
                    <div class="flex items-center justify-between space-x-3">
                        <span class="p-1 bg-blue-500 rounded-2xl">
                            <svg class="w-8 h-8 text-blue-500 rounded-full" fill="#FFFFFF" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </span>
                        <span class="font-semibold blur-sm">
                            {{ $message }}
                        </span>
                    </div>
                    <button class="text-gray-500 focus:outline-none hover:text-gray-700" x-on:click="hide()">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </button>
                </div>
            @endif

            @if ($type == 'warning')
                <div
                    class="flex items-center justify-between p-1 bg-yellow-300 bg-opacity-25 border border-yellow-700 shadow rounded-xl space-x-14 border-opacity-80">
                    <div class="flex items-center justify-between space-x-3">
                        <span class="p-1 bg-yellow-500 rounded-2xl">
                            <svg class="w-8 h-8 text-yellow-500 " fill="#FFFFFF" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                                </path>
                            </svg>
                        </span>
                        <span class="font-semibold blur-sm">
                            {{ $message }}
                        </span>
                    </div>
                    <button class="text-gray-500 focus:outline-none hover:text-gray-700" x-on:click="hide()">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </button>
                </div>

            @endif

            @if ($type == 'error')
                <div
                    class="flex items-center justify-between p-1 bg-red-300 bg-opacity-25 border border-red-700 shadow rounded-xl space-x-14 border-opacity-80">
                    <div class="flex items-center justify-between space-x-3">
                        <span class="p-1 bg-red-500 rounded-2xl">
                            <svg class="w-8 h-8 text-red-500 " fill="#FFFFFF" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                                </path>
                            </svg>
                        </span>
                        <span class="font-semibold blur-sm">
                            {{ $message }}
                        </span>
                    </div>
                    <button class="text-gray-500 focus:outline-none hover:text-gray-700" x-on:click="hide()">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </button>
                </div>
            @endif
        @endif

        @if ($errors)
            @foreach ($errors->all() as $err)
                <div
                    class="flex items-center justify-between p-1 bg-red-300 bg-opacity-25 border border-red-700 shadow rounded-xl space-x-14 border-opacity-80">
                    <div class="flex items-center justify-between space-x-3">
                        <span class="p-1 bg-red-500 rounded-2xl">
                            <svg class="w-8 h-8 text-red-500 " fill="#FFFFFF" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                                </path>
                            </svg>
                        </span>
                        <span class="font-semibold blur-sm">
                            {{ $err }}
                        </span>
                    </div>
                    <button class="text-gray-500 focus:outline-none hover:text-gray-700" x-on:click="hide()">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </button>
                </div>
            @endforeach
        @endif
    </div>

</div>

<script>
    function nos() {
        return {
            close: false,
            hide() {
                event.currentTarget.parentNode.classList.add("hidden");
                console.log("hey")
                return true;
            }
        }
    }

</script>
