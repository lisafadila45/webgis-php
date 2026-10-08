<!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
   crossorigin=""></script>

 <script src="assets/js/leaflet-panel-layers-master/src/leaflet-panel-layers.js"></script>
 <script src="assets/js/leaflet.ajax.js"></script>

   <script type="text/javascript">

   	var map = L.map('mapid').setView([0.533437,123.3520422], 10);

   	var LayerKita=L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',{
            maxZoom: 20,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        });
	map.addLayer(LayerKita);

	var myStyle2 = {
	    "color": "#ffff00",
	    "weight": 1,
	    "opacity": 0.9
	};

	function popUp(f,l){
	    var out = [];
	    if (f.properties){
	        // for(key in f.properties){
	        // 	console.log(key);

	        // }
			out.push("Provinsi: "+f.properties['WADMPR']);
			out.push("Kecamatan: "+f.properties['WADMKC']);
			out.push("Desa/Kelurahan: "+f.properties['WADMKD']);
	        l.bindPopup(out.join("<br />"));
	    }
	}

	// legend

	function iconByName(name) {
		return '<i class="icon" style="background-color:'+name+';border-radius:50%"></i>';
	}

	function featureToMarker(feature, latlng) {
		return L.marker(latlng, {
			icon: L.divIcon({
				className: 'marker-'+feature.properties.amenity,
				html: iconByName(feature.properties.amenity),
				iconUrl: '../images/markers/'+feature.properties.amenity+'.png',
				iconSize: [25, 41],
				iconAnchor: [12, 41],
				popupAnchor: [1, -34],
				shadowSize: [41, 41]
			})
		});
	}

	var baseLayers = [
		{
			name: "OpenStreetMap",
			layer: LayerKita
		},
		{	
			name: "OpenCycleMap",
			layer: L.tileLayer('https://{s}.google.com/vt/lyrs=y&x={x}&y={y}&z={z}')
		},
		{
			name: "Outdoors",
			layer: L.tileLayer('https://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}')
		}
	];

	<?php
		$getKecamatan=$db->ObjectBuilder()->get('m_kecamatan');
		foreach ($getKecamatan as $row) {
			?>

			var myStyle<?=$row->id_kecamatan?> = {
			    "color": "<?=$row->warna_kecamatan?>",
			    "weight": 1,
			    "opacity": 1
			};

			<?php
			$arrayKec[]='{
			name: "'.$row->nm_kecamatan.'",
			icon: iconByName("'.$row->warna_kecamatan.'"),
			layer: new L.GeoJSON.AJAX(["assets/unggah/geojson/'.$row->geojson_kecamatan.'"],{onEachFeature:popUp,style: myStyle'.$row->id_kecamatan.',pointToLayer: featureToMarker }).addTo(map)
			}';
		}
	?>

	var overLayers = [{
		group: "Layer Kecamatan",
		layers: [
			<?=implode(',', $arrayKec);?>
		]
	}
	];

	var panelLayers = new L.Control.PanelLayers(baseLayers, overLayers,{
		collapsibleGroups: true
	});

	map.addControl(panelLayers);



   </script>