var $ = require('jquery-slim');

module.exports = function(){
    var mapOptions = {
            center: new google.maps.LatLng(48.5, -25),
            zoom: 3,
            minZoom: 1,
            scrollwheel: false,
            //zoomControl: true,
            mapTypeControl: false,
            //scaleControl: true,
            panControl: false,
            streetViewControl: false,
            styles: [{'featureType':'administrative','elementType':'geometry','stylers':[{'visibility': 'off'}]},{'featureType':'administrative.country','elementType':'geometry.stroke','stylers':[{'visibility':'on'}]},{'featureType':'administrative.province','elementType':'geometry.stroke','stylers':[{'visibility':'on'}]},{'featureType':'administrative.locality','elementType':'geometry.stroke','stylers':[{'visibility':'on'}]},{'featureType':'administrative.neighborhood','elementType':'geometry.stroke','stylers':[{'visibility':'on'}]},{'featureType':'administrative.land_parcel','elementType':'geometry.stroke','stylers':[{'visibility':'on'}]},{'featureType':'administrative','elementType':'labels.text.fill','stylers':[{'color':'#444444'}]},{'featureType':'administrative.country','elementType':'geometry.fill','stylers':[{'color':'#e7d5ba'}]},{'featureType':'administrative.locality','elementType':'labels.text.fill','stylers':[{'color':'#615439'}]},{'featureType':'administrative.land_parcel','elementType':'geometry.fill','stylers':[{'color':'#e7d5ba'}]},{'featureType':'landscape','elementType':'all','stylers':[{'color':'#f2f2f2'}]},{'featureType':'landscape','elementType':'geometry','stylers':[{'visibility':'on'}]},{'featureType':'landscape','elementType':'geometry.fill','stylers':[{'color':'#e7d5ba'}]},{'featureType':'landscape.man_made','elementType':'geometry.fill','stylers':[{'color':'#eee4d4'},{'visibility':'on'}]},{'featureType':'landscape.man_made','elementType':'geometry.stroke','stylers':[{'color':'#eee4d4'}]},{'featureType':'landscape.man_made','elementType':'labels.text.fill','stylers':[{'color':'#eee4d4'}]},{'featureType':'landscape.natural','elementType':'geometry.fill','stylers':[{'visibility':'on'}]},{'featureType':'landscape.natural.terrain','elementType':'geometry.fill','stylers':[{'saturation':'0'}]},{'featureType':'landscape.natural.terrain','elementType':'labels.text.fill','stylers':[{'color':'#eee4d4'}]},{'featureType':'poi','elementType':'all','stylers':[{'visibility':'off'}]},{'featureType':'road','elementType':'all','stylers':[{'saturation':-100},{'lightness':45}]},{'featureType':'road','elementType':'geometry.fill','stylers':[{'color':'#fcefd2'}]},{'featureType':'road.highway','elementType':'all','stylers':[{'visibility':'simplified'}]},{'featureType':'road.highway','elementType':'geometry.fill','stylers':[{'color':'#fcefd2'}]},{'featureType':'road.highway','elementType':'geometry.stroke','stylers':[{'color':'#fcefd2'}]},{'featureType':'road.arterial','elementType':'geometry.fill','stylers':[{'hue':'#ffb000'}]},{'featureType':'road.arterial','elementType':'labels.icon','stylers':[{'visibility':'off'}]},{'featureType':'road.local','elementType':'geometry.stroke','stylers':[{'color':'#fcefd2'}]},{'featureType':'transit','elementType':'all','stylers':[{'visibility':'off'}]},{'featureType':'water','elementType':'all','stylers':[{'color':'#7dacbc'},{'visibility':'on'}]}]
        },
        mapElement = $('#map')[0],
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
        i = 0,
        nbLocs = loc.length,
        marker;

    for(i; i<nbLocs; i++){
        marker = new google.maps.Marker({
            icon: loc[i][3],
            position: new google.maps.LatLng(loc[i][1], loc[i][2]),
            map: map,
            title: loc[i][0],
            cursor: 'crosshair'
        });
    }
}
