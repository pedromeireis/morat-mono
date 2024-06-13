const overlay = document.querySelector('#music_p-overlay')
const songItems = Array.from(document.querySelectorAll('.music_p-item'))

let music
fetch(dataURL + '/music.json')
    .then(function (response) {
        return response.json();
    })
    .then(function (jsonMusic) {
        music = jsonMusic;
});

function musicOverlayOpen(song) {
    const songIndex = songItems.indexOf(song)
    const overlaySong = music[songIndex]
    const overlaySongYT = overlaySong.youtube_share
    const overlaySongYTid = overlaySongYT.toString().replace('https://youtu.be/', '')
    
    overlay.querySelector('iframe').setAttribute('src', 'https://www.youtube.com/embed/' + overlaySongYTid)
    if(overlaySong.spotify != '') {
        overlay.querySelector('#music_p-overlay--spotify').setAttribute('href', overlaySong.spotify)
        overlay.querySelector('#music_p-overlay--spotify').setAttribute('data-status', 'active')
        } else {
        overlay.querySelector('#music_p-overlay--spotify').setAttribute('href', '')
        overlay.querySelector('#music_p-overlay--spotify').setAttribute('data-status', 'inactive')
    }
    if(overlaySong.youtube != '') {
        overlay.querySelector('#music_p-overlay--youtube').setAttribute('href', overlaySong.youtube)
        overlay.querySelector('#music_p-overlay--youtube').setAttribute('data-status', 'active')
        } else {
        overlay.querySelector('#music_p-overlay--youtube').setAttribute('href', '')
        overlay.querySelector('#music_p-overlay--youtube').setAttribute('data-status', 'inactive')
    }
    if(overlaySong.apple_music != '') {
        overlay.querySelector('#music_p-overlay--apple_music').setAttribute('href', overlaySong.apple_music)
        overlay.querySelector('#music_p-overlay--apple_music').setAttribute('data-status', 'active')
        } else {
        overlay.querySelector('#music_p-overlay--apple_music').setAttribute('href', '')
        overlay.querySelector('#music_p-overlay--apple_music').setAttribute('data-status', 'inactive')
    }
    if(overlaySong.amazon_music != '') {
        overlay.querySelector('#music_p-overlay--amazon_music').setAttribute('href', overlaySong.amazon_music)
        overlay.querySelector('#music_p-overlay--amazon_music').setAttribute('data-status', 'active')
        } else {
        overlay.querySelector('#music_p-overlay--amazon_music').setAttribute('href', '')
        overlay.querySelector('#music_p-overlay--amazon_music').setAttribute('data-status', 'inactive')
    }
    if(overlaySong.soundcloud != '') {
        overlay.querySelector('#music_p-overlay--soundcloud').setAttribute('href', overlaySong.soundcloud)
        overlay.querySelector('#music_p-overlay--soundcloud').setAttribute('data-status', 'active')
        } else {
        overlay.querySelector('#music_p-overlay--soundcloud').setAttribute('href', '')
        overlay.querySelector('#music_p-overlay--soundcloud').setAttribute('data-status', 'inactive')
    }
    if(overlaySong.tidal != '') {
        overlay.querySelector('#music_p-overlay--tidal').setAttribute('href', overlaySong.tidal)
        overlay.querySelector('#music_p-overlay--tidal').setAttribute('data-status', 'active')
        } else {
        overlay.querySelector('#music_p-overlay--tidal').setAttribute('href', '')
        overlay.querySelector('#music_p-overlay--tidal').setAttribute('data-status', 'inactive')
    }

    gsap.to(overlay, {
        x: 0,
        ease: 'power2.out',
        duration: 1
    })
    body.classList.add('stop')
    setTimeout(() => {
        overlay.setAttribute('data-status', 'open')
    }, 1000);
    console.log(music)
}

function musicOverlayClose() {
    gsap.to(overlay, {
        x: window.innerWidth,
        ease: 'power2.out',
        duration: 1
    })
    setTimeout(() => {
        overlay.setAttribute('data-status', 'close')
        body.classList.remove('stop')
    }, 1000);
}