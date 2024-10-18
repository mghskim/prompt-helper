<div class="relative overflow-x-auto sm:rounded-lg mb-8">
    <div class="flex justify-between items-center mb-2">
        <div id="filter-selector" class="flex items-center space-x-4 font-light ml-4">
            {{-- <button class="{{ $sort === 'desc' ? 'text-gray-900 border-b border-gray-700': 'text-gray-500'}} py-1" wire:click="setSort('desc')">Recent</button>
            <button class="{{ $sort === 'asc' ? 'text-gray-900 border-b border-gray-700': 'text-gray-500'}} py-1" wire:click="setSort('asc')">Oldest</button> --}}
            <a href="{{ route('parameters.create') }}" class="px-4 py-2 bg-orange-600 text-white rounded-lg inline-flex hover:bg-orange-700 dark:bg-orange-600">
                <span class="inline-flex flex text-center items-center gap-1"> 
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm.75-11.25a.75.75 0 0 0-1.5 0v2.5h-2.5a.75.75 0 0 0 0 1.5h2.5v2.5a.75.75 0 0 0 1.5 0v-2.5h2.5a.75.75 0 0 0 0-1.5h-2.5v-2.5Z" clip-rule="evenodd" />
                    </svg>           
                    Create
                </span>
            </a>
        </div>
        <div class="p-1">
            @include('livewire.partials.search-box')
        </div>
    </div>
    <table class="w-full text-sm text-left border-gray-200 border rtl:text-right text-gray-500 dark:text-gray-400 dark:border-none">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-9 py-3">
                    <div class="flex item-center">
                        ID
                        <a href="#" wire:click="setSort('id')"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                          </svg></a>
                    </div>
                </th>
                <th scope="col" class="px-9 py-3">
                    <div class="flex item-center">
                        Name
                        <a href="#" wire:click="setSort('name')"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                          </svg></a>
                    </div>
                </th>
                <th scope="col" class="px-9 py-3">
                    <div class="flex item-center">
                        Type
                        <a href="#" wire:click="setSort('type')"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                          </svg></a>
                    </div>
                </th>
                <th scope="col" class="px-9 py-3">
                    <div class="flex item-center">
                        Date Created
                        <a href="#" wire:click="setSort('created_at')"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                          </svg></a>
                    </div>
                </th>
                <th scope="col" class="px-9 py-3">
                    Action
                </th>
            </tr>
        <tbody>
        @foreach($this->parameters as $parameter)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-9 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $parameter->id }}
                </th>
                <th scope="row" class="px-9 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $parameter->name }}
                </th>
                <td class="px-9 py-4">
                    {{ $parameter->type }}
                </td>
                <td class="px-9 py-4">
                    {{ $parameter->readableCreatedAt() }}
                </td>
                <td class="px-9 py-4">
                    <a href="{{ route('parameters.edit', $parameter->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-2">Edit</a>
                    <form action="{{ route('parameters.destroy', $parameter->id) }}" method="POST" style="display:inline;">
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
        {{ $this->parameters->onEachSide(1)->links(data : ['scrollTo' => false]) }}
    </div>
</div>