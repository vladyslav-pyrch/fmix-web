function toggleOnSection(id) {
    const section_contents = document.querySelectorAll("[id*='_content']")
    
    section_contents.forEach(section_content => {
        if (section_content.classList.contains('show')) {
            section_content.classList.remove('show');
            setTimeout(() => sectionContent.classList.add('hide'), 100);
        } 
    })
    const sectionContent = document.getElementById(id);
    setTimeout(() => {
        sectionContent.classList.remove('hide');
        setTimeout(() => sectionContent.classList.add('show'), 100);
    }, 100)
}