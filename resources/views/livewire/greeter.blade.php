<div>
    <div>
        Hello, {{ $name }}
    </div>
    <form wire:submit="changeName(document.querySelector('#newName').value)">
        <div class="mt-4">
            <x-input id="newName" />
        </div>
        <div class="mt-4">
            <x-button>Greet</x-button>
        </div>
    </form>
</div>
