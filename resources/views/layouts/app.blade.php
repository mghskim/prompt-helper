<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <link rel="icon" type="image/x-icon" href="favicon.ico">

        <title>{{ config('app.name', 'Prompt Helper') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />      
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
        <script src="https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.min.js"></script>

        {{-- <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>  --}}
        {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
        <!-- Styles -->
        
    </head>
    <body class="font-sans antialiased dark:bg-zinc-900">
        <x-banner />

        @include('layouts.partials.header')
        
        @yield('hero')
        @if( Route::is('home')  )
            <main class="container overflow-x-hidden max-w-full flex flex-grow">
        @else
            <main class="container overflow-x-hidden mx-auto px-5 flex flex-grow">
        @endif
                {{ $slot }}
            </main>

        @include('layouts.partials.footer')

        @stack('modals')
        @livewireScripts
    </body>
</html>
