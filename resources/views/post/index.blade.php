<x-app-layout>                  
    <main class="container mx-auto px-5 flex flex-grow">
        <div class="w-full grid grid-cols-1 gap-5">
            <livewire:profile-banner :id="request()->route('id')" />
            <livewire:post-list :id="request()->route('id')" wire:key="post-list-{{ request()->route('id') }}" />
        </div>
    </main>
</x-app-layout>