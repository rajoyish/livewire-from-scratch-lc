<div>
    <form class="flex gap-2">
        <x-input wire:model.live.debounce="searchText" class="w-9/12" placeholder="{{ $placeholder }}" />
        <x-button wire:click.prevent="clear()" :disabled="empty($searchText)">Clear</x-button>
    </form>
    <livewire:search-results :results="$results" :show="!empty($searchText)" />
</div>
