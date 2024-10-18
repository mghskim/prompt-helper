<div x-data="{ showModal: false }" x-init="showModal = false">
    <button type="button" class="rounded relative inline-flex group items-center justify-center px-3.5 py-2 m-1 cursor-pointer border-b-4 active:border-orange-600 active:shadow-none shadow-lg bg-gradient-to-tr from-orange-600 to-orange-500 border-orange-700 text-white w-full hover:bg-orange-700" @click="showModal = true">
        <span class="absolute w-0 h-0 transition-all duration-300 ease-out bg-orange-500 rounded group-hover:w-full group-hover:h-full"></span>
        <span class="relative font-semibold">
            {{ ucfirst($type) }}
        </span>
    </button>

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
                            <div class="grid grid-cols-3 gap-5 mt-4">
                                @foreach ($parameters as $parameter)
                                @if(in_array($parameter->id, $selectedParameters))
                                    <div class="relative cursor-pointer selectParameters rounded-md shadow-md text-white bg-blue-500" wire:click="selectParameter({{ $parameter->id }})">
                                @else
                                    <div class="relative cursor-pointer selectParameters rounded-md shadow-md bg-white dark:bg-gray-600" wire:click="selectParameter({{ $parameter->id }})">
                                @endif
                                        <div class="mj-parameter-wrapper">
                                            <div class="d-flex justify-content-start align-items-center">
                                                <div class="mj-parameter-img-wrapper">
                                                    <img src="{{"https://raw.githubusercontent.com/KimGabs/dalle-helper/refs/heads/project/storage/app/public/" . $parameter->image }}" alt="{{ $parameter->name }}" class="w-full h-full object-cover rounded-md">
                                                </div>
                                                <div class="parameter-name px-2 text-md my-2 font-bold dark:text-white">{{ $parameter->name }}</div>
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
                <div class="bg-white px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse border-t border-gray-200 dark:border-gray-700 dark:bg-gray-800">
                    <button type="button" class="confirmButton mt-3 w-full inline-flex justify-center rounded-md border shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" @click="showModal = false;">Confirm</button>
                    <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" @click="showModal = false;">Cancel</button>
                </div>
            </div>
            
        </div>
    </div>
</div>