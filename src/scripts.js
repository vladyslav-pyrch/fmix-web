let can_toggle = true;

function toggleSection(id) {
    const sectionContent = document.getElementById(id);
    if (can_toggle && sectionContent.classList.contains('show')) {
        sectionContent.classList.remove('show');
        can_toggle = false;
        setTimeout(() => {
            sectionContent.classList.add('hide')
            can_toggle = true;
        }, 500);
    }
    else if (can_toggle) {
        sectionContent.classList.remove('hide');
        can_toggle = false;
        setTimeout(() => {
            sectionContent.classList.add('show')
            can_toggle = true;
        }, 100);
    }
}