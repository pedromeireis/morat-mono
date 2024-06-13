function menuToggle(button) {
    const menu = document.querySelector('#menu')

    if(menu.getAttribute('data-status') == 'close') {
        gsap.to('#menu', {
            y: 0,
            ease: 'power2.in',
            duration: 1
        })
        
        button.setAttribute('data-status', 'open')
        body.classList.add('stop')
        setTimeout(() => {
            menu.setAttribute('data-status', 'open')
        }, 1000);
    } else {
        gsap.to('#menu', {
            y: window.innerHeight * -1,
            ease: 'power2.in',
            duration: 1
        })

        button.setAttribute('data-status', 'close')
        setTimeout(() => {
            menu.setAttribute('data-status', 'close')
            body.classList.remove('stop')
        }, 1000);
    }
}