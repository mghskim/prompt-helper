<div x-data="{ showModal: false }" x-init="showModal = false">
    {{-- <button type="button" class="bg-blue-600 text-white font-bold p-3 rounded w-full hover:bg-blue-700" @click="showModal = true">
        <span>
            {{ ucfirst($type) }}
        </span>
    </button> --}}
    <button type="button" class="rounded relative inline-flex group items-center justify-center px-3.5 py-2 m-1 cursor-pointer border-b-4 active:border-orange-600 active:shadow-none shadow-lg bg-gradient-to-tr from-orange-600 to-orange-500 border-orange-700 text-white w-full hover:bg-orange-700" @click="showModal = true">
        <span class="absolute w-0 h-0 transition-all duration-300 ease-out bg-orange-500 rounded group-hover:w-full group-hover:h-full"></span>
        <span class="relative font-semibold">
            {{ ucfirst($type) }}
        </span>
    </button>
    
    {{-- <textarea id="" class="">{{ implode(', ', $parameters->whereIn('id', $selectedParameters)->pluck('name')->toArray()) }}</textarea> --}}

    <div x-show="showModal" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true" style="display: none">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
            
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-5xl sm:w-full">

                            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-700 dark:bg-gray-800">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    {{ ucfirst($type) }}
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal" @click="showModal = false;">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
                <div class="bg-gray-50 px-3 pt-3 pb-4 sm:px-6 sm:py-2 sm:pb-4 overflow-auto dark:bg-gray-700" style="max-height: calc(100vh - 200px);">
                    <div class="sm:flex sm:items-start">
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            {{-- <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">{{ ucfirst($type) }}</h3> --}}
                            <div class="grid grid-cols-3 gap-5 mt-4" x-data="{ loading: false }"
                            x-on:loadingStarted.window="loading = true"
                            x-on:loadingEnded.window="loading = false">
                                @foreach ($parameters as $parameter)
                                @if(in_array($parameter->id, $selectedParameters))
                                    <div wire:loading.attr="disabled" wire:click="selectParameter({{ $parameter->id }})" class="relative cursor-pointer selectParameters rounded-md shadow-md text-white bg-blue-500">
                                @else
                                    <div wire:loading.attr="disabled" wire:click="selectParameter({{ $parameter->id }})" class="relative cursor-pointer selectParameters rounded-md shadow-md bg-white dark:bg-gray-600">
                                @endif
                                        <div class="mj-parameter-wrapper">
                                            <div class="d-flex justify-content-start align-items-center">
                                                <div class="mj-parameter-img-wrapper">
                                                    <img src="{{asset('storage/' . $parameter->image) }}" alt="{{ $parameter->name }}" class="w-full h-full object-cover rounded-md">
                                                </div>
                                                <div wire:loading.remove wire:target="selectParameter({{ $parameter->id }})" class="parameter-name px-2 text-md my-2 font-bold dark:text-white">{{ $parameter->name }}</div>
                                                <div wire:loading wire:target="selectParameter({{ $parameter->id }})" class="parameter-name px-2 text-md my-2 font-bold dark:text-white">Loading...</div>
                                            </div>
                                        </div>
                                        @if(in_array($parameter->id, $selectedParameters))
                                            <div class="absolute inset-0 rounded-md border-2 border-blue-500 shadow-sm flex items-center justify-center text-white text-2xl">
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div x-data="{ isLoading: false }" class="bg-white px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse border-t border-gray-200 dark:border-gray-700 dark:bg-gray-800">
                    <button x-bind:disabled="isLoading"  x-on:click="isLoading = true; setTimeout(() => { showModal = false; isLoading = false; }, 1000);" wire:loading.attr="disabled" 
                        wire:loading.remove wire:target="selectParameter" type="button" class="confirmButton mt-3 w-full inline-flex justify-center rounded-md border shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 dark:border-green-700 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        <span x-show="!isLoading">Confirm</span>
                        <span x-show="isLoading">Loading...</span>                
                    </button>
                    <svg x-show="isLoading" wire:loading.delay wire:target="selectParameter" aria-hidden="true" class="w-9 h-9 mx-4 text-gray-200 animate-spin dark:text-gray-500 fill-orange-600 justify-self-center" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/><path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/></svg>
                    <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" @click="showModal = false;">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
