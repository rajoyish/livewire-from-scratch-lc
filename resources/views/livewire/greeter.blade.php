<div>
    <form wire:submit="changeName()" class="space-y-4">
     <div class="flex gap-4">
         <div>
             <select wire:model.fill="greeting">
                 <option value="Hello">Hello</option>
                 <option value="Howdy" selected>Howdy</option>
                 <option value="Hi">Hi</option>
                 <option value="Hey">Hey</option>
             </select>
         </div>

         <div>
             <x-input wire:model.live.debounce="name" />
         </div>
     </div>

        <div>
            <x-button>Greet</x-button>
        </div>
    </form>
    @if($name !== '')
        <div class="mt-4">
            {{ $greeting }}, {{ $name }}!
        </div>
    @endif
</div>
