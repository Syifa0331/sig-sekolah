import './bootstrap';
import L from 'leaflet';

document.addEventListener('DOMContentLoaded', function () {

    const map = L.map('map').setView([-3.3194, 114.5908], 13);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        maxZoom: 19
    }).addTo(map);

    L.marker([-3.3194, 114.5908])
        .addTo(map)
        .bindPopup('Lokasi Banjarmasin')
        .openPopup();

});