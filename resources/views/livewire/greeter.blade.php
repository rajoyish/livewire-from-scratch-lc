<div>
    <form wire:submit="changeGreeting()" class="space-y-4">
     <div class="flex gap-4">
         <div>
             <select wire:model.fill="greeting">
                 @foreach ($greetings as $item)
                 <option value="{{ $item->greeting }}">{{ $item->greeting }}</option>
                 @endforeach
             </select>
         </div>

         <div>
             <x-input wire:model.live.debounce="name" />
         </div>
     </div>
        <div>
            <x-input-error for="name" />
        </div>

        <div>
            <x-button>Greet</x-button>
        </div>
    </form>
    @if($greetingMessage !== '')
        <div class="mt-4">
            {{ $greetingMessage }}!
        </div>
    @endif
</div>
