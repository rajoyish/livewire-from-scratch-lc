<div>
    <form class="flex gap-2">
        <x-input wire:model.live.debounce="searchText" class="w-full" placeholder="{{ $placeholder }}" />

    </form>
    <livewire:search-results :results="$results" :show="!empty($searchText)" />
</div>
