// SET MAP
mapboxgl.accessToken = 'pk.eyJ1IjoicGVkcm9tZWlyZWlzIiwiYSI6ImNrbzhuN3V4MzA5cHUycnFtYTNudzY4NzUifQ.hUoeTPsSjgcQ6HWgzT6eSg';

// const bounds = [
//     [-15, 35], // Southwest coordinates
//     [8, 44.5] // Northeast coordinates
// ];

let initZoom = 2
let initCenter = [
    -15,
    10
]

const map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/pedromeireis/cm0jh8xt0005u01o32fwne98a',
    center: initCenter,
    zoom: initZoom,
    minZoom: 1,
    maxZoom: 14,
    projection: 'mercator',
    // maxBounds: bounds,
    scrollZoom: true,
    boxZoom: false
});
// map.addControl(new mapboxgl.NavigationControl());

const url = body.getAttribute("data-url");

// IMPORT JSON
let rotas = []
fetch(url + '/fans.json')
    .then(function (response) {
        return response.json();
    })
    .then(function (response) {
        clubs = response;

        for (const club of clubs) {
            // create Club
            const clubEl = document.createElement('div')
            clubEl.id = 'f_club-' + club.num
            clubEl.className = 'map_marker-container'
            clubEl.setAttribute('data-status', 'close')

            // MARKER
            const marker = document.createElement('button');
            marker.className = 'map-marker'

            const markerLabel = document.createElement('p')
            markerLabel.innerHTML = club.city
            markerLabel.className = '--label t-grot t-xsmall c-white'
            
            marker.setAttribute('onclick', 'openClub(' + club.num + ')');

            // DROP
            const markerDrop = document.createElement('div')
            markerDrop.id = 'f_club-' + club.num + '-drop'
            markerDrop.className = 'map-marker--drop p-absolute padding bg-blue'

            const markerDropCity = document.createElement('p')
            markerDropCity.innerHTML = club.city
            markerDropCity.className = 'c-black t-cond t-large t-uppercase t-center'

            const markerDropYear = document.createElement('p')
            markerDropYear.innerHTML = club.year
            markerDropYear.style = 'margin-top: -2px;'
            markerDropYear.className = 'c-black t-cond t-body t-uppercase t-center margin-b'

            // Links
            const markerDropLinks = document.createElement('nav')
            markerDropLinks.className = '--links flex f-wrap j-center'
                const markerDropInstagram = document.createElement('a')
                if(club.instagram != '') {
                    markerDropInstagram.setAttribute('href', club.instagram)
                    markerDropInstagram.setAttribute('target', '_blank')
                    markerDropInstagram.innerHTML = 'Instagram'
                    markerDropInstagram.className = '--link c-black t-cond t-large t-uppercase t-center margin-b_small'

                    const markerDropInstagramUser = document.createElement('span')
                    markerDropInstagramUser.innerHTML = '@' + club.instagram_user
                    markerDropInstagramUser.className = 'd-block c-black t-grot t-xsmall t-uppercase t-center'

                    markerDropLinks.appendChild(markerDropInstagram);
                    markerDropInstagram.appendChild(markerDropInstagramUser);
                }

                const markerDropThreads = document.createElement('a')
                if(club.threads != '') {
                    markerDropThreads.setAttribute('href', club.threads)
                    markerDropThreads.setAttribute('target', '_blank')
                    markerDropThreads.innerHTML = 'Threads'
                    markerDropThreads.className = '--link c-black t-cond t-large t-uppercase t-center margin-b_small'

                    const markerDropThreadsUser = document.createElement('span')
                    markerDropThreadsUser.innerHTML = '@' + club.threads_user
                    markerDropThreadsUser.className = 'd-block c-black t-grot t-xsmall t-uppercase t-center'

                    markerDropLinks.appendChild(markerDropThreads);
                    markerDropThreads.appendChild(markerDropThreadsUser);
                }

                const markerDropFacebook = document.createElement('a')
                if(club.facebook != '') {
                    markerDropFacebook.setAttribute('href', club.facebook)
                    markerDropFacebook.setAttribute('target', '_blank')
                    markerDropFacebook.innerHTML = 'Facebook'
                    markerDropFacebook.className = '--link c-black t-cond t-large t-uppercase t-center margin-b_small'

                    const markerDropFacebookUser = document.createElement('span')
                    markerDropFacebookUser.innerHTML = '@' + club.facebook_user
                    markerDropFacebookUser.className = 'd-block c-black t-grot t-xsmall t-uppercase t-center'

                    markerDropLinks.appendChild(markerDropFacebook);
                    markerDropFacebook.appendChild(markerDropFacebookUser);
                }

                const markerDropTwitter = document.createElement('a')
                if(club.twitter != '') {
                    markerDropTwitter.setAttribute('href', club.twitter)
                    markerDropTwitter.setAttribute('target', '_blank')
                    markerDropTwitter.innerHTML = 'X'
                    markerDropTwitter.className = '--link c-black t-cond t-large t-uppercase t-center margin-b_small'

                    const markerDropTwitterUser = document.createElement('span')
                    markerDropTwitterUser.innerHTML = '@' + club.twitter_user
                    markerDropTwitterUser.className = 'd-block c-black t-grot t-xsmall t-uppercase t-center'

                    markerDropLinks.appendChild(markerDropTwitter);
                    markerDropTwitter.appendChild(markerDropTwitterUser);
                }

                const markerDropTikTok = document.createElement('a')
                if(club.tiktok != '') {
                    markerDropTikTok.setAttribute('href', club.tiktok)
                    markerDropTikTok.setAttribute('target', '_blank')
                    markerDropTikTok.innerHTML = 'TikTok'
                    markerDropTikTok.className = '--link c-black t-cond t-large t-uppercase t-center margin-b_small'

                    const markerDropTikTokUser = document.createElement('span')
                    markerDropTikTokUser.innerHTML = '@' + club.tiktok_user
                    markerDropTikTokUser.className = 'd-block c-black t-grot t-xsmall t-uppercase t-center'

                    markerDropLinks.appendChild(markerDropTikTok);
                    markerDropTikTok.appendChild(markerDropTikTokUser);
                }

            // Close
            const markerDropClose = document.createElement('button')
            const markerDropCloseImg = document.createElement('img') 
            markerDropClose.appendChild(markerDropCloseImg);

            markerDropClose.className = '--close p-absolute padding-small'
            markerDropClose.setAttribute('onclick', 'closeClubs()')

            // const imgPath = url_user
            const imgPath = url
            markerDropCloseImg.className = 'icon-small'
            markerDropCloseImg.setAttribute('src', imgPath + '/assets/media/icons/newsletter-cross.svg')


            clubEl.appendChild(marker);
            marker.appendChild(markerLabel)
            clubEl.appendChild(markerDrop);

            markerDrop.appendChild(markerDropCity);
            markerDrop.appendChild(markerDropYear);
            markerDrop.appendChild(markerDropLinks);
            markerDrop.appendChild(markerDropClose);

        // set buttons on location
        new mapboxgl.Marker(clubEl).setLngLat([club.lon, club.lat]).addTo(map);
    }
});

function closeClubs() {
    const clubContainers = document.getElementsByClassName('map_marker-container')
    for (const club of clubContainers) {
        club.setAttribute('data-status', 'close')
    }
    map.flyTo({
        center: initCenter,
        zoom: initZoom,
        duration: 500
    })
}

function openClub(num) {
    closeClubs()
    const clubContainer = document.getElementById('f_club-' + num)
    clubContainer.setAttribute('data-status', 'open')
    gsap.from(clubContainer.querySelector('.map-marker--drop'), {
        y: window.innerHeight * -1,
        ease: 'power4.out',
        ease: .75
    })

    for (const club of clubs) {
        if (club.num == num) {
            map.flyTo({
                center: [club.lon, club.lat], 
                zoom: 4,
                duration: 1000
            })
        }
    }
}