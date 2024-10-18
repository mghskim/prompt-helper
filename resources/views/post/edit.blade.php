<x-app-layout>
    <div class="flex w-full min-h-screen overflow-hidden">
        <div class="w-full flex flex-col py-5">
            @if ($errors->any())
                <div class="w-full pb-6">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-red-700">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">            
                @csrf
                @method('PUT')
            <div class="flex flex-col justify-center bg-gray-200 rounded-lg p-1 dark:bg-gray-800">
                <div class="flex flex-col md:flex-row">
                    @livewire('update-image', ['post' => $post])
                    <div class="flex flex-col flex-auto gap-4 p-4">
                        <div class="flex-auto">
                            <label for="body" class="block font-medium text-gray-900 dark:text-white">Prompt</label>
                            <textarea name="body" type="text" id="finalPrompt" rows="6" 
                            class="block resize-none w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-md 
                            focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                            dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>{{ $post->body }}</textarea>
                        </div>
                        <div class="flex flex-col flex-auto gap-4 md:flex-col lg:flex-row">
                            <div class="flex-1">
                                <label for="ai_model" class="block font-medium text-gray-900 dark:text-white">Model Used: <span class="text-orange-600">{{ $post->ai_model }}</span></label>
                                <select name="ai_model" id="aiModel" onchange="updateVersions()" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full px-2 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mt-2">
                                    <option value="">Change Model</option>
                                    @foreach($aiModels as $model => $versions)
                                        <option value="{{ $model }}">{{ $model }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex-auto">
                                <label for="version" class="block font-medium text-gray-900 dark:text-white">Version Used: <span class="text-orange-600">{{ $post->version }}</span></label>
                                <select name="version" id="aiModelVersion" disabled class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full px-2 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mt-2">
                                        <option value="">Select Version</option>
                                    </select>
                                </select>
                                {{-- @script --}}
                                <script>
                                    var aiModels = @json($aiModels);
                            
                                    function updateVersions() {
                                        const modelSelect = document.getElementById('aiModel');
                                        const versionSelect = document.getElementById('aiModelVersion');
                                        const selectedModel = modelSelect.value;
                            
                                        // Clear the version dropdown
                                        versionSelect.innerHTML = '<option value="">Select Version</option>';
                            
                                        if (selectedModel) {
                                            const versions = aiModels[selectedModel];
                            
                                            // Enable the version dropdown
                                            versionSelect.disabled = false;
                            
                                            // Populate the version dropdown
                                            versions.forEach(version => {
                                                const option = document.createElement('option');
                                                option.value = version;
                                                option.textContent = version;
                                                versionSelect.appendChild(option);
                                            });
                                        } else {
                                            // Disable the version dropdown if no model is selected
                                            versionSelect.disabled = true;
                                        }
                                    }
                                </script>
                            </div>
                        </div>
                        <div class="flex flex-auto gap-4">
                            <div class="flex-auto">
                                <label for="title" class="block font-medium text-gray-900 dark:text-white">Title (Optional)</label>
                                <input type="text" id="title" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mt-2" value="{{ $post->title }}"/>
                            </div>
                            <div class="flex-auto">
                                <label for="post_category" class="block font-medium text-gray-900 dark:text-white">Prompt Category</label>
                                <select name="post_category" id="category" class="bg-gray-50 w-full border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full px-2 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mt-2" required>
                                    <option value="">Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category }}" {{ $category == $post->category ? 'selected' : '' }}>
                                            {{ $category }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="text-orange-400 bg-slate-800 hover:bg-slate-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </div>
                </div>
            </div>
            </form>
            <div class="py-6">
                <a href="../{{ $post->slug }}">Go Back</a>
            </div>
        </div>
    </div>
    </x-app-layout>