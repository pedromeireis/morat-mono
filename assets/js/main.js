const body = document.querySelector('body')
const dataURL = body.getAttribute('data-url')

const newsletterBg = document.querySelector('#newsletter_b-bg')
const newsletterForm = document.querySelector('#newsletter_b-form')

// Session
if (sessionStorage.getItem('data-visit') != 'true') {
    sessionStorage.setItem('data-visit', 'false')

    body.classList.add('stop')
    body.setAttribute('data-visit', 'false')

    gsap.from(newsletterBg, {
        opacity: 0,
        ease: 'power2.out',
        duration: 1,
    })

    gsap.from(newsletterForm, {
        top: '-100%',
        ease: 'power2.out',
        duration: 1,
    })
} else {
    sessionStorage.setItem('data-visit', 'true')

    body.classList.remove('stop')
    body.setAttribute('data-visit', 'true')
}

// Set VH
function setVH() {
    const vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
}
setVH()
window.addEventListener('resize', setVH)
window.addEventListener('scroll', setVH)

// Convert Range
function convertRange(value, oldMin, oldMax, newMin, newMax) {
    // First, normalize the value to the old range
    const oldRange = oldMax - oldMin;
    const normalizedValue = (value - oldMin) / oldRange;

    // Then, scale the normalized value to the new range
    const newRange = newMax - newMin;
    const newValue = (normalizedValue * newRange) + newMin;

    return newValue;
}