<x-app-layout>
    <div class="flex w-full min-h-screen overflow-hidden">
        <x-sidebar />
        <div class="w-full p-5">
            <h1 class="text-2xl mb-5 font-bold subpixel-antialiased dark:text-white">Users</h1>
            @if(session('success'))
                <p class="text-green-700 pb-6">{{ session('success') }}</p>
            @endif                  
                @livewire('user-table')
            </div>
        </div>
    </div>
</x-app-layout>