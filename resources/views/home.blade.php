<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @section('hero')
        <div class="w-full text-center py-20 md:py-32">
            <h1 class="text-3xl px-10 sm:text-4xl md:text-5xl font-bold text-center text-gray-700 dark:text-white">
                Welcome to <span class="text-orange-600 hover:text-orange-500 transition ease-in-out duration-300">&lt;DALL•E&gt;</span><br class="block md:hidden"> <span class="text-gray-900 dark:text-white"> Prompt Helper</span>
            </h1>
            <br>
            <a class="px-3 py-2 text-lg text-white bg-orange-600 rounded-md mt-5 inline-block dark:bg-orange-600 hover:bg-orange-500 transition ease-in-out duration-300"
            href="{{ route('helper.index') }}">Get Started</a>
        </div>
        @include('components.search-bar')
    @endsection
    <div class="my-5 w-full">
        <div class="px-4">
            <livewire:post-card />
        </div>
    </div>
</x-app-layout>
