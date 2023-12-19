<div id="map" style="height: 400px;"></div>
<script>


    const map = L.map('map').setView([-5.357948124964122, 105.314768494845], 13);

    const titik = L.marker([-5.359083242828643, 105.3143872491048]).addTo(map).bindPopup('Ini Embung ITERA');

    const garis = L.polyline ([
		[-5.358572, 105.307549],
		[-5.354709, 105.321387],
		[-5.372334, 105.321387],
		[-5.372334, 105.308518]]).addTo(map).bindPopup('Ini Batas ITERA');
        
    const area = L.polygon([
		[-5.358572, 105.307549],
		[-5.354709, 105.321387],
		[-5.372334, 105.321387],
		[-5.372334, 105.308518]]);

    var GoogleSatelliteHybrid = L.tileLayer('https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}',{
        maxZoom : 22,
        attribution : 'Matakuliah WebGIS'}).addTo(map);

    const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    });

</script>