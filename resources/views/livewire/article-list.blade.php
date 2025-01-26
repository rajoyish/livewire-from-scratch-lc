<div class="flex flex-col">
    <!-- Header -->
    <div
        class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
        <div>
            <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                Manage Articles
            </h2>
            <p class="text-sm text-gray-600 dark:text-neutral-400">
                Add articles, edit and more.
            </p>
        </div>

        <div>
            <div class="inline-flex gap-x-2">
                <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                    href="#">
                    View all
                </a>

                <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                    href="/dashboard/articles/create">
                    <svg class="shrink-0 size-4" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14" />
                        <path d="M12 5v14" />
                    </svg>
                    Create an Article
                </a>
            </div>
        </div>
    </div>
    <!-- End Header -->
    <div class="-m-1.5 overflow-x-auto">
        <div class="p-1.5 min-w-full inline-block align-middle">
            <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                    <thead>
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                News Titles
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                Contents
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                        @foreach ($articles as $article)
                            <tr wire:key="{{ $article->id }}">
                                <td
                                    class="px-6 py-4 hover:underline whitespace-nowrap font-bold text-blue-800 dark:text-blue-200">
                                    <a target="_blank" href="/articles/{{ $article->id }}">
                                        {{ $article->title }}
                                    </a>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-800 dark:text-neutral-200">
                                    {{ str($article->content)->words(10) }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-end font-medium">
                                    <a href="/dashboard/articles/{{ $article->id }}/edit" wire:navigate
                                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                        Edit
                                    </a>
                                    <button wire:click="delete({{ $article->id }})"
                                        wire:confirm="Are you sure you want to delete this article?"
                                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-rose-600 text-white hover:bg-rose-700 focus:outline-none focus:bg-rose-700 disabled:opacity-50 disabled:pointer-events-none">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
