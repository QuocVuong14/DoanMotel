<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Location</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans"
      rel="stylesheet"
    />
    <script src="https://api.tiles.mapbox.com/mapbox-gl-js/v2.4.0/mapbox-gl.js"></script>
    <link
      href="https://api.tiles.mapbox.com/mapbox-gl-js/v2.4.0/mapbox-gl.css"
      rel="stylesheet"
    />
    <style>
      body {
        margin: 0;
        padding: 0;
      }
      #map {
        position: absolute;
        top: 0;
        bottom: 0;
        width: 100%;
      }
      #menu {
        position: absolute;
        background: #dd3300;
        color: #fff;
        padding: 10px;
        font-family: 'Open Sans', sans-serif;
        border-radius: 0% 0% 10% 0%;
      }
      .marker {
        background-image: url("../guest/assets/img/Location2.svg");
        background-size: cover;
        width: 45px;
        height: 45px;
        border-radius: 50%;
        cursor: pointer;
      }
      .mapboxgl-popup {
        max-width: 200px;
      }
      .mapboxgl-popup-content {
        text-align: center;
        font-family: 'Open Sans', sans-serif;
      }

    </style>
  </head>
  <body>


    <div id="map"></div>


    <div id="menu">
        <input id="satellite-v9" type="radio" name="rtoggle" value="satellite" checked="checked">
        <!-- See a list of Mapbox-hosted public styles at -->
        <!-- https://docs.mapbox.com/api/maps/styles/#mapbox-styles -->
        <label for="satellite-v9">Satellite</label>
        <input id="light-v10" type="radio" name="rtoggle" value="light">
        <label for="light-v10">Light</label>
        <input id="dark-v10" type="radio" name="rtoggle" value="dark">
        <label for="dark-v10">Dark</label>
        <input id="streets-v11" type="radio" name="rtoggle" value="streets">
        <label for="streets-v11">Streets</label>
        <input id="outdoors-v11" type="radio" name="rtoggle" value="outdoors">
        <label for="outdoors-v11">Outdoors</label>
    </div>

    <script>
      mapboxgl.accessToken = 'pk.eyJ1IjoibWVnYXRyb24yMTciLCJhIjoiY2tzNzc1djdoMGd3dDMxbXQ3NnF4YjNmNCJ9.r-utn6ZjS9De20dXMqrB_g';

      var geojson = {
        'type': 'FeatureCollection',
        'features': [
            ////item///
          {
            'type': 'Feature',
            'geometry': {
              'type': 'Point',
              'coordinates': [108.212300, 16.075765]
            },
            'properties': {
              'title': 'Jackeylove',
              'description': 'Jackeylove store premises 1'
            }
          },

          {
            'type': 'Feature',
            'geometry': {
              'type': 'Point',
              'coordinates': [108.212300, 16.065760]
            },
            'properties': {
              'title': 'Jackeylove',
              'description': 'Jackeylove store premises 2'
            }
          },

          ////end item ////

        ]
      };

      var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/light-v10',
        center: [108.212300, 16.075765],
        zoom: 13
      });

      // add markers to map
      geojson.features.forEach(function (marker) {
        // create a HTML element for each feature
        var el = document.createElement('div');
        el.className = 'marker';

        // make a marker for each feature and add it to the map
        new mapboxgl.Marker(el)
          .setLngLat(marker.geometry.coordinates)
          .setPopup(
            new mapboxgl.Popup({ offset: 25 }) // add popups
              .setHTML(
                '<h3>' +
                  marker.properties.title +
                  '</h3><p>' +
                  marker.properties.description +
                  '</p>'
              )
          )
          .addTo(map);
      });
      map.addControl(new mapboxgl.NavigationControl());


      const layerList = document.getElementById('menu');
      const inputs = layerList.getElementsByTagName('input');
      
      for (const input of inputs) {
        input.onclick = (layer) => {
        const layerId = layer.target.id;
        map.setStyle('mapbox://styles/mapbox/' + layerId);
      };
    }
    </script>
  </body>
</html>
