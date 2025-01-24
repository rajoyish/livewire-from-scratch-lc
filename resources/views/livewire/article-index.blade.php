<div>
    <!-- List -->
    <ul class="space-y-10">
        {{-- Item --}}
        @foreach ($articles as $article)
            <a wire:key="{{ $article->id }}" href="/articles/{{ $article->id }}">
                <li>
                    <p class="mb-2 text-gray-500 dark:text-neutral-500">
                        {{ $article->created_at->diffForHumans() }}
                    </p>
                    <h5 class="font-bold text-2xl text-gray-800 dark:text-neutral-200">
                        {{ $article->title }}
                    </h5>
                    <p class="mt-1 text-gray-500 dark:text-neutral-500">
                        {{ str($article->content)->words(30) }}
                    </p>
                    <p class="mt-1">
                        <a class="text-gray-500 underline hover:text-gray-800 hover:decoration-2 focus:outline-none focus:decoration-2 dark:text-neutral-500 dark:hover:text-neutral-400"
                            href="/articles/{{ $article->id }}">
                            Continue reading
                        </a>
                    </p>
                </li>
            </a>
        @endforeach
        {{-- Item --}}
    </ul>
    <!-- End List -->
</div>
