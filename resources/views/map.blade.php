<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jerome Andre">

    <!-- Load personnal CSS styles -->
    <link rel="stylesheet" href="styles/bootstrap.css">
    <link rel="stylesheet" href="styles/styles2.css">

    <!-- Load leaflet elements -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

    <!-- Load Marker Cluster element -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css" />
    <script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"> </script>

    <!-- loads files for SCALE BAR -->
    <script src="scripts/L.Control.BetterScale.js"></script>
    <link rel="stylesheet" href="styles/L.Control.BetterScale.css" />

    <style>
                  #mapcontainer {
                  display: flex;
                width: 100%;
                height: 100%;
                position: fixed;
              }

              #map {
                z-index:0;
                flex: 1;   
                }
                
                .inputs, .inputs_2 {
                width: 110px;
                position: fixed;
                right: 0px;
                top: 0px;
                z-index: 1;
                background-color: #eee;
                flex-wrap: wrap;
                margin: 5px;
                padding: 5px;
                border: solid;
                border-width: thin; 
                border-radius: 5%;
                text-align: left;
                  font-family: Arial, Helvetica, sans-serif;
                  font-weight: normal; 
                display: flex;
                }
                
              .inputs_2 {
                top: 240px;	
              }
                
              .input-text{
                font-family: Arial, Helvetica, sans-serif;
                  font-weight: normal;
                font-size: 14px;
                color: #777;
                flex-wrap: wrap;
              }


              @media (max-width: 500px) {
                .inputs, .inputs_2 {
                  position: fixed;
                right: 0px;
                top: 0px;
                max-width: 110px;
                min-width: 90px;
                }
                .inputs_2 {
                  position: fixed;
                right: 0px;
                top: 240px;
                } 
              }
              h4 {
                  text-align: center;
                  font-family: Arial, Helvetica, sans-serif;
                  font-weight: bold;
                font-size: 12px;
                  padding: 0px;
                padding-bottom: 4px;
                margin: 0;
                vertical-align: center;	
              }


    </style>
  </head>

  <body>
   
    <!-- Carte-->
    <div id="mapcontainer">
      <div id="map"></div>
    </div>
    
  <div class="inputs_2" id="event-type">
        <h4> Filtrer par type &nbsp;</h4>
        <input type="checkbox" class="event-type" name="temple" value="temple" checked="true">
        <label class="input-text" for="temple">temple &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; </label>
        <input type="checkbox" class="event-type" name="funéraire" value="funéraire" checked="true">
        <label class="input-text" for="funéraire">funéraire &nbsp;&nbsp; </label>
        <input type="checkbox" class="event-type" name="spectacle" value="spectacle" checked="true">
        <label class="input-text" for="spectacle">spectacle &nbsp;&nbsp; </label>
        <input type="checkbox" class="event-type" name="aqueduc" value="aqueduc" checked="true">
        <label class="input-text" for="exhibition">aqueduc &nbsp;&nbsp; </label>
        <input type="checkbox" class="event-type" name="porte" value="porte" checked="true">
        <label class="input-text" for="porte">porte &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp; </label>
        <input type="checkbox" class="event-type" name="autre" value="autre" checked="true">
  </div>
  <div class="inputs" id="year">
    <h4>&nbsp;Filtrer par date&nbsp;</h4>
      <input type="checkbox" class="year" name="-150" value="-150" checked="true" style="accent-color:black;">
      <label class="input-text" for="-150">-150 à -100</label>  
        <input type="checkbox" class="year" name="-100" value="-100" checked="true" style="accent-color:red;">
      <label class="input-text" for="-100">-100 à -30</label>  
        <input type="checkbox" class="year" name="-30" value="-30" checked="true" style="accent-color:yellow;">
      <label class="input-text" for="-30">-30 à 15 &nbsp; </label>  
      <input type="checkbox" class="year" value="15" checked="true" style="accent-color:lightgreen;">
      <label class="input-text" for="15">15 à 50 &nbsp; &nbsp;</label> 
        <input type="checkbox" class="year" name="50" value="50" checked="true" style="accent-color:green;">
      <label class="input-text" for="50">50 à 100 &nbsp;</label>  
        <input type="checkbox" class="year" name="100" value="100" checked="true" style="accent-color:lightblue;">
      <label class="input-text" for="100">100 à 150</label>  
        <input type="checkbox" class="year" name="150" value="150" checked="true" style="accent-color:blue;">
      <label class="input-text" for="150">150 à 200</label>  
        <input type="checkbox" class="year" name="200" value="200" checked="true" style="accent-color:darkblue;">
      <label class="input-text" for="200">200 à 300</label> 
        <input type="checkbox" class="year" name="300" value="300" checked="true" style="accent-color:purple;">
      <label class="input-text" for="300">300 et + &nbsp;&nbsp; </label> 
      <input type="checkbox" class="year" value="0" checked="true" style="accent-color:gray;">
      <label class="input-text" for="0">Inconnnu</label>
      </div>
  </body>

</html>


<script>
  var map = L.map('map').setView([44, 6], 5);


/* Modifie le fond de carte suivant le niveau de zoom, celui de l'Atlas of Roman Empire n'est pas disponible > 11 */
// var romanempiremap = L.tileLayer('https://dh.gu.se/tiles/imperium/{z}/{x}/{y}.png', {
//   attribution: '&copy; <a href="https://dh.gu.se/dare/">Digital Atlas of the Roman Empire (DARE) </a> contributors',
// });

var OSM = L.tileLayer('http://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> &copy; <a href="http://cartodb.com/attributions">CartoDB</a>',
  subdomains: 'abcd',
  maxZoom: 19
});

OSM.addTo(map); //initial layer according to initial zoom

// map.on("zoomend", function(e) {
//   console.log("Zoom level: ", map.getZoom());
//   if (map.getZoom() > 11) { //Level 11 is the treshold 
//     map.removeLayer(romanempiremap);
//     OSM.addTo(map);
//   } else {
//     map.removeLayer(OSM);
//     romanempiremap.addTo(map);
//   }
// });

let checkboxStates

const jsontest = {
  "type": "FeatureCollection",
  "features": [{
      "type": "Feature",
      "properties": {
        "field_1": "1",
        "field_2": "Aix en Provence",
        "eventType": "?",
        "field_4": 43.528819,
        "field_5": 5.447192,
        "year": "50"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [5.447192, 43.528819]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "2",
        "field_2": "Alsace",
        "eventType": "temple",
        "field_4": 48.512921,
        "field_5": 7.165208,
        "year": "0"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [7.165208, 48.512921]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "3",
        "field_2": "Amarynthos",
        "eventType": "autre",
        "field_4": 38.386943,
        "field_5": 23.909185,
        "year": "-150"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [23.909185, 38.386943]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "4",
        "field_2": "Ambrussum",
        "eventType": "autre",
        "field_4": 43.717236,
        "field_5": 4.151932,
        "year": "0"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [4.151932, 43.717236]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "5",
        "field_2": "Arles",
        "eventType": "spectacle",
        "field_4": 43.678,
        "field_5": 4.630942,
        "year": "50"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [4.630942, 43.678]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "6",
        "field_2": "Arles",
        "eventType": "spectacle",
        "field_4": 43.676533,
        "field_5": 4.629858,
        "year": "-30"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [4.629858, 43.676533]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "7",
        "field_2": "Arles",
        "eventType": "autre",
        "field_4": 43.67886,
        "field_5": 4.626115,
        "year": "-100"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [4.626115, 43.67886]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "8",
        "field_2": "Augsburg",
        "eventType": "?",
        "field_4": 48.369833,
        "field_5": 10.898533,
        "year": "0"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [10.898533, 48.369833]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "9",
        "field_2": "Augst",
        "eventType": "spectacle",
        "field_4": 47.53329,
        "field_5": 7.722188,
        "year": "0"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [7.722188, 47.53329]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "10",
        "field_2": "Avenches",
        "eventType": "spectacle",
        "field_4": 46.880224,
        "field_5": 7.048864,
        "year": "100"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [7.048864, 46.880224]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "11",
        "field_2": "Avenches",
        "eventType": "funéraire",
        "field_4": 46.895466,
        "field_5": 7.055572,
        "year": "15"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [7.055572, 46.895466]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "12",
        "field_2": "Avenches",
        "eventType": "funéraire",
        "field_4": 46.895321,
        "field_5": 7.055397,
        "year": "15"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [7.055397, 46.895321]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "13",
        "field_2": "Barzan¬†",
        "eventType": "temple",
        "field_4": 45.535459,
        "field_5": -0.879353,
        "year": "150"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [-0.879353, 45.535459]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "14",
        "field_2": "Bordeau",
        "eventType": "?",
        "field_4": 44.845449,
        "field_5": -0.576151,
        "year": "0"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [-0.576151, 44.845449]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "15",
        "field_2": "Brescia",
        "eventType": "funéraire",
        "field_4": 45.533669,
        "field_5": 10.235077,
        "year": "50"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [10.235077, 45.533669]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "16",
        "field_2": "Nyon",
        "eventType": "autre",
        "field_4": 46.381189,
        "field_5": 6.239974,
        "year": "100"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [6.239974, 46.381189]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "17",
        "field_2": "Cars (Corrèze)",
        "eventType": "funéraire",
        "field_4": 45.216113,
        "field_5": 1.59813,
        "year": "200"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [1.59813, 45.216113]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "18",
        "field_2": "Chassenon (Charente)",
        "eventType": "temple",
        "field_4": 45.849125,
        "field_5": 0.767398,
        "year": "50"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [0.767398, 45.849125]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "19",
        "field_2": "Cordoue",
        "eventType": "autre",
        "field_4": 37.887746,
        "field_5": -4.780366,
        "year": "100"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [-4.780366, 37.887746]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "21",
        "field_2": "Faimingen",
        "eventType": "temple",
        "field_4": 48.561707,
        "field_5": 10.409068,
        "year": "0"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [10.409068, 48.561707]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "22",
        "field_2": "Faverolles",
        "eventType": "funéraire",
        "field_4": 47.947503,
        "field_5": 5.209985,
        "year": "0"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [5.209985, 47.947503]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "23",
        "field_2": "Fréjus",
        "eventType": "spectacle",
        "field_4": 43.434517,
        "field_5": 6.72869,
        "year": "100"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [6.72869, 43.434517]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "24",
        "field_2": "Fréjus, les Horts",
        "eventType": "autre",
        "field_4": 43.426308,
        "field_5": 6.762195,
        "year": "-30"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [6.762195, 43.426308]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "25",
        "field_2": "Genainville",
        "eventType": "spectacle",
        "field_4": 49.119795,
        "field_5": 1.772003,
        "year": "150"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [1.772003, 49.119795]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "26",
        "field_2": "Glanum",
        "eventType": "temple",
        "field_4": 43.773189,
        "field_5": 4.832735,
        "year": "-30"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [4.832735, 43.773189]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "27",
        "field_2": "Glanum",
        "eventType": "autre",
        "field_4": 43.773658,
        "field_5": 4.833288,
        "year": "150"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [4.833288, 43.773658]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "28",
        "field_2": "Glanum",
        "eventType": "funéraire",
        "field_4": 43.773576,
        "field_5": 4.832802,
        "year": "50"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [4.832802, 43.773576]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "29",
        "field_2": "Gro√üsorheim",
        "eventType": "funéraire",
        "field_4": 48.792163,
        "field_5": 10.64066,
        "year": "150"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [10.64066, 48.792163]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "30",
        "field_2": "Köln",
        "eventType": "funéraire",
        "field_4": 50.9397,
        "field_5": 6.956181,
        "year": "15"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [6.956181, 50.9397]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "31",
        "field_2": "Langres",
        "eventType": "funéraire",
        "field_4": 47.862342,
        "field_5": 5.332119,
        "year": "100"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [5.332119, 47.862342]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "32",
        "field_2": "Lutèce",
        "eventType": "autre",
        "field_4": 48.850903,
        "field_5": 2.34312,
        "year": "100"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [2.34312, 48.850903]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "33",
        "field_2": "Lux√©",
        "eventType": "?",
        "field_4": 45.892692,
        "field_5": 0.116504,
        "year": "0"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [0.116504, 45.892692]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "34",
        "field_2": "Lyon",
        "eventType": "spectacle",
        "field_4": 45.770586,
        "field_5": 4.830581,
        "year": "15"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [4.830581, 45.770586]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "35",
        "field_2": "Mainz",
        "eventType": "porte",
        "field_4": 49.996285,
        "field_5": 8.263689,
        "year": "300"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [8.263689, 49.996285]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "36",
        "field_2": "Mainz",
        "eventType": "funéraire",
        "field_4": 50.003196,
        "field_5": 8.265501,
        "year": "150"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [8.265501, 50.003196]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "37",
        "field_2": "Mirebeau-sur-B√®ze, la Combotte",
        "eventType": "aqueduc",
        "field_4": 47.399513,
        "field_5": 5.316615,
        "year": "50"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [5.316615, 47.399513]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "38",
        "field_2": "Nimes",
        "eventType": "temple",
        "field_4": 43.838253,
        "field_5": 4.356153,
        "year": "-30"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [4.356153, 43.838253]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "39",
        "field_2": "Nimes",
        "eventType": "aqueduc",
        "field_4": 43.839913,
        "field_5": 4.348647,
        "year": "50"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [4.348647, 43.839913]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "41",
        "field_2": "Nimes",
        "eventType": "spectacle",
        "field_4": 43.834914,
        "field_5": 4.359582,
        "year": "100"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [4.359582, 43.834914]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "42",
        "field_2": "Nimes",
        "eventType": "porte",
        "field_4": 43.832696,
        "field_5": 4.357791,
        "year": "-30"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [4.357791, 43.832696]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "43",
        "field_2": "Nimes",
        "eventType": "aqueduc",
        "field_4": 43.947512,
        "field_5": 4.534896,
        "year": "50"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [4.534896, 43.947512]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "44",
        "field_2": "Nimes",
        "eventType": "?",
        "field_4": 43.833956,
        "field_5": 4.358376,
        "year": "0"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [4.358376, 43.833956]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "45",
        "field_2": "Orange",
        "eventType": "porte",
        "field_4": 44.142158,
        "field_5": 4.804798,
        "year": "15"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [4.804798, 44.142158]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "46",
        "field_2": "Orange",
        "eventType": "spectacle",
        "field_4": 44.135823,
        "field_5": 4.808858,
        "year": "15"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [4.808858, 44.135823]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "47",
        "field_2": "Orange",
        "eventType": "funéraire",
        "field_4": 44.151015,
        "field_5": 4.805989,
        "year": "-30"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [4.805989, 44.151015]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "48",
        "field_2": "Orange",
        "eventType": "temple",
        "field_4": 44.135823,
        "field_5": 4.808858,
        "year": "150"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [4.808858, 44.135823]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "49",
        "field_2": "Périgueux",
        "eventType": "autre",
        "field_4": 45.17946,
        "field_5": 0.714327,
        "year": "100"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [0.714327, 45.17946]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "51",
        "field_2": "Perthus¬†",
        "eventType": "autre",
        "field_4": 42.454584,
        "field_5": 2.857312,
        "year": "-100"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [2.857312, 42.454584]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "52",
        "field_2": "Pont-Sainte-Maxence",
        "eventType": "autre",
        "field_4": 49.304559,
        "field_5": 2.603842,
        "year": "150"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [2.603842, 49.304559]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "53",
        "field_2": "Puy du D√¥me",
        "eventType": "temple",
        "field_4": 45.7718,
        "field_5": 2.964476,
        "year": "0"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [2.964476, 45.7718]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "54",
        "field_2": "Regensburg",
        "eventType": "porte",
        "field_4": 49.020089,
        "field_5": 12.098715,
        "year": "150"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [12.098715, 49.020089]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "55",
        "field_2": "Reims",
        "eventType": "?",
        "field_4": 49.253431,
        "field_5": 4.033083,
        "year": "50"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [4.033083, 49.253431]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "56",
        "field_2": "Reims",
        "eventType": "?",
        "field_4": 49.253431,
        "field_5": 4.033083,
        "year": "0"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [4.033083, 49.253431]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "57",
        "field_2": "Remoulins (Gard)",
        "eventType": "?",
        "field_4": 43.934349,
        "field_5": 4.560112,
        "year": "0"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [4.560112, 43.934349]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "58",
        "field_2": "Richborough (Kent)",
        "eventType": "?",
        "field_4": 51.293255,
        "field_5": 1.332453,
        "year": "0"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [1.332453, 51.293255]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "59",
        "field_2": "Rome",
        "eventType": "temple",
        "field_4": 41.888773,
        "field_5": 12.480785,
        "year": "-100"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [12.480785, 41.888773]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "60",
        "field_2": "Rouen",
        "eventType": "funéraire",
        "field_4": 49.439311,
        "field_5": 1.090697,
        "year": "0"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [1.090697, 49.439311]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "61",
        "field_2": "Saint-Chamas",
        "eventType": "autre",
        "field_4": 43.541367,
        "field_5": 5.043,
        "year": "0"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [5.043, 43.541367]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "62",
        "field_2": "Tarragone",
        "eventType": "?",
        "field_4": 41.117911,
        "field_5": 1.24236,
        "year": "0"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [1.24236, 41.117911]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "63",
        "field_2": "Toulouse",
        "eventType": "funéraire",
        "field_4": 43.606645,
        "field_5": 1.440392,
        "year": "50"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [1.440392, 43.606645]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "64",
        "field_2": "Trier",
        "eventType": "porte",
        "field_4": 49.759701,
        "field_5": 6.643923,
        "year": "150"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [6.643923, 49.759701]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "65",
        "field_2": "Vernègues",
        "eventType": "temple",
        "field_4": 43.681912,
        "field_5": 5.19718,
        "year": "-30"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [5.19718, 43.681912]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "66",
        "field_2": "Vieil-√âvreux (Eure)",
        "eventType": "temple",
        "field_4": 49.002864,
        "field_5": 1.234521,
        "year": "200"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [1.234521, 49.002864]
      }
    },
    {
      "type": "Feature",
      "properties": {
        "field_1": "67",
        "field_2": "Vienne",
        "eventType": "temple",
        "field_4": 45.524722,
        "field_5": 4.876348,
        "year": "0"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [4.876348, 45.524722]
      }
    }
  ]
};

// Prepare the Marker Cluster Group
const mcg = L.markerClusterGroup().addTo(map);

const geojsonLayer = L.geoJSON(null, {
  filter: (feature) => {
    const isYearChecked = checkboxStates.years.includes(feature.properties.year)
    const isEventTypeChecked = checkboxStates.eventTypes.includes(feature.properties.eventType)
    return isYearChecked && isEventTypeChecked //only true if both are true
  },
  style: function getcolor(feature) {
    var year = feature.properties.year;
    if (year <= -150) {
      return {
        color: "black"
      };
    } else if (year >= -100 && year < -50) {
      return {
        color: "red"
      };
    } else if (year >= -50 && year < -31) {
      return {
        color: "orange"
      };
    } else if (year >= -30 && year < -1) {
      return {
        color: "yellow"
      };
    } else if (year >= 1 && year < 15) {
      return {
        color: "yellow"
      };
    } else if (year >= 15 && year < 50) {
      return {
        color: "lightgreen"
      };
    } else if (year >= 50 && year < 100) {
      return {
        color: "green"
      };
    } else if (year >= 100 && year < 150) {
      return {
        color: "lightblue"
      };
    } else if (year >= 150 && year < 200) {
      return {
        color: "blue"
      };
    } else if (year >= 200 && year < 250) {
      return {
        color: "darkblue"
      };
    } else if (year >= 250) {
      return {
        color: "purple"
      };
    } else if ((year == 0)) {
      return {
        color: "gray"
      };
    }
  },
  pointToLayer: function(feature, latlng) {
    return L.circleMarker(latlng, {
      radius: 8,
      weight: 2,
      opacity: 1,
      fillOpacity: 0.7

    });
  },
  // bind Popup to each feature
  onEachFeature: function(feature, layer) {
    // variable pour le texte du popup  
    var popupText = "<b>Site:</b> " + feature.properties.field_2 +
      "<br><b>Type:</b> " + feature.properties.eventType
      // dans l'idéal il faudrait ajouter un lien qui pointe vers
      //la page site, sous le § du site directement peut-être en construisant un lien
      //quand la page sites est finie: ajouter la ligne suivante dans le href
      //sites.html#" + feature.properties.field_2 " 
      +
      "<br><a href=''>Plus d'info</a>";

    layer.bindPopup(popupText, {
      closeButton: true,
      offset: L.point(0, -10)
    });
    layer.on('click', function() {
      layer.openPopup();
    });
  },
})//.addTo(map); // Do not add the GeoJSON Layer Group to the map, it is used only as a converter from GeoJSON data into Leaflet Layers

function updateCheckboxStates() {
  checkboxStates = {
    years: [],
    eventTypes: []
  }

  for (let input of document.querySelectorAll('input')) {
    if (input.checked) {
      switch (input.className) {
        case 'event-type':
          checkboxStates.eventTypes.push(input.value);
          break
        case 'year':
          checkboxStates.years.push(input.value);
          break
      }
    }
  }
}


for (let input of document.querySelectorAll('input')) {
  //Listen to 'change' event of all inputs
  input.onchange = (e) => {
  	mcg.clearLayers()
    geojsonLayer.clearLayers()
    updateCheckboxStates()
    geojsonLayer.addData(jsontest).addTo(mcg)
  }
}




/****** INIT ******/
updateCheckboxStates()
geojsonLayer.addData(jsontest).addTo(mcg)

</script>