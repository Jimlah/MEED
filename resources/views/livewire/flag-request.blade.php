<div class="absolute hidden group-hover:block">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="flex flex-col items-center justify-center -mt-5 space-y-1" wire:submit.prevent="flag">
      <span>Choose a flag</span>
      <div class="flex items-center justify-center space-x-2">
          <button
          wire:click="flag(3, {{ $reqid }})"
          >
            <svg class="w-4 h-4 text-red-500" fill="none" stroke="currentColor"
              viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9">
              </path>
          </svg>
          </button>
          <button wire:click="flag(2, {{ $reqid }})">
            <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor"
              viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9">
              </path>
          </svg>
          </button>
          <button wire:click="flag(1, {{ $reqid }})">
            <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor"
              viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9">
              </path>
          </svg>
          </button>
      </div>
    </div>
</div>
