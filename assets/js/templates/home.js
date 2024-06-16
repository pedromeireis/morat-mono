const homeBoards = Array.from(document.querySelectorAll('.home_p-board'))

const homeHero = document.querySelector('#home_p-hero')
const header = document.querySelector('header')

function homeMenuHover() {
    gsap.fromTo(header, {
        opacity: '1',
    }, {
        opacity: '.5',
        ease: 'power2.out',
        duration: .5,
    })

    gsap.fromTo(homeHero, {
        opacity: '.7',
    }, {
        opacity: '.2',
        ease: 'power2.out',
        duration: .5,
    })
}

function homeMenuUnover() {
    gsap.fromTo(header, {
        opacity: '.5',
    }, {
        opacity: '1',
        ease: 'power2.out',
        duration: .5,
    })

    gsap.fromTo(homeHero, {
        opacity: '.2',
    }, {
        opacity: '.7',
        ease: 'power2.out',
        duration: .5,
    })
}



function homeBoardShow(container) {
    const board = document.querySelector('#' + container.id + '-board')

    gsap.fromTo(board, {
        autoAlpha: 0,
    }, {
        autoAlpha: 1,
        ease: 'power2.out',
        duration: .5,
    })
}

function homeBoardHide(container) {
    const board = document.querySelector('#' + container.id + '-board')
    gsap.fromTo(board, {
        autoAlpha: 1,
    }, {
        autoAlpha: 0,
        ease: 'power2.out',
        duration: .5,
    })
}