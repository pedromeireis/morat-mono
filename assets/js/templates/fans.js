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