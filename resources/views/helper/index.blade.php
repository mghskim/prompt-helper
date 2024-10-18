<x-app-layout>
    <head>
    </head>
    <body class="container mx-auto px-5 flex flex-grow">
        <div class="w-full grid grid-cols-1 gap-6">
            <form action="{{ route('helper.create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    @livewire('helper')
            </form>
            <div class="flex flex-col lg:flex-row">
                <div class="grow w-full">
                    <gradio-app src="https://black-forest-labs-flux-1-dev.hf.space"></gradio-app>
                </div>
                <div class="flex-auto  my-5 ml-5 rounded-lg p-6 border bg-zinc-50 border-gray-200 shadow-md h-fit dark:bg-zinc-700 dark:border-zinc-600">
                    {{-- <h3 class="text-3xl font-bold dark:text-white">How to use the DALL•E prompt Helper</h3> --}}
                    <p class="my-3 text-gray-500 dark:text-gray-300">
                        DALL•E 3 is a state-of-the-art image generation AI model created by OpenAI that can create stunning visuals from textual descriptions. However, with its vast array of parameters and styling options, it can be quite a challenge to remember everything. This prompt helper is your go-to guide for crafting the perfect prompts for DALL•E 3.
                    </p>
                    <h3 class="text-2xl font-bold dark:text-white">Basic Structure</h3>
                    <p class="my-3 text-gray-500 dark:text-gray-300">
                        <strong class="font-semibold text-gray-900 dark:text-white">Concept:</strong> Start by typing a clear and concise concept of the image you want to create.<br>
                        <strong class="font-semibold text-gray-900 dark:text-white">Parameters:</strong> Select the camera and film type settings (such as camera: proximity to vary your picture view distance) you would like the image generator to follow.<br>
                        <strong class="font-semibold text-gray-900 dark:text-white">Style presets:</strong> In addition to camera and film settings, you can also choose your preferred vibes, styles, lighting, artists, colors, or materials as part of your prompt.<br>
                        <br>Copy your preferred prompt from the prompt output to the clipboard and try it in DALL•E.
                    </p>
                    <h3 class="text-2xl font-bold dark:text-white">What is DALL•E 3?</h3>
                    <p class="mt-3 text-gray-500 dark:text-gray-300">
                        DALL•E is an advanced artificial intelligence system from OpenAI that is capable of image generation from text descriptions. It represents a significant improvement over its predecessors. It is capable of understanding more nuanced and detailed instructions and translating them into highly accurate images. 
                        <br><br>
                        DALL•E is available via API to selected OpenAI customers and developers, allowing the software to be used in creative projects as well as commercial applications.
                    </p>
                </div>
            </div>
        </div>
    </body>
    <script type="module" src="https://gradio.s3-us-west-2.amazonaws.com/5.0.1/gradio.js"></script>
    <script>
        console.log('Helper Listening!');

function setupEventListeners() {
    var userInput = document.getElementById('userInput');
    var readOnlyInput = document.getElementById('readOnlyInput');
    var dropdowns = document.querySelectorAll('.parameters');
    var confirmButtons = document.querySelectorAll('.confirmButton');
    var buttonsInput = document.getElementById('buttonsInput');
    var finalPrompt = document.getElementById('finalPrompt');

    // Clear existing event listeners
    if (userInput) {
        userInput.removeEventListener('keyup', updateReadOnlyInput); // Remove previous listener
        userInput.addEventListener('keyup', updateReadOnlyInput);
    }

    dropdowns.forEach(function (dropdown) {
        dropdown.removeEventListener('change', updateReadOnlyInput); // Remove previous listener
        dropdown.addEventListener('change', updateReadOnlyInput);
    });

    confirmButtons.forEach(function (button) {
        button.removeEventListener('click', updateReadOnlyInput); // Remove previous listener
        button.addEventListener('click', updateReadOnlyInput);
    });

    function updateReadOnlyInput() {
        var userInputValue = userInput ? userInput.value : '';
        var dropdownValues = [];

        dropdowns.forEach(function (dropdown) {
            if (dropdown.value) {
                dropdownValues.push(dropdown.value);
            }
        });

        var combinedValues = userInputValue;
        if (dropdownValues.length > 0) {
            combinedValues += userInputValue ? ', ' + dropdownValues.join(', ') : dropdownValues.join(', ');
        }

        if (buttonsInput && buttonsInput.value) {
            combinedValues += combinedValues ? ', ' + buttonsInput.value : buttonsInput.value;
        }

        readOnlyInput.value = combinedValues;
        finalPrompt.value = readOnlyInput.value;
    }
}

// Attach event listeners on Livewire load and navigate events
document.addEventListener('livewire:load', setupEventListeners);
document.addEventListener('livewire:navigated', setupEventListeners);

    </script>
</x-app-layout>