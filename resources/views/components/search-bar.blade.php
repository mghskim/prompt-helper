{{-- Search bar --}}
<div x-data="{ query: '{{ request('search', '') }}' }" class='max-w-sm sm:max-w-lg lg:max-w-2xl mx-auto mb-2 flex'>
    <div class="relative flex items-center w-full h-12 rounded-lg overflow-hidden">
        <input placeholder="Search prompt" x-on:keydown.enter="$dispatch('search', { search : query })" x-model="query"
        type="text" id="search" 
        {{-- placeholder="Search prompt..."  --}}
        class="h-full w-full border-gray-300 rounded-lg focus:border-orange-400 dark:border-0 dark:bg-zinc-800 dark:text-gray-400"
        /> 
    </div>
    <button x-on:click="$dispatch('search', {search : query})"
    class="inline-flex items-center py-2.5 px-5 ml-2 text-sm font-medium text-white rounded-lg bg-gray-800 focus:ring-2 focus:outline-none focus:ring-orange-300 dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-500">
        <svg class="mr-2 -ml-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z">
            </path>
        </svg>
        Search
    </button>
</div>