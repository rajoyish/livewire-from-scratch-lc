<div class="flex flex-col">
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
                                <td class="px-6 py-4 whitespace-nowrap font-bold text-gray-800 dark:text-neutral-200">
                                    {{ $article->title }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-800 dark:text-neutral-200">
                                    {{ str($article->content)->words(10) }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-end font-medium">
                                    <button wire:click="delete({{ $article->id }})"
                                        wire:confirm="Are you sure you want to delete this article?"
                                        class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:bg-red-600 disabled:opacity-50 disabled:pointer-events-none">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
