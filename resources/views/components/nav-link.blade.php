@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-orange-400 text-sm font-bold leading-5 text-orange-600 focus:outline-none focus:border-orange-700'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-bold leading-5 text-white hover:text-orange-500 hover:border-gray-200 dark:hover:border-gray-200 focus:outline-none focus:text-orange-500 focus:border-gray-300 transition ease-in-out duration-300';
@endphp

<a wire:navigate {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
