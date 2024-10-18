<x-app-layout>
<div class="flex w-full min-h-screen overflow-hidden">
    <x-sidebar />
    @if ($errors->any())
    <div class="w-full pb-6">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-red-700">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="w-1/2 flex flex-col p-5 dark:text-white">
        <h2 class="mt-5">User ID: {{ $user->id }}</h2><br>
        <form action="{{ route('users.update', $user->id) }}" method="POST" class="" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-5">
                <label for="name" class="block mb-2 text-md font-medium">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" class="shadow-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
            </div>
    
            <div class="mb-5">
                <label for="email" class="block mb-2 text-md font-medium">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" class="shadow-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
            </div>
            <div class="mb-5">
            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) && ! $user->hasVerifiedEmail())
            <p class="text-md mt-2">
                {{ __('This email address is unverified.') }}

                <button type="button" class="underline text-md text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:text-orange-500 dark:hover:text-orange-600" wire:click.prevent="sendEmailVerification">
                    {{ __('Click here to re-send the verification email.') }}
                </button>
            </p>

                @if ($user->verificationLinkSent)
                    <p class="mt-2 mb-2 font-medium text-md text-green-600">
                        {{ __('A new verification link has been sent to this account\'s email address.') }}
                    </p>
                @endif
            @endif
            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) && $user->hasVerifiedEmail())
                <p class="mt-2 font-medium text-md text-green-600">
                    {{ __('This email address is verified.') }}
                </p>
            @endif
            </div>
            <hr>


            <label for="role" class="block mt-5">Current Role: {{ $user->getRoleName() }}</label>
            <select class="block p-2.5 capitalize my-5 rounded-lg w-full border-gray-300 dark:text-black" name="role" id="role">
                <option value="">Change Role</option>
                @foreach($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                @endforeach
            </select>
    
     
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>
        <div class="py-6">
            <a href="../">Go Back</a>
        </div>
    </div>
</div>
</x-app-layout>