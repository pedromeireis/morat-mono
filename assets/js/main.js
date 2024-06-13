const body = document.querySelector('body')
const dataURL = body.getAttribute('data-url')

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