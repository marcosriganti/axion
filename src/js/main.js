import 'ol/ol.css';
import Feature from 'ol/Feature';
import Map from 'ol/Map';
import Overlay from 'ol/Overlay';
import Point from 'ol/geom/Point';
// import TileJSON from 'ol/source/TileJSON';
import VectorSource from 'ol/source/Vector';
import View from 'ol/View';
import OSM from 'ol/source/OSM';

import { Icon, Style } from 'ol/style';
import { Tile as TileLayer, Vector as VectorLayer, Layer } from 'ol/layer';
import { fromLonLat, transform } from 'ol/proj';

import { estaciones } from './stations'
var myLatLng = {
    lat: -34.6329570,
    lng: -58.4792520
};

// display popup on click

const add_map_point = (el) => {
    const lat = el.Latitud,
        lng = el.Longitud
    var vectorLayer = new VectorLayer({
        source: new VectorSource({
            features: [new Feature({
                geometry: new Point(transform([parseFloat(lng), parseFloat(lat)], 'EPSG:4326', 'EPSG:3857')),
                name: el.NAME,
                address: el.ADDRESS,
                city: el.Ciudad,
            })]
        }),
        style: new Style({
            image: new Icon({
                anchor: [0.5, 0.5],
                anchorXUnits: "fraction",
                anchorYUnits: "fraction",
                src: './images/axion_icon.png'
            })
        })
    });
    map.addLayer(vectorLayer);
}

const map = new Map({
    target: 'map',
    layers: [
        new TileLayer({
            source: new OSM()
        }),
    ],
    view: new View({
        center: fromLonLat([myLatLng.lng, myLatLng.lat]),
        zoom: 12
    })
});
estaciones.map(function (el) {
    add_map_point(el)
})

// Adding Toooltips

var element = document.getElementById('popup');

var popup = new Overlay({
    element: element,
    positioning: 'bottom-center',
    stopEvent: false,
    offset: [0, -50],
});
map.addOverlay(popup);
// display popup on click
map.on('click', function (evt) {
    var feature = map.forEachFeatureAtPixel(evt.pixel, function (feature) {
        return feature;
    });
    if (feature) {
        var coordinates = feature.getGeometry().getCoordinates();
        popup.setPosition(coordinates);
        $(element).popover({
            placement: 'top',
            html: true,
            content: '<div class="estacion p-2"><h6 class="text-primary pb-1">Estacion Adherida</h6><p>Nombre:<br><b class="text-secondary">' + feature.get('name') + '</b></p><p>Dirección:<br><b class="text-secondary">' + feature.get('address') + '</b></p><p>Ciudad:<br><b class="text-secondary">' + feature.get('city') + '</b></p></div>',
        });
        $(element).popover('show');
    } else {
        $(element).popover('dispose');
    }
});


$(document).ready(function () {
    $("#form").validate();
});
