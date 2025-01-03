<div class="{{ $show ? 'block' : 'hidden' }}">
    <div class="mt-4 bg-slate-50 p-4 absolute rounded-md shadow-md">
        <div class="absolute top-0 right-0 pt-1 pr-3 pb-4">
            <button wire:click.stop="dispatch('search:clear-results')" type="button" class="text-2xl">&times;</button>
        </div>
        @if (count($results) === 0)
            <p>
                No results found.
            </p>
        @endif
        <div class="p-2 border-b border-gray-200"></div>
        @foreach ($results as $result)
            <div class="p-2 border-b border-gray-200">
                <a wire:navigate href="/articles/{{ $result->id }}">{{ $result->title }}</a>
            </div>
        @endforeach
    </div>
</div>
