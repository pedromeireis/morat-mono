// MAP
function mapMarkerFind(marker) {
    const club = document.querySelector('#' + marker.getAttribute('id') + '--club')
    gsap.to(window, {
        scrollTo: {
            y: club,
            offsetY: window.innerHeight / 3,
        },
        ease: 'power2.out',
        duration: 1
    })
    club.querySelector('button').classList.add('--active')
    setTimeout(() => {
        club.querySelector('button').classList.remove('--active')
    }, 3000);
}

function mapMarkerHover(marker) {
    const markerLabel = marker.nextElementSibling

    markerLabel.setAttribute('data-status', 'open')
    gsap.to(markerLabel, {
        width: 'auto',
        ease: 'power2.out',
        duration: .5
    })
}

function mapMarkerUnhover(marker) {
    const markerLabel = marker.nextElementSibling
    gsap.to(markerLabel, {
        width: 0,
        ease: 'power2.out',
        duration: .5
    })
    setTimeout(() => {
        markerLabel.setAttribute('data-status', 'close')
    }, 250);
}



// GALLERY & FAN ART
const overlay = document.querySelector('#fans_p-overlay')
const img = overlay.querySelector('img.fans_p-overlay--element')
const video = overlay.querySelector('video.fans_p-overlay--element')

const pictures = Array.from(document.querySelectorAll('.fans_p-item'))
let activePicture

function fansOverlayPopulate() {
    const pictureType = activePicture.getAttribute('data-type')
    if (pictureType == 'image') {
        img.classList.remove('hide')
        img.setAttribute('src', activePicture.getAttribute('data-url'))
    } else if (pictureType == 'video') {
        video.classList.remove('hide')
        video.setAttribute('src', activePicture.getAttribute('data-url'))
    }
}

function fansOverlayOpen(picture) {
    activePicture = picture
    fansOverlayPopulate()

    gsap.to(overlay, {
        x: 0,
        ease: 'power2.out',
        duration: 1
    })

    body.classList.add('stop')
    setTimeout(() => {
        overlay.setAttribute('data-status', 'open')
    }, 1000);
}

function fansOverlayClose() {
    gsap.to(overlay, {
        x: window.innerWidth,
        ease: 'power2.out',
        duration: 1
    })
    
    setTimeout(() => {
        img.setAttribute('src', '')
        video.setAttribute('src', '')
        overlay.setAttribute('data-status', 'close')
        body.classList.remove('stop')
    }, 1000);
}

function fansOverlayNav(direction) {
    if(direction == 'prev') {
        if(pictures.indexOf(activePicture) != 0) {
            activePicture = pictures[pictures.indexOf(activePicture) - 1]
        } else {
            activePicture = pictures[pictures.length - 1]
        }
    }

    if(direction == 'next') {
        if(pictures.indexOf(activePicture) != pictures.length - 1) {
            activePicture = pictures[pictures.indexOf(activePicture) + 1]
        } else {
            activePicture = pictures[0]
        }
    }

    fansOverlayPopulate()
}