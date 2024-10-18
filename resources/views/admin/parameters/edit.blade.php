<x-app-layout>
    <div class="flex w-full min-h-screen overflow-hidden">
        <x-sidebar />
        {{-- <div class="w-full text-left py-6"> --}}
        <div class="flex flex-col w-1/2 p-5">
            <h1 class="text-2xl font-bold subpixel-antialiased mb-4">Edit Parameter</h1>

            @if ($errors->any())
                <div class="w-full pb-6">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-red-700">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    
            <form action="{{ route('parameters.update', $parameter->id) }}" method="POST" class="" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-5">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name:</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $parameter->name) }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div class="mb-5">
                    <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Parameter: </label>
                    <select name="type" id="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @foreach (config('parameters.types') as $key => $value)
                            <option value="{{ $value }}" {{ old('type', $parameter->type) == $value ? 'selected' : '' }}>{{ $value }}</option>
                        @endforeach    
                    </select>
                </div>
                <div class="mb-7">
                    <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image:</label>
                    <input type="file" name="image" id="image">
                    @if($parameter->image)
                        <div class="py-4">
                            <img src="{{ secure_asset('storage/' . $parameter->image) }}" alt="Current Image" width="400">
                        </div>
                    @endif
                </div>
                <div class="mb-5">
                    <label for="text_color" class="hidden block mb-2 text-sm font-medium text-gray-900 dark:text-white">Text Color:</label>
                    <input type="text" name="text_color" id="text_color" value="{{ old('text_color', $parameter->text_color) }}" class="hidden shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                </div>
                {{-- <div class="mb-5">
                    <input type="checkbox" name="custom" id="custom" {{ old('custom', $parameter->custom) ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="custom" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300" >Custom?</label>
                </div> --}}
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>
            <div class="py-6">
                <a href="../">Go Back</a>
            </div>
        </div> 
    </div>
</x-app-layout>