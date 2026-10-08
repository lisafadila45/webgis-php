<!DOCTYPE html>
<html>

<head>
    <title>Peta Leaflet - Bone Bolango, Gorontalo</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-groupedlayercontrol/dist/leaflet.groupedlayercontrol.min.css" />
    <style>
        #map {
            height: calc(150vh - 120px); /* Ubah tinggi peta untuk memberi ruang bagi header dan footer */
            width: 100%;
        }

        .leaflet-control-container {
            display: flex;
            flex-direction: column-reverse;
        }

        .leaflet-control {
            background: white;
            padding: 5px;
            border-radius: 5px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
            margin: 5px;
        }

        .search-bar input {
            border: none;
            padding: 5px;
            flex: 1;
            margin-right: 5px;
        }

        .search-bar button {
            background: #007bff;
            border: none;
            color: white;
            padding: 5px 10px;
            cursor: pointer;
        }

        .leaflet-control.my-location-button {
            background-color: #fff;
            border: 2px solid #ccc;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            text-align: center;
            line-height: 30px;
            font-weight: bold;
            cursor: pointer;
        }

        .leaflet-control-zoom {
            display: flex;
            flex-direction: column;
        }

        .leaflet-control-zoom a {
            background-color: #fff;
            border: 1px solid #ccc;
            color: black;
            text-align: center;
            text-decoration: none;
            width: 30px;
            height: 30px;
            line-height: 30px;
            font-size: 20px;
        }

        .leaflet-control-zoom a:hover {
            background-color: #f4f4f4;
        }

        /* Styling untuk header dan footer */
        header, footer {
            background-color: #5c4c5b; /* Warna untuk header dan footer */
            color: white; /* Warna teks putih */
            padding: 5px;
            text-align: center;
            width: 100%;
            position: fixed;
            left: 0;
            z-index: 1000;
        }

        header {
            top: 0;
        }

        footer {
            bottom: 0;
        }
    </style>
</head>

<body>
    <header>
        <h1>Peta Pesebaran PAD</h1>
    </header>
    <div id="map"></div>
    <footer>
        <p>Footer Content</p>
    </footer>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-groupedlayercontrol/dist/leaflet.groupedlayercontrol.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-geolocation/1.0.0/leaflet-geolocation.min.js"></script>
    <script>
        // Inisialisasi grup layer
        var kecamatanLayers = {};
        var boundaryLayers = {}; // Tambahkan variabel untuk grup layer batas wilayah

        // Lapisan dasar
        var GoogleSatelliteHybrid = L.tileLayer('https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', {
            attribution: '&copy; <a href="https://www.google.com/maps">Google Maps</a>'
        });

        var EsriSatellite = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
            attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community'
        });

        var OpenStreetMap = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        });

        // Membuat peta dan pusatkan di Bone Bolango, Gorontalo
        var map = L.map('map', {
            center: [0.568915, 123.2075849],
            zoom: 10,
            minZoom: 10,
            layers: [GoogleSatelliteHybrid], // Lapisan dasar default
            zoomControl: false // Menonaktifkan kontrol zoom default
        });

        // Kontrol layer untuk lapisan dasar dan overlay
        var baseLayers = {
            'Google Satellite Hybrid': GoogleSatelliteHybrid,
            'Esri Satellite': EsriSatellite,
            'Open Street Map': OpenStreetMap,
        };

        var groupedOverlays = {
            "Administrasi Daerah": kecamatanLayers,
            "Batas Wilayah": boundaryLayers // Tambahkan grup layer batas wilayah ke dalam groupedOverlays
        };

        var layerControl = L.control.groupedLayers(baseLayers, groupedOverlays, {
            position: 'topright' // Menetapkan posisi kontrol layer tetap di sebelah kanan atas
        }).addTo(map);

        // Fungsi untuk menambahkan batas wilayah dari file GeoJSON dengan warna yang berbeda
        function loadGeoJSON(url, color, name) {
            fetch(url) // Mem-fetch file GeoJSON dari URL
                .then(response => response.json()) // Mengonversi respon menjadi JSON
                .then(data => {
                    // Membuat layer GeoJSON dengan data yang di-fetch
                    var geojsonLayer = L.geoJSON(data, {
                        onEachFeature: function (feature, layer) {
                            // Logging untuk melihat properti fitur di konsol (untuk debugging)
                            console.log(feature.properties);
                            // Menambahkan popup ke setiap layer dengan properti WADMKC atau "No Name" jika tidak ada
                            layer.bindPopup('<i class="fas fa-map-marker-alt"></i> ' + (feature.properties.WADMKD || "No Name"));
                        },
                        style: function (feature) {
                            // Mengatur gaya layer dengan warna yang diberikan
                            return {
                                color: color,
                                weight: 2,
                                opacity: 1
                            };
                        }
                    });

                    // Tambahkan layer ke grup overlay hanya jika dicentang
                    boundaryLayers[name] = geojsonLayer;

                    // Tambahkan layer ke kontrol layer, tetapi jangan tambahkan ke peta
                    layerControl.addOverlay(geojsonLayer, name, "Batas Wilayah");
                })
                .catch(error => console.log(error)); // Menangani kesalahan saat mem-fetch data
        }

        // Memuat data GeoJSON batas wilayah dengan warna yang berbeda
        loadGeoJSON('assets/batas wilayah/All in Desa Bonebol.geojson', '#FFFF00', 'Desa Bonebol'); // Yellow
        loadGeoJSON('assets/batas wilayah/GeoJSON Kecamatan in Bonebol.geojson', '#0000CD', 'Kecamatan Bonebol'); // Medium Blue
        loadGeoJSON('assets/batas wilayah/Suwawa & Moutong.geojson', '#00FFFF', 'Suwawa & Moutong'); // Cyan

        // Tambahkan bar pencarian
        var searchBar = L.control({
            position: 'topleft' // Mengubah posisi bar pencarian ke pojok kiri atas
        });
        searchBar.onAdd = function (map) {
            var div = L.DomUtil.create('div', 'leaflet-control search-bar');
            div.innerHTML = '<input type="text" id="search-input" placeholder="Cari lokasi..." /><button id="search-button">Cari</button>';
            return div;
        };
        searchBar.addTo(map);

        // Fungsi untuk pencarian lokasi
        document.getElementById('search-button').addEventListener('click', function () {
            var location = document.getElementById('search-input').value;
            // Gunakan API geocoding untuk mencari lokasi
            fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${location}`)
                .then(response => response.json())
                .then(data => {
                    if (data.length > 0) {
                        var latlng = [data[0].lat, data[0].lon];
                        map.setView(latlng, 13); // Zoom ke lokasi yang ditemukan
                        L.marker(latlng).addTo(map)
                            .bindPopup(`<b>${location}</b>`)
                            .openPopup();
                    } else {
                        alert("Lokasi tidak ditemukan");
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert("Terjadi kesalahan saat mencari lokasi");
                });
        });

        // Tambahkan tombol "My Location"
        var myLocationButton = L.control({
            position: 'topleft' // Mengubah posisi tombol "My Location" ke pojok kiri atas
        });

        myLocationButton.onAdd = function () {
            var div = L.DomUtil.create('div', 'leaflet-control my-location-button');
            div.innerHTML = '<img src="https://img.icons8.com/material-rounded/24/000000/navigation--v1.png"/>'; // Ikon panah navigasi
            return div;
        };

        myLocationButton.addTo(map);

        // Fungsi untuk menemukan lokasi pengguna
        function locateUser() {
            map.locate({
                setView: true,
                maxZoom: 15
            });
        }

        // Tambahkan event listener untuk tombol "My Location"
        document.querySelector('.leaflet-control.my-location-button').addEventListener('click', locateUser);

        // Fetch data from PHP script and add markers to map
        fetch('koneksi.php')
            .then(response => response.json())
            .then(data => {
                // Create a LayerGroup for each kecamatan
                data.forEach(hotspot => {
                    if (!kecamatanLayers[hotspot.nm_kecamatan]) {
                        kecamatanLayers[hotspot.nm_kecamatan] = new L.LayerGroup();
                        console.log(`Created LayerGroup for kecamatan: ${hotspot.nm_kecamatan}`);
                    }
                });

                // Add markers to respective kecamatan LayerGroup
                data.forEach(hotspot => {
                    var coords = hotspot.koordinat.split(',');
                    var lat = parseFloat(coords[0]);
                    var lon = parseFloat(coords[1]);
                    var popupContent = `
                        <b>${hotspot.nama_wp}</b><br>
                        Desa : ${hotspot.kel_desa}<br>
                        Jenis Wajib Pajak : ${hotspot.jenis_wp}<br>
                        Jumlah Pembayaran Pajak : Rp. ${hotspot.jumlah_pajak}<br>
                        Titik Koordinat : ${hotspot.koordinat}<br>
                        <b>Kecamatan : ${hotspot.nm_kecamatan}</b><br>
                        <img src="admin/assets/unggah/gambar/${hotspot.gambar}" alt="${hotspot.nm_kecamatan}" style="width:300px;height:auto;margin-top: 10px;">
                    `;

                    var marker = L.marker([lat, lon]).bindPopup(popupContent);
                    var kecamatanLayer = kecamatanLayers[hotspot.nm_kecamatan];
                    if (kecamatanLayer) {
                        marker.addTo(kecamatanLayer);
                        console.log(`Added marker to kecamatan: ${hotspot.nm_kecamatan}`);
                    }
                });

                // Update the layer control to include the new overlays
                Object.keys(kecamatanLayers).forEach(key => {
                    groupedOverlays["Administrasi Daerah"][key] = kecamatanLayers[key];
                    console.log(`Added LayerGroup for kecamatan: ${key} to overlay control`);
                });

                // Refresh the layer control
                layerControl.remove(map);
                layerControl = L.control.groupedLayers(baseLayers, groupedOverlays, {
                    position: 'topright' // Menetapkan posisi kontrol layer tetap di sebelah kanan atas
                }).addTo(map);
            })
            .catch(error => {
                console.error('Error:', error);
            });

        // Event listener untuk saat peta siap
        map.on('load', function () {
            console.log('Peta siap!');
        });

        // Tambahkan kontrol zoom kustom
        var zoomControl = L.control({
            position: 'topleft' // Mengubah posisi kontrol zoom ke pojok kiri atas
        });

        zoomControl.onAdd = function (map) {
            var div = L.DomUtil.create('div', 'leaflet-control-zoom leaflet-bar leaflet-control');
            div.innerHTML = `
                <a class="leaflet-control-zoom-in" href="#" title="Zoom in" role="button" aria-label="Zoom in" aria-disabled="false"><span aria-hidden="true">+</span></a>
                <a class="leaflet-control-zoom-out" href="#" title="Zoom out" role="button" aria-label="Zoom out" aria-disabled="false"><span aria-hidden="true">−</span></a>
            `;
            return div;
        };

        zoomControl.addTo(map);

        // Tambahkan event listener untuk kontrol zoom kustom
        document.querySelector('.leaflet-control-zoom-in').addEventListener('click', function (e) {
            e.preventDefault();
            map.zoomIn();
        });

        document.querySelector('.leaflet-control-zoom-out').addEventListener('click', function (e) {
            e.preventDefault();
            map.zoomOut();
        });
    </script>
</body>

</html>
