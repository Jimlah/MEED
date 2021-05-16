<div x-data="{ open: false }">
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <button class="focus:outline-none" x-on:click="open = true ">
      {{ $req->status() }}
  </button>
  <div x-show="open"
      class="absolute top-0 left-0 flex items-center justify-center w-full h-screen bg-gray-600 bg-opacity-25">
      <div class="relative flex flex-col p-5 space-x-2 space-y-3 bg-white rounded-md">
          <button class="absolute top-0 right-0 mx-1 my-1 focus:outline-none" x-on:click="open = false ">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z">
                  </path>
              </svg>
          </button>
          <button
              class="px-2 py-1 text-white bg-red-500 hover:bg-opacity-50 focus:outline-none" wire:click="changeStatus( 1,  {{ $req->id }})">Pending</button>
          <button class="px-2 py-1 text-white bg-green-500 hover:bg-opacity-50 focus:outline-none" wire:click="changeStatus( 2,  {{ $req->id }})">Open</button>
          <button class="px-2 py-1 text-white bg-blue-500 hover:bg-opacity-50 focus:outline-none" wire:click="changeStatus( 3,  {{ $req->id }})">processing</button>
          <button class="px-2 py-1 text-white bg-purple-500 hover:bg-opacity-50 focus:outline-none" wire:click="changeStatus( 4,  {{ $req->id }})">Close</button>
      </div>
  </div>
</div>
