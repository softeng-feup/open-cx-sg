var map = L.map('mapid', {
    crs: L.CRS.Simple
}).setView([51.505, -0.09], 13);
var bounds = [[0,0], [1000,1000]];
var image = L.imageOverlay('https://sigarra.up.pt/feup/pt/instal_geral2.get_mapa?pv_id=74657', bounds).addTo(map);
map.fitBounds(bounds);
console.log(image);
