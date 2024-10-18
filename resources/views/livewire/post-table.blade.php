<div class="relative overflow-x-auto sm:rounded-lg mb-8">
    <div class="flex justify-between items-center mb-2">
        <div id="filter-selector" class="flex items-center space-x-4 font-light ml-4">
            {{-- <button class="{{ $sort === 'desc' ? 'text-gray-900 border-b border-gray-700': 'text-gray-500'}} py-1" wire:click="setSort('desc')">Recent</button>
            <button class="{{ $sort === 'asc' ? 'text-gray-900 border-b border-gray-700': 'text-gray-500'}} py-1" wire:click="setSort('asc')">Oldest</button> --}}
        </div>
        <div class="p-1">
            @include('livewire.partials.search-box')
        </div>
    </div>
    <table class="w-full text-sm text-left border-gray-200 border rtl:text-right text-gray-500 dark:text-gray-400 dark:border-none">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-8 py-3">
                    <div class="flex item-center">
                        ID
                        <a href="#" wire:click="setSort('id')"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                          </svg></a>
                    </div>
                </th>
                <th scope="col" class="px-7 py-3">
                    <div class="flex item-center">
                        Title
                        <a href="#" wire:click="setSort('title')" class="self-center"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                          </svg></a>
                    </div>
                </th>
                <th scope="col" class="px-9 py-3">
                    <div class="flex item-center">
                        Author
                        <a href="#" wire:click="setSort('author')" class="self-center"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                          </svg></a>
                    </div>
                </th>
                <th scope="col" class="px-8 py-3">
                    <div class="flex item-center inline-flex">
                        Date Published
                        <a href="#" wire:click="setSort('published_at')" class="self-center"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                        </svg></a>
                    </div>
                </th>
                <th scope="col" class="px-9 py-3">
                    Action
                </th>
            </tr>
        <tbody>
        @foreach($this->posts as $post)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-8 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $post->id }}
                </th>
                <th scope="row" class="px-7 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    @if ($post->title)
                    <a href="../posts/{{ $post->slug }}" class="hover:text-orange-600">
                        {{ $post->title }}
                    </a>
                    @else
                        {{-- Post Prompt if no title  --}}
                        <span class="text-gray-500">
                            <a href="../posts/{{ $post->slug }}" class="hover:text-orange-600">
                                Prompt: {{ $post->getExcerptShortTitle() }} 
                            </a>
                        </span>
                    @endif
                </th>
                <td class="px-9 py-4">
                    {{ $post->author->name }}
                </td>
                <td class="px-8 py-4">
                    {{ $post->readablePublished() }}
                </td>
                <td class="px-9 py-4">
                    <a href="{{ route('posts.edit', $post->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-2">Edit</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline mr-2">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="my-4 mx-4">
        {{ $this->posts->onEachSide(1)->links(data : ['scrollTo' => false]) }}
    </div>
</div>