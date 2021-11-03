<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>OpenStreetMap &amp; OpenLayers - Marker Example</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="https://openlayers.org/en/v4.6.5/css/ol.css" type="text/css">
	<script src="https://openlayers.org/en/v4.6.5/build/ol.js" type="text/javascript"></script>
  <script>

  </script>
  
  <script>
    /* OSM & OL example code provided by https://mediarealm.com.au/ */


    var map;
    var mapLat = -7.7998252;
		var mapLng = 110.3985500;
    var mapDefaultZoom = 10;

    function add_map_point(lat, lng) {
      var vectorLayer = new ol.layer.Vector({
        source:new ol.source.Vector({
          features: [new ol.Feature({
                geometry: new ol.geom.Point(ol.proj.transform([parseFloat(lng), parseFloat(lat)], 'EPSG:4326', 'EPSG:3857')),
            })]
        }),
        style: new ol.style.Style({
          image: new ol.style.Icon({
            anchor: [0.5, 0.5],
            anchorXUnits: "fraction",
            anchorYUnits: "fraction",
            src: "https://upload.wikimedia.org/wikipedia/commons/e/ec/RedDot.svg"
          })
        })
      });

      map.addLayer(vectorLayer); 
    }
    
    function initialize_map() {
      map = new ol.Map({
        target: "map",
        layers: [
            new ol.layer.Tile({
                source: new ol.source.OSM({
                      url: "https://a.tile.openstreetmap.org/{z}/{x}/{y}.png"
                })
            })
        ],
        view: new ol.View({
            center: ol.proj.fromLonLat([mapLng, mapLat]),
            zoom: mapDefaultZoom
        })
      });
      add_map_point(mapLat, mapLng);
    }




  </script>
</head>
<body onload="initialize_map();">
  <div id="map" style="width: 100vw; height: 100vh;"></div>
</body>
</html>