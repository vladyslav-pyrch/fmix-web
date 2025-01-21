
function toggleSection(id) {
    const content = document.getElementById(id);
    const icon = document.getElementById(`icon-${id}`);
    if (content.classList.contains('hidden')) {
        // Show the section
        content.classList.remove('hidden');
        content.classList.add('block');
        icon.textContent = '▲'; // Change icon to upward arrow
    } else {
        // Hide the section
        content.classList.remove('block');
        content.classList.add('hidden');
        icon.textContent = '▼'; // Change icon to downward arrow
    }
}