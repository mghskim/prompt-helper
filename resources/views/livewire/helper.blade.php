<div>
    <form-section>
        @foreach(['image', 'post_category', 'ai_model', 'version', 'body'] as $field)
            @error($field)
                <x-banner :style="'danger'" :message="$message" />
            @enderror
        @endforeach
        
        <div class="w-full text-center mt-7">
            <h1 class="text-2xl font-bold dark:text-white">Prompt Helper</h1>
            <br>
            <textarea id="userInput" name="userInput" placeholder="Enter your main idea here" rows="6" cols="80" class="block p-2.5 w-full text-lg text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-0 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-gray-400 dark:text-white"></textarea>
            <br>
            <textarea id="readOnlyInput" name="body" placeholder="Your output prompt will be display here" rows="6" class="block p-2.5 w-full text-lg text-gray-900 bg-gray-50 rounded-lg border-gray-300 focus:ring-0 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-gray-400 dark:text-white" readonly></textarea>
        </div>
        <div class="rounded-lg border border-gray-300 bg-zinc-50 shadow-md px-7 py-8 mt-8 dark:bg-zinc-700 dark:border-zinc-600">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 h-30 dark:text-white">
                {{-- Dropdown Parameters --}}
                @foreach ($parametersByType as $type => $parameters)
                <div class="grid grid-cols-2 grid-flow-col">
                    <div class="col-span-2">
                        <label>{{ $type }}</label>
                    <select name="parameters[{{ $type }}]" class="parameters mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full px-5 py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:bg-zinc-800 dark:text-white focus:border-transparent">
                        <option value="">--Select--</option>
                        @foreach ($parameters as $parameter)
                            <option value="{{ $parameter->name }}">{{ $parameter->name }}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
                @endforeach
            </div>
                <livewire:parent-component />
            <div class="flex flex-col sm:flex-row justify-center">
                <button type="button" id="copyButton" class="px-4 py-2 bg-transparent mt-3 w-full justify-center inline-flex rounded-md text-xs md:text-md border-2 border-amber-500 text-base font-bold text-amber-500 hover:bg-amber-500 hover:text-white sm:mt-0 sm:ml-3 sm:w-auto dark:text-amber-500  transition ease-in-out duration-300">Copy to Clipboard</button>
                <button type="reset" id="customResetButton" class=" px-4 py-2 bg-transparent mt-3 w-full inline-flex justify-center rounded-md text-xs md:text-md border-2 border-red-500 text-base font-bold text-red-500 hover:bg-red-500 hover:text-white sm:mt-0 sm:ml-3 sm:w-auto dark:text-red-500 transition ease-in-out duration-300" @click="$wire.dispatch('resetParameters');">Reset</button>
                <div x-data="{ showSubmitModal: false }" x-init="showSubmitModal = false">
                  <button type="button" id="submitButton" data-modal-target="showSubmitModal" data-modal-toggle="showSubmitModal" @click="showSubmitModal = true" class="bg-transparent px-4 py-2 mt-3 w-full inline-flex justify-center rounded-md text-xs md:text-md border-2 border-green-500 shadow-sm text-base font-bold text-green-500 hover:bg-green-500 hover:text-white sm:mt-0 sm:ml-3 sm:w-auto dark:text-green-500 transition ease-in-out duration-300">Publish prompt</button>
                  @livewire('submit-modal')
            </div>
            <script>
                var copyButton = document.getElementById('copyButton');

                copyButton.addEventListener('click', function() {
                    navigator.clipboard.writeText(readOnlyInput.value)
                    .then(function() {
                        alert('Copied to clipboard: ' + readOnlyInput.value);
                    })
                    .catch(function(error) {
                        alert('Failed to copy text: ', error);
                    })
                });
            </script>
        </div>
    </form-section>
</div>