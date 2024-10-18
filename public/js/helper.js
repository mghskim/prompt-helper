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
