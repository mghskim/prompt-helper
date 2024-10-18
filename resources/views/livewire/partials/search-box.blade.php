<div x-data="{ query: '{{ request('search', '') }}' }" id="search-box" class="w-full md:w-auto">
    <div class="flex justify-between item-center">
        {{-- <h3 class="text-lg font-semibold text-gray-900 mb-3">Search</h3> --}}
        <div class="w-full md:w-full flex rounded-2xl bg-gray-100 py-1 px-3 mb-2 items-center dark:bg-zinc-800">
            <span class="hidden sm:block"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-500">
                <path stroke-linecap="round" stroke-linejoin="round"
                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>
            </span>
            <input placeholder="Search prompt" x-on:keydown.enter="$dispatch('search', { search : query })" x-model="query"
            class="w-full md:w-5/6 ml-1 bg-transparent focus:outline-none focus:border-none focus:ring-0 outline-none border-none text-gray-800 placeholder:text-gray-400 dark:bg-zinc-800 dark:text-gray-400"
            type="text">
            <x-button class="z-10 mx-0 block sm:hidden dark:bg-orange-600 dark:hover:bg-orange-700" x-on:click="$dispatch('search', {search : query})">Search</x-button>
         </div>
         <x-button class="items-center mx-3 mb-2 hidden sm:block sm:!inline-flex dark:bg-orange-600 dark:hover:bg-orange-700" x-on:click="$dispatch('search', {search : query})">
            <svg class="mr-2 size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z">
                </path>
            </svg>
            <span>
                Search
            </span>
        </x-button>
    </div>
</div>