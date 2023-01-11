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
    <link rel="stylesheet" href="css/leaflet.awesome-markers.css">
</head>

<body>
    <h1 class='text-center'>Laravel Leaflet Maps</h1>
    <div id='map'></div>
    <script src="js/leaflet.awesome-markers.js"></script>
    <script src='https://unpkg.com/leaflet@1.8.0/dist/leaflet.js' crossorigin=''></script>
    <script>
        let map, markers = [];
        /* ----------------------------- Initialize Map ----------------------------- */
        function initMap() {
            map = L.map('map', {
                center: {
                    lat: 35.8867,
                    lng: 34.8959,
                },
                zoom: 7
            });
            
        var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: 'Data © <a href="http://osm.org/copyright">OpenStreetMap</a> | <a href="http://osm.org/copyright">Term of Use</a>',
                maxZoom: 30
            }).addTo(map);
            
            map.on('click', mapClicked);
            initMarkers();
        }
        initMap();

        /* --------------------------- Initialize Markers --------------------------- */
        function initMarkers() {
            const initialMarkers = <?php echo json_encode($initialMarkers); ?>;

            for (let index = 0; index < initialMarkers.length; index++) {

                const data = initialMarkers[index];
                const marker = generateMarker(data, index);
                marker.addTo(map).bindPopup(`<h3 class='text-center'> ${data.position.title}</h3>
                                            <a  href="${data.position.website}">website</a> <br> 
                                            <b>${data.position.lat},  ${data.position.lng}</b> `);
                map.panTo(data.position);
                markers.push(marker)
            }
        }
        // var flagMarker = L.AwesomeMarkers.icon({
        //         icon: 'flag',
        //         markerColor: 'red'
        //     });
        function generateMarker(data, index) {
            return L.marker(data.position
            // , {icon: flagMarker}
            // , {
                    // draggable: data.draggable
                // }
                )
                .on('click', (event) => markerClicked(event, index));
                // .on('dragend', (event) => markerDragEnd(event, index));
        }

        /* ------------------------- Handle Map Click Event ------------------------- */
        function mapClicked($event) {
            // console.log(map);
            // console.log($event.latlng.lat, $event.latlng.lng);
        }

        /* ------------------------ Handle Marker Click Event ----------------------- */
        function markerClicked($event, index) {
            console.log(map);
            console.log($event.latlng.lat, $event.latlng.lng);
        }

        /* ----------------------- Handle Marker DragEnd Event ---------------------- */
        // function markerDragEnd($event, index) {
        //     console.log(map);
        //     console.log($event.target.getLatLng());
        // }
        const geocoder = L.Control.Geocoder.nominatim();
            geocoder.reverse(
                { lat: 35.8866, lng: 34.8956 },
                map.getZoom(),
                (results) => {
                    if(results.length) {
                        console.log("formatted_address", results[0].name)
                    }
                }
            );
    </script>
</body>

</html>
