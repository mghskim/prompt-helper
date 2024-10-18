// document.addEventListener('DOMContentLoaded', function() {
//     const editModal = document.getElementById('editModal');
//     const closeEditModal = document.getElementById('closeEditModal');
    
//     // Function to open edit modal
//     function openEditModal(id, name, type, img) {
//         editModal.style.display = 'block';

//         // Hide file input if type is below 6 .
//         if(type < 6){
//             document.getElementById('param_image').style.display = 'none';
//             document.getElementById('paramImg').style.display = 'none';
//         }
//         else{
//             document.getElementById('param_image').style.display = 'block';
//             document.getElementById('paramImg').style.display= 'block';
//         }

//         document.getElementById('editForm').action = 'edit-parameter/' + id;
//         document.getElementById('paramName').value = name;
//         document.getElementById('param_TYPE').value = type;
//         document.getElementById('paramImg').setAttribute('src', '../storage/app/public/images/' + img);
//     }

//     // Function to close edit modal
//     function closeModal() {
//         editModal.style.display = 'none';
//     }

//     // Event listener to open edit modal when edit button is clicked
//     document.querySelectorAll('.edit-btn').forEach(btn => {
//         btn.addEventListener('click', function() {
//             // Extract parameter data from data attributes or other means if necessary
//             const id = btn.getAttribute('data-id');
//             const name = btn.getAttribute('data-name');
//             const type = btn.getAttribute('data-type');
//             const img = btn.getAttribute('data-img');
//             openEditModal(id, name, type, img);
//         });
//     });

//     // Event listener to close edit modal when close button is clicked
//     closeEditModal.addEventListener('click', closeModal);

//     // Event listener to close edit modal when clicking outside modal
//     window.addEventListener('click', function(event) {
//         if (event.target == editModal) {
//             closeModal();
//         }
//     });
// });

// document.addEventListener('DOMContentLoaded', function() {
//     document.getElementById('param_image').addEventListener('change', function(e) {
//         const file = e.target.files[0];
//         const reader = new FileReader();

//         reader.onload = function() {
//             document.getElementById('paramImg').src = reader.result;
//         }

//         reader.readAsDataURL(file);
//     });
// });

