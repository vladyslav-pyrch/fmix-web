const delay = ms => new Promise((res) => setTimeout(res, ms))


async function scrollToAndToggleOn(id) {
    const section_contents = document.querySelectorAll("[id*='_content']")
    const toggle_section_content = document.getElementById(`${id}_content`)
    const turn_on = toggle_section_content.classList.contains('hide')
    
    for (const section of section_contents) {
        if (section.classList.contains('show')) {
            section.classList.remove('show')
            await delay(200)
            section.classList.add('hide')
        }
    }

    if (!turn_on) {
        return;
    }
    
    toggle_section_content.classList.remove('hide')
    await delay(200)
    toggle_section_content.classList.add('show')
    document.getElementById(id).scrollIntoView({
        behavior: 'smooth'
    })
}

async function checkUrlHash() {
    if (window.location.hash === '#about_us')
        await scrollToAndToggleOn('about_us');
    else if (window.location.hash === '#gallery')
        await scrollToAndToggleOn('gallery');
    else if (window.location.hash === '#rules')
        await scrollToAndToggleOn('rules');
    else if (window.location.hash === '#assignments')
        await scrollToAndToggleOn('assignments');
    else if (window.location.hash === '#assignment-results')
        await scrollToAndToggleOn('assignment-results');
}