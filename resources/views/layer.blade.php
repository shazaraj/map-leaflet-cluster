<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <style>
        .text-center {
            text-align: center;
        }
        #map {
            width: '100%';
            height: 500px;
        }
    </style>
    <link rel='stylesheet' href='https://unpkg.com/leaflet@1.8.0/dist/leaflet.css' crossorigin='' />
   </head>

<body>
    <h1 class='text-center'>Layer Leaflet Maps</h1>
    <div id='map'>
       
        <button class="btn-success"  type="submit">city</button>
    </div>
    
    <script src='https://unpkg.com/leaflet@1.8.0/dist/leaflet.js' crossorigin=''></script>
    <script>
        
        var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '© OpenStreetMap'
        }); 
        var MapTilesAPI = L.tileLayer('https://maptiles.p.rapidapi.com/en/map/v1/{z}/{x}/{y}.png?rapidapi-key={apikey}', {
            attribution: '&copy; <a href="http://www.maptilesapi.com/">MapTiles API</a>, &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
            apikey: '<your apikey>',
            maxZoom: 19
        });
        var mapnik = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        });
        var weathermap = L.tileLayer('http://{s}.tile.openweathermap.org/map/wind/{z}/{x}/{y}.png?appid={apiKey}', {
            maxZoom: 19,
            attribution: 'Map data &copy; <a href="http://openweathermap.org">OpenWeatherMap</a>',
            apiKey: '<insert your api key here>',
            opacity: 0.5
        });
        var AIP = L.tileLayer('https://{s}.tile.maps.openaip.net/geowebcache/service/tms/1.0.0/openaip_basemap@EPSG%3A900913@png/{z}/{x}/{y}.{ext}', {
            attribution: '<a href="https://www.openaip.net/">openAIP Data</a> (<a href="https://creativecommons.org/licenses/by-sa/3.0/">CC-BY-NC-SA</a>)',
            ext: 'png',
            minZoom: 4,
            maxZoom: 14,
            tms: true,
            detectRetina: true,
            subdomains: '12'
        });
        var littleton = L.marker([39.61, -105.02]).bindPopup('This is Littleton, CO.'),
        denver    = L.marker([39.74, -104.99]).bindPopup('This is Denver, CO.'),
        aurora    = L.marker([39.73, -104.8]).bindPopup('This is Aurora, CO.'),
        golden    = L.marker([39.77, -105.23]).bindPopup('This is Golden, CO.');

        var cities = L.layerGroup([littleton, denver, aurora, golden]);
        var map = L.map('map', {
            center: [39.73, -104.99],
            zoom: 10,
            layers: [osm, cities]
        });
        
        var baseMaps = {
                "open street map" :osm,
                "weather Map Wind":weathermap,
                "open AIP" :AIP,
                "map nik" : mapnik,
                "MapTiles API Map " :MapTilesAPI
            }
            var overlayMaps = {
            "Cities": cities
        };
        
        var crownHill = L.marker([39.75, -105.09]).bindPopup('This is Crown Hill Park.'),
        rubyHill = L.marker([39.68, -105.00]).bindPopup('This is Ruby Hill Park.');
        
        var parks = L.layerGroup([crownHill, rubyHill]);
        var layerControl = L.control.layers(baseMaps, overlayMaps).addTo(map);
        layerControl.addOverlay(parks, "Parks");

    </script>
</body>

</html>

