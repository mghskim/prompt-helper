// document.addEventListener('DOMContentLoaded', function () {

//     const paramTypeSelect = document.getElementById('paramType');
//     const submit_btn = document.getElementById('submit-btn');
//     const inputImage = document.getElementById('input_image');

//     function checkFileInput() {
//         // console.log('inputImage:', inputImage.files.length);
//         if (inputImage.files.length == 0) {
//             submit_btn.disabled = true;
//         } else {
//             submit_btn.disabled = false;
//         }
//     }

//     function checkParamType() {
//         const paramType = paramTypeSelect.value;
//         // console.log('param_type:', paramType);
//         // submit_btn.disabled = (paramType == 0);
        
//         if (paramType < 6) {
//             inputImage.style.visibility = 'hidden';
//         }
//         else {
//             inputImage.style.visibility = 'visible';
//             checkFileInput();
//         }
//     }


//     checkParamType();

//     inputImage.addEventListener('change', checkFileInput);
//     paramTypeSelect.addEventListener('change', checkParamType);
// });
