<div class="hidden text-black group-hover:block">
    <input type="range" min="0" max="1" value="{{ $user->status }}" class="w-8 h-4 py-2 bg-green-500" wire:click='changeStatus({{ $user->id }})'>
</div>
