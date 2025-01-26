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
                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
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
                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"></textarea>
                            @error('form.content')
                                <div class="text-red-600 mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!-- End Grid -->
                    <div class="mt-6 grid">
                        <button type="submit"
                            class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                            Publish
                        </button>
                    </div>
                </form>
                <!-- End Form -->
            </div>
        </div>
    </div>
</div>
