function newsletterClose() {
    gsap.to(newsletterBg, {
        opacity: 0,
        ease: 'power2.in',
        duration: 1,
    })

    gsap.to(newsletterForm, {
        top: '-100%',
        ease: 'power2.in',
        duration: 1,
    })

    setTimeout(() => {
        body.classList.remove('stop')
        sessionStorage.setItem('data-visit', 'true')
        body.setAttribute('data-visit', 'true')
    }, 1000);
}