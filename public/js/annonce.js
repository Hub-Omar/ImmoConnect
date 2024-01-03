// Get references to modal and buttons
const modal = document.getElementById('myModal');
const openModalBtn = document.getElementById('openModalBtn');
const closeModalBtn = document.getElementById('closeModalBtn');

// Show modal
openModalBtn.addEventListener('click', () => {
    modal.style.display = 'block';
});

// Hide modal
closeModalBtn.addEventListener('click', () => {
    modal.style.display = 'none';
});

// Hide modal if user clicks outside the modal content
window.addEventListener('click', (event) => {
    if (event.target === modal) {
        modal.style.display = 'none';
    }
});
