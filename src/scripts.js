const section_content_id_list = ["about_us_content", "rules_content", "gallery_content", "preparing_content"]

function toggleOnSection(id) {
    section_content_id_list.forEach(section_id => {
        const section_content = document.getElementById(section_id);
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