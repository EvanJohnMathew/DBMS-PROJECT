const search = document.querySelector('.search-bar');
const rows = document.querySelectorAll('table tr');

search.addEventListener('keyup', (event) => {
    const value = search.value.trim().toLowerCase();

    rows.forEach((row, index) => {
        if (index !== 0) { // Skip the header row
            const Specialization = row.children[3].innerText.toLowerCase(); // Assuming the specification is in the fourth column (index 3)
            if (Specialization.includes(value)) {
                row.style.display = 'table-row';
            } else {
                row.style.display = 'none';
            }
        }
    });
});
