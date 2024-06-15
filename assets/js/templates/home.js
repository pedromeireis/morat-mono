const homeBoards = Array.from(document.querySelectorAll('.home_p-board'))

const homeHero = document.querySelector('#home_p-hero')
const header = document.querySelector('header')

function homeBoardShow(link) {
    const board = document.querySelector('#' + link.id + '-board')
    board.setAttribute('data-status', 'open')
    link.setAttribute('data-status', 'active')

    gsap.fromTo(board, {
        autoAlpha: 0,
    }, {
        autoAlpha: 1,
        ease: 'power2.out',
        duration: 0,
    })

    gsap.fromTo(header, {
        opacity: '1',
    }, {
        opacity: '.5',
        ease: 'power2.out',
        duration: 0,
    })

    gsap.fromTo(homeHero, {
        opacity: '.7',
    }, {
        opacity: '.2',
        ease: 'power2.out',
        duration: 0,
    })
}

function homeBoardHide() {
    homeBoards.forEach(board => {
        board.setAttribute('data-status', 'close')
    });

    gsap.fromTo(header, {
        opacity: '.5',
    }, {
        opacity: '1',
        ease: 'power2.out',
        duration: 0,
    })

    gsap.fromTo(homeHero, {
        opacity: '.2',
    }, {
        opacity: '.7',
        ease: 'power2.out',
        duration: 0,
    })
}