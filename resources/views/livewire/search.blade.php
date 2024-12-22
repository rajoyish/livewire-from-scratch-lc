<div>
<form class="flex gap-2">
    <x-input wire:model.live.debounce="searchText" class="w-9/12" placeholder="Type something to search" />
    <x-button wire:click.prevent="clear()" :disabled="empty($searchText)">Clear</x-button>
</form>
<div class="mt-4">
@foreach ($results as $result)
    <div class="p-2 border-b border-gray-200">
        <a href="/articles/{{$result->id}}">{{ $result->title }}</a>
    </div>
@endforeach
</div>
</div>
