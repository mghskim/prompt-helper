<nav class="flex flex-wrap items-center justify-between py-3 px-6 bg-neutral-900 border-b border-gray-100 dark:border-neutral-950 dark:bg-neutral-900">
    <div id="nav-left" class="md:flex items-center">
        <a href="{{ route('home') }}">
            <x-application-logo />
        </a>

        {{-- Navigation Links --}}
        <div class="top-menu hidden w-full md:block md:w-auto md:ml-10">
            <ul class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4">
                <x-nav-link wire:navigate href="{{ route('home') }}" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-nav-link>
                <x-nav-link wire:navigate href="{{ auth()->check() ? route('post.index', auth()->id()) : route('login')  }}" :active="request()->routeIs('post.index')">
                    {{ __('My Prompts') }}
                </x-nav-link>
                <x-nav-link wire:navigat href="{{ route('helper.index') }}" :active="request()->routeIs('helper.index')">
                    {{ __('Create') }}
                </x-nav-link>
                <div class="relative" 
                x-data="{ open: false, toggle(){this.open = this.open ? this.close() : true}, 
                close(focusAfter){
                    this.open = false
                    focusAfter && focusAfter.focus()                
                }}"
                 x-on:keydown.escape.prevent.stop="close($refs.button)"
                 x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                 x-id="['dropdown-button']"
                 >
                    <button x-ref="button" x-on:click="toggle()" :aria-expanded="open" :aria-controls="$id('dropdown-button')" type="button"
                    class="flex px-1 pt-1 items-center text-sm font-bold text-white border-b-2 border-transparent hover:text-orange-500 hover:border-gray-200 focus:border-gray-200 focus:outline-none focus:text-orange-500 transition ease-in-out duration-300">
                        {{ __('Resources') }}
                        <svg class="inline w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.292 7.707a1 1 0 011.414 0L10 11.414l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                        <!-- Dropdown Links -->
                        <div x-show="open" 
                        x-ref="panel"
                        x-transition.origin.top
                        x-on:click.outside="close($refs.button)"
                        class="absolute left-0 top-full mt-2 w-48 bg-neutral-900 text-left rounded-md shadow-xl"
                        style="display: none"
                        :id="$id('dropdown-button')">

                            <a class="group" wire:navigate href="{{ route('resources.guidance-scale') }}">
                                <div class="navdropdown-div">
                                        {{ __('Guidance Scale') }}
                                </div>
                            </a>
                            <a class="group" href="https://aesthetics.fandom.com/wiki/List_of_Aesthetics" target="_blank">
                                <div class="navdropdown-div">
                                        {{ __('List of Aesthetics') }}
                                </div>
                            </a>
                            <a class="group" href="https://dallery.gallery/wp-content/uploads/2022/07/The-DALL%C2%B7E-2-prompt-book-v1.02.pdf" target="_blank">
                                <div class="navdropdown-div">
                                        {{ __('DALL•E Prompt Book') }}
                                </div>
                            </a>
                        </div>
                    </button>
                </div>
                @if(auth()->user() && auth()->user()->hasRole('admin'))
                <x-nav-link wire:navigate href="{{ route('admin.dashboard') }}" :active="request()->routeIs('admin.dashboard')">
                    {{ __('Admin Dashboard') }}
                </x-nav-link>
                @endif
            </ul>
        </div>
    </div>


    <div id="nav-right" class="flex items-center md:space-x-6">

        <!-- Hamburger Menu for Mobile -->
        <div class="flex md:hidden ml-auto">
            <button id="nav-toggle" data-collapse-toggle="nav-menu" class="focus:outline-none text-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-8">
                    <path fill-rule="evenodd" d="M2 4.75A.75.75 0 0 1 2.75 4h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 4.75ZM2 10a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 10Zm0 5.25a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                </svg>                  
            </button>
        </div>

        @auth
            @include('layouts.partials.header-right-auth')
        @else
            @include('layouts.partials.header-right-guest') 
        @endauth
    </div>

    {{-- Hamburger Navigation Links --}}
    <div id="nav-menu" class="top-menu mt-2 pt-2 hidden w-full md:hidden md:w-auto md:ml-10">
        <ul class="flex flex-col md:flex-row md:space-y-0 md:space-x-4">
            <x-responsive-nav-link wire:navigate href="{{ route('home') }}" :active="request()->routeIs('home')">
                {{ __('Home') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link wire:navigate href="{{ auth()->check() ? route('post.index', auth()->id()) : route('login')  }}" :active="request()->routeIs('post.index')">
                {{ __('My Prompts') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link wire:navigate href="{{ route('helper.index') }}" :active="request()->routeIs('helper.index')">
                {{ __('Create') }}
            </x-responsive-nav-link>

            <div class="relative" 
            x-data="{ open: false, toggle(){this.open = this.open ? this.close() : true}, 
            close(focusAfter){
                this.open = false
                focusAfter && focusAfter.focus()                
            }}"
             x-on:keydown.escape.prevent.stop="close($refs.button)"
             x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
             x-id="['dropdown-button']"
             >
                <button x-ref="button" x-on:click="toggle()" :aria-expanded="open" :aria-controls="$id('dropdown-button')" type="button"
                class="flex items-center px-4 py-2 text-base font-bold text-white hover:text-orange-500 focus:outline-none">
                    {{ __('Resources') }}
                    <svg class="inline w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.292 7.707a1 1 0 011.414 0L10 11.414l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    <!-- Dropdown Links -->
                    <div x-show="open" 
                    x-ref="panel"
                    x-transition.origin.top
                    x-on:click.outside="close($refs.button)"
                    class="absolute z-40 text-left left-0 top-full w-48 bg-neutral-900 border border-gray-700 rounded-md shadow-xl"
                    style="display: none"
                    :id="$id('dropdown-button')">

                        <a class="group" wire:navigate href="{{ route('resources.guidance-scale') }}">
                            <div class="navdropdown-div">
                                    {{ __('Guidance Scale') }}
                            </div>
                        </a>
                        <a class="group" href="https://aesthetics.fandom.com/wiki/List_of_Aesthetics" target="_blank">
                            <div class="navdropdown-div">
                                    {{ __('List of Aesthetics') }}
                            </div>
                        </a>
                        <a class="group" href="https://dallery.gallery/wp-content/uploads/2022/07/The-DALL%C2%B7E-2-prompt-book-v1.02.pdf" target="_blank">
                            <div class="navdropdown-div">
                                    {{ __('DALL•E Prompt Book') }}
                            </div>
                        </a>
                    </div>
                </button>
            </div>

            @if(auth()->user() && auth()->user()->hasRole('admin'))
            <div class="relative" x-data="{ open: false }">
                <!-- Trigger for the dropdown -->
                <button x-on:click="open = ! open" class="flex items-center px-4 py-2 text-base font-bold text-white hover:text-orange-500 focus:outline-none">
                    {{ __('Admin') }}
                    <svg class="inline w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.292 7.707a1 1 0 011.414 0L10 11.414l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
        
                <!-- Dropdown Links -->
                <div x-transition.origin.top x-show="open" class="absolute left-0 mt-2 w-48 bg-neutral-900 border border-gray-700 rounded-md shadow-xl">
                    <x-responsive-nav-link wire:navigate href="{{ route('admin.dashboard') }}" :active="request()->routeIs('admin.dashboard')">
                        {{ __('Dashboard') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link wire:navigate href="{{ route('users.index') }}" :active="request()->routeIs('users.index')">
                        {{ __('Manage Users') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link wire:navigate href="{{ route('posts.index') }}" :active="request()->routeIs('posts.index')">
                        {{ __('Manage Posts') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link wire:navigate href="{{ route('parameters.index') }}" :active="request()->routeIs('parameters.index')">
                        {{ __('Manage Parameters') }}
                    </x-responsive-nav-link>
                </div>
            </div>
            @endif

            @auth
            <x-responsive-nav-link wire:navigate href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                {{ __('Manage Account') }}
            </x-responsive-nav-link>
            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf
                <x-responsive-nav-link wire:navigate href="{{ route('logout') }}"  @click.prevent="$root.submit();">
                    {{ __('Log Out') }}
                </x-responsive-nav-link>
            </form>
            @endauth
            @guest
            <x-responsive-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">
            Login
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')">
            Register
            </x-responsive-nav-link>
            @endguest
        </ul>
    </div>
</nav>

<script>
    // JavaScript for toggling the mobile menu
    document.getElementById('nav-toggle').addEventListener('click', function () {
        const menu = document.getElementById('nav-menu');
        menu.classList.toggle('hidden');
    });
</script>