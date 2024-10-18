<x-app-layout>
    <div class="flex w-full min-h-screen overflow-hidden">
        <x-sidebar />
        {{-- <div class="w-full text-left py-8">
            
        </div> --}}
        <div class="w-full p-5">
            <h1 class="text-2xl font-bold subpixel-antialiased dark:text-white">Parameters</h1>
            <div class="w-full text-left py-5">
            </div>
            @if(session('success'))
                <p class="text-green-700 pb-6">{{ session('success') }}</p>
            @endif                  
                @livewire('param-table')
            </div>
        </div>
        
        
    </div>
</x-app-layout>