var map = L.map('mapid', {
    crs: L.CRS.Simple
}).setView([51.505, -0.09], 13);
var bounds = [[0,0], [1000,1000]];
var image = L.imageOverlay('open-cx-sg/web_app/sg_wp/public/js/map1.png', bounds).addTo(map);
map.fitBounds(bounds);
console.log(image);
