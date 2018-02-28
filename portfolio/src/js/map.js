const $ = require('jquery-slim');

const throttle = require('./throttle.js');


module.exports = function( mapElt ){

    if( !mapElt.length ) return;

    const mapOptions = {
        center: new google.maps.LatLng(52, -25),
        zoom: 3,
        minZoom: 1,
        scrollwheel: false,
        //zoomControl: true,
        mapTypeControl: false,
        //scaleControl: true,
        panControl: false,
        streetViewControl: false,
        styles: [
            {
                featureType: "administrative",
                elementType: "geometry",
                stylers: [
                    { visibility: "off" }
                ]
            },
            {
                "featureType": "all",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "weight": "2.00"
                    }
                ]
            },
            {
                "featureType": "all",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#9c9c9c"
                    }
                ]
            },
            {
                "featureType": "all",
                "elementType": "labels.text",
                "stylers": [
                    {
                        "visibility": "on"
                    }
                ]
            },
            {
                "featureType": "landscape",
                "elementType": "all",
                "stylers": [
                    {
                        "color": "#f2f2f2"
                    }
                ]
            },
            {
                "featureType": "landscape",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#ffffff"
                    }
                ]
            },
            {
                "featureType": "landscape.man_made",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#ffffff"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "all",
                "stylers": [
                    {
                        "saturation": -100
                    },
                    {
                        "lightness": 45
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#eeeeee"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#7b7b7b"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "color": "#ffffff"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "simplified"
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "transit",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "all",
                "stylers": [
                    {
                        "color": "#46bcec"
                    },
                    {
                        "visibility": "on"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#cec8c3"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#070707"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "color": "#ffffff"
                    }
                ]
            }
        ]
    },
    mapElement = mapElt[0],
    map = new google.maps.Map(mapElement, mapOptions),
    icon = {
        url: 'layoutImg/pin.svg',
        scaledSize: new google.maps.Size(25, 25)
    },
    icon2 = {
        url: 'layoutImg/pin2.svg',
        scaledSize: new google.maps.Size(25, 25)
    },
    loc = [
        ['Montreal', 45.5086699, -73.55399249999999, icon],
        //['Ottawa', 45.4215296, -75.69719309999999, icon],
        ['Québec', 46.8032826, -71.242796, icon],
        ['Gatineau', 45.4765446, -75.7012723, icon2],
        ['Madrid', 40.4167754, -3.7037902, icon],
        ['Toledo', 39.8628471, -4.0378849, icon],
        ['Lisboa', 38.7222524, -9.1393366, icon],
        ['Coimbra', 40.2256463, -8.5923762, icon],
        ['Barcelona', 41.3850639, 2.1734035, icon],
        ['Poitiers', 46.58022400000001, 0.340375, icon2],
        ['Limoges', 45.83361900000001, 1.261105, icon2],
        ['Nantes', 47.218371, -1.553621, icon2],
        ['Amsterdam', 52.3702157, 4.895167900000001, icon],
        ['London', 51.5073509, -0.1277583, icon],
        ['Praha', 50.0755381, 14.4378005, icon],
        ['Athenes', 37.983917, 23.7293599, icon],
        ['Naxos', 37.1013931, 25.3713155, icon],
        ['Oslo', 59.910481, 10.723311, icon],
        ['Bergen', 60.3896719, 5.2876997, icon],
        ['Stavanger', 58.9665138, 5.7040474, icon],
        ['Berlin', 52.5001056, 13.3409657, icon],
        ['Bruxelles', 50.8550625, 4.3053498, icon]
    ],
    nbLocs = loc.length;

    let marker, i = 0;


    function setMapZoom(){
        mapElt.width() < 620 ? map.setZoom(2) : map.setZoom(3);
    }


    for(i; i<nbLocs; i++){
        marker = new google.maps.Marker({
            icon: loc[i][3],
            position: new google.maps.LatLng(loc[i][1], loc[i][2]),
            map: map,
            title: loc[i][0],
            cursor: 'crosshair'
        });
    }

    setMapZoom();


    $(window).on('resize', throttle(function(){
        setMapZoom();
    }, 60));
}
