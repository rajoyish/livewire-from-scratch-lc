<div class="{{ $show ? 'block' : 'hidden' }}">
    <div class="mt-4 bg-slate-50 p-4 absolute rounded-md shadow-md">
        @if (count($results) === 0)
            <p>
                No results found.
            </p>
        @endif
        <div class="p-2 border-b border-gray-200"></div>
        @foreach ($results as $result)
            <div class="p-2 border-b border-gray-200">
                <a href="/articles/{{ $result->id }}">{{ $result->title }}</a>
            </div>
        @endforeach
    </div>
</div>
