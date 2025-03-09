<div>
    <!-- Header -->
    <x-section-header>
        Create an Article
    </x-section-header>
    <!-- End Header -->

    <div class="max-w-[85rem] ">
        <div class="max-w-xl">
            <div class="mt-12">
                <!-- Form -->
                <form wire:submit="save">
                    <div class="grid gap-4 lg:gap-6">
                        <div>
                            <label for="hs-work-email-hire-us-2"
                                class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">
                                News Title
                            </label>
                            <input wire:model="form.title" type="text" name="hs-work-email-hire-us-2"
                                id="hs-work-email-hire-us-2"
                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-green-500 focus:ring-green-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            @error('form.title')
                                <div class="text-red-600 mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="hs-about-hire-us-2"
                                class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">
                                Content
                            </label>
                            <textarea wire:model="form.content" id="hs-about-hire-us-2" name="hs-about-hire-us-2" rows="4"
                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-green-500 focus:ring-green-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"></textarea>
                            @error('form.content')
                                <div class="text-red-600 mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!-- End Grid -->
                    <div class="mt-6 grid">
                        <button type="submit"
                            class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-green-600 text-white hover:bg-green-700 focus:outline-none focus:bg-green-700 disabled:opacity-50 disabled:pointer-events-none">
                            Save
                        </button>
                    </div>

                    <div class="flex mt-6">
                        <input type="checkbox" wire:model.boolean="form.published"
                            class="shrink-0 mt-0.5 border-gray-200 rounded-sm text-green-600 focus:ring-green-500 checked:border-green-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-green-500 dark:checked:border-green-500 dark:focus:ring-offset-gray-800"
                            id="hs-default-checkbox">
                        <label for="hs-default-checkbox"
                            class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Published</label>
                    </div>
                    <ul class="flex flex-col sm:flex-row mt-6">
                        <li
                            class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border border-gray-200 text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg dark:bg-neutral-800 dark:border-neutral-700 dark:text-white">
                            <div class="relative flex items-start w-full">
                                <div class="flex items-center h-5">
                                    <input wire:model="form.notification" value="email"
                                        id="hs-horizontal-list-group-item-radio-1"
                                        name="hs-horizontal-list-group-item-radio" type="radio"
                                        class="border-gray-200 rounded-full disabled:opacity-50 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-green-500 dark:checked:border-green-500 dark:focus:ring-offset-gray-800"
                                        checked="">
                                </div>
                                <label for="hs-horizontal-list-group-item-radio-1"
                                    class="ms-3 block w-full text-sm text-gray-600 dark:text-neutral-500">
                                    Email
                                </label>
                            </div>
                        </li>

                        <li
                            class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border border-gray-200 text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg dark:bg-neutral-800 dark:border-neutral-700 dark:text-white">
                            <div class="relative flex items-start w-full">
                                <div class="flex items-center h-5">
                                    <input wire:model="form.notification" value="sms"
                                        id="hs-horizontal-list-group-item-radio-2"
                                        name="hs-horizontal-list-group-item-radio" type="radio"
                                        class="border-gray-200 rounded-full disabled:opacity-50 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-green-500 dark:checked:border-green-500 dark:focus:ring-offset-gray-800">
                                </div>
                                <label for="hs-horizontal-list-group-item-radio-2"
                                    class="ms-3 block w-full text-sm text-gray-600 dark:text-neutral-500">
                                    SMS
                                </label>
                            </div>
                        </li>

                        <li
                            class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border border-gray-200 text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg dark:bg-neutral-800 dark:border-neutral-700 dark:text-white">
                            <div class="relative flex items-start w-full">
                                <div class="flex items-center h-5">
                                    <input wire:model="form.notification" value="none"
                                        id="hs-horizontal-list-group-item-radio-3"
                                        name="hs-horizontal-list-group-item-radio" type="radio"
                                        class="border-gray-200 rounded-full disabled:opacity-50 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-green-500 dark:checked:border-green-500 dark:focus:ring-offset-gray-800">
                                </div>
                                <label for="hs-horizontal-list-group-item-radio-3"
                                    class="ms-3 block w-full text-sm text-gray-600 dark:text-neutral-500">
                                    None
                                </label>
                            </div>
                        </li>
                    </ul>
                </form>
                <!-- End Form -->
            </div>
        </div>
    </div>
</div>
