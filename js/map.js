
		 
<script>

/*-- Entreprise: Belle Demeure
        ---- Site web: belledemeure-ci.com
        ---- Developpeurs: Dominique MENSAH , Konan N'GUESSAN
        ---- Date: 18-Novembre 2015

         FONCTIONS QUI AFFICHENT LES DIFFERENTES GEOLOCALISATIONS POUR LES TERRAINS DU PATRIMOINE IMMOBILIER  */

/* VENISE */

function initialize() {

    var mapOptions = {
        zoom: 14,
        center: new google.maps.LatLng(5.236106, -3.837473),
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        disableDefaultUI: false,
        scrollwheel: true
    }
    var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);

    var polyCoords = [
        new google.maps.LatLng(5.236106, -3.837473),
        new google.maps.LatLng(5.236027, -3.833950),
        new google.maps.LatLng(5.234033, -3.833790),
        new google.maps.LatLng(5.234033, -3.837475)

    ];

    var poly = new google.maps.Polygon({
        paths:polyCoords,
        strokeColor: "#FF0000",
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: "#FF0000",
        fillOpacity: 0.35
    });
    poly.setMap(map);
}

/* ANGRE INTERBAT */
function initialize2() {

    var mapOptions = {
        zoom: 16,
        center: new google.maps.LatLng(5.408625, -3.973259),
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        disableDefaultUI: false,
        scrollwheel: true
    }
    var map = new google.maps.Map(document.getElementById('map_canvas2'), mapOptions);
    

    var polyCoords = [
        new google.maps.LatLng(5.408625, -3.973259),
        new google.maps.LatLng(5.407490, -3.973232),
        new google.maps.LatLng(5.407414, -3.972148),
        new google.maps.LatLng(5.408570, -3.972228)
    ];

    var poly = new google.maps.Polygon({
        paths:polyCoords,
        strokeColor: "#FF0000",
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: "#FF0000",
        fillOpacity: 0.35
    });
    poly.setMap(map);
}

/* ANGRE 2 */
function initialize3() {

    var mapOptions = {
        zoom: 14,
        center: new google.maps.LatLng(5.441345, -3.959047),
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        disableDefaultUI: false,
        scrollwheel: true
    }
    var map = new google.maps.Map(document.getElementById('map_canvas3'), mapOptions);

    var polyCoords = [
        new google.maps.LatLng(5.441345, -3.959047),
        new google.maps.LatLng(5.434240, -3.965752),
        new google.maps.LatLng(5.431010, -3.960994),
        new google.maps.LatLng(5.437254, -3.954289)
    ];

    var poly = new google.maps.Polygon({
        paths:polyCoords,
        strokeColor: "#FF0000",
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: "#FF0000",
        fillOpacity: 0.35
    });
    poly.setMap(map);
}

/* GESTOCI yamoussoukro */
function initialize4() {

    var mapOptions = {
        zoom: 13,
        center: new google.maps.LatLng(6.854050, -5.356952),
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        disableDefaultUI: false,
        scrollwheel: true
    }
    var map = new google.maps.Map(document.getElementById('map_canvas4'), mapOptions);
    

    var polyCoords = [
        new google.maps.LatLng(6.854050, -5.356952),
        new google.maps.LatLng(6.840958, -5.367806),
        new google.maps.LatLng(6.835616, -5.346207),
        new google.maps.LatLng(6.851234, -5.347364)
    ];

    var poly = new google.maps.Polygon({
        paths:polyCoords,
        strokeColor: "#FF0000",
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: "#FF0000",
        fillOpacity: 0.35
    });
    poly.setMap(map);
}

/* Notre Dame yamoussoukro */
function initialize5() {

    var mapOptions = {
        zoom: 14,
        center: new google.maps.LatLng(6.803480, -5.304920),
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        disableDefaultUI: false,
        scrollwheel: true
    }
    var map = new google.maps.Map(document.getElementById('map_canvas5'), mapOptions);
    

    var polyCoords = [
        new google.maps.LatLng(6.803480, -5.304920),
        new google.maps.LatLng(6.801053, -5.307264),
        new google.maps.LatLng(6.797040, -5.303087),
        new google.maps.LatLng(6.799411, -5.300780)
    ];

    var poly = new google.maps.Polygon({
        paths:polyCoords,
        strokeColor: "#FF0000",
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: "#FF0000",
        fillOpacity: 0.35
    });
    poly.setMap(map);
}

/*Angré 3 cocody latrille*/
function initialize6() {

    var mapOptions = {
        zoom: 13,
        center: new google.maps.LatLng(5.472798, -3.959255),
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        disableDefaultUI: false,
        scrollwheel: true
    }
    var map = new google.maps.Map(document.getElementById('map_canvas6'), mapOptions);
	
    var polyCoords = [
        new google.maps.LatLng(5.472798, -3.959255),
        new google.maps.LatLng(5.470326, -3.966154),
        new google.maps.LatLng(5.460070, -3.964039),
        new google.maps.LatLng(5.468403, -3.953184)
    ];

    var poly = new google.maps.Polygon({
        paths:polyCoords,
        strokeColor: "#FF0000",
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: "#FF0000",
        fillOpacity: 0.35
    });
    poly.setMap(map);
}
		</script>
		
		