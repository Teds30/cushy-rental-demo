let search_map
let is_zoneShow = false

function initMap() {
    var mapProp = {
        center: new google.maps.LatLng(13.143966, 123.725869),
        zoom: 14,
        disableDefaultUI: true,
        zoomControl: true,
        gestureHandling: 'greedy',
    }
    search_map = new google.maps.Map(document.getElementById('map'), mapProp)

    // const markerLoc = { lat: 13.143966, lng: 123.725869 }
    // new google.maps.Marker({
    //     position: markerLoc,
    //     map: search_map,
    //     title: 'Hello World!',
    // })

    center = {
        lat: search_map.getCenter().lat(),
        lng: search_map.getCenter().lng(),
    }
    radiusCircle = new google.maps.Circle({
        strokeColor: '#2666b7',
        strokeOpacity: 0.4,
        strokeWeight: 2,
        fillColor: '#2666b7',
        fillOpacity: 0.1,
        clickable: false,
        draggable: false,
        editable: false,
        visible: true,
        map: search_map,
        center: center,
        radius: 1 * 1000,
    })

    // Zones
    green = new google.maps.Circle({
        strokeColor: '#00FF00',
        strokeOpacity: 0.4,
        strokeWeight: 2,
        fillColor: '#00FF00',
        fillOpacity: 0.1,
        clickable: false,
        draggable: false,
        editable: false,
        visible: true,
        zIndex: 3,

        map: search_map,
        center: center,
        radius: (1 * 1000) / 4,
    })
    yellow = new google.maps.Circle({
        strokeColor: '#FFFF00',
        strokeOpacity: 0.4,
        strokeWeight: 2,
        fillColor: '#FFFF00',
        fillOpacity: 0.1,
        clickable: false,
        draggable: false,
        editable: false,
        visible: true,
        zIndex: 2,

        map: search_map,
        center: center,
        radius: (1 * 1000) / 2,
    })
    red = new google.maps.Circle({
        strokeColor: '#FF0000',
        strokeOpacity: 0.4,
        strokeWeight: 2,
        fillColor: '#FF0000',
        fillOpacity: 0.1,
        clickable: false,
        draggable: false,
        editable: false,
        visible: true,
        zIndex: 1,
        map: search_map,
        center: center,
        radius: 1 * 1000,
    })

    setRadius(1)
    refreshZone()
}

function setRadius(radius = 1) {
    radiusCircle.setRadius(radius * 1000)
    red.setRadius(radius * 1000)
    yellow.setRadius((radius * 1000) / 2)
    green.setRadius((radius * 1000) / 4)

    search_map.addListener('drag', () => {
        radiusCircle.setCenter({
            lat: search_map.getCenter().lat(),
            lng: search_map.getCenter().lng(),
        })
        red.setCenter({
            lat: search_map.getCenter().lat(),
            lng: search_map.getCenter().lng(),
        })
        yellow.setCenter({
            lat: search_map.getCenter().lat(),
            lng: search_map.getCenter().lng(),
        })
        green.setCenter({
            lat: search_map.getCenter().lat(),
            lng: search_map.getCenter().lng(),
        })
    })
    search_map.addListener('zoom_changed', () => {
        radiusCircle.setCenter({
            lat: search_map.getCenter().lat(),
            lng: search_map.getCenter().lng(),
        })
        red.setCenter({
            lat: search_map.getCenter().lat(),
            lng: search_map.getCenter().lng(),
        })
        yellow.setCenter({
            lat: search_map.getCenter().lat(),
            lng: search_map.getCenter().lng(),
        })
        green.setCenter({
            lat: search_map.getCenter().lat(),
            lng: search_map.getCenter().lng(),
        })
    })
}

function setLoc() {
    const selectedCoords = {
        lat: search_map.getCenter().lat(),
        lng: search_map.getCenter().lng(),
    }
    console.log(selectedCoords)
}

function refreshZone(is_zoneShow = false) {
    if (is_zoneShow) {
        red.setOptions({ fillOpacity: 0.1, strokeOpacity: 0.4 })
        yellow.setOptions({ fillOpacity: 0.1, strokeOpacity: 0.4 })
        green.setOptions({ fillOpacity: 0.1, strokeOpacity: 0.4 })
        radiusCircle.setOptions({ fillOpacity: 0, strokeOpacity: 0 })
    } else {
        radiusCircle.setOptions({ fillOpacity: 0.1, strokeOpacity: 0.4 })
        red.setOptions({ fillOpacity: 0, strokeOpacity: 0 })
        yellow.setOptions({ fillOpacity: 0, strokeOpacity: 0 })
        green.setOptions({ fillOpacity: 0, strokeOpacity: 0 })
    }
}

function showZone() {
    is_zoneShow = !is_zoneShow

    if (is_zoneShow) {
        document.getElementById('chip_zone').classList.add('chip-selected')
    } else {
        document.getElementById('chip_zone').classList.remove('chip-selected')
    }
    refreshZone(is_zoneShow)
}
