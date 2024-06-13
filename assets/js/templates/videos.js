const videosGallery = document.querySelector('#videos_p-gallery')
const items = Array.from(videosGallery.querySelectorAll('.videos_p-gallery--item'))

function videosScroll() {
    for (const item of items) {
        let transform
        transform = item.getBoundingClientRect().left - ((window.innerWidth / 2) - ((window.innerWidth - 48) / 2)) //half of screen - half of video

        if (transform < 0) {
            item.style.transform = 'translateZ(' + transform + 'px)'
            item.style.zIndex = Math.floor(transform)
            item.style.opacity = 1 - (transform * -.002)
        } else {
            item.style.transform = 'translateZ(' + (transform * -1) + 'px)'
            item.style.zIndex = Math.floor(transform * -1)
            item.style.opacity = 1 - (transform * .002)
        }
    }
}
videosScroll()

let videoScroll = items[0]
function videosNav(direction) {
    items.forEach(item => {
        if (item.getBoundingClientRect().left > 0 && item.getBoundingClientRect().left + item.getBoundingClientRect().width < window.innerWidth) {
            videoScroll = item
        }
    });

    if (direction == 'prev') {
        gsap.to(videosGallery, {
            scrollTo: items[items.indexOf(videoScroll) - 1],
            ease: 'power2.in',
            duration: 1
        })
    }

    if (direction == 'next') {
        gsap.to(videosGallery, {
            scrollTo: items[items.indexOf(videoScroll) + 1],
            ease: 'power2.in',
            duration: 1
        })
    }
}