<?php
$title = "Leaflet - Point";
$judul = $title;
$url = 'leaflet-point';
$fileJs = 'leaflet-pointJs';

// Ambil nilai jenis_wp dari URL jika tersedia, jika tidak, default ke string kosong
$jenis_wp = isset($_GET['jenis_wp']) ? $_GET['jenis_wp'] : '';

// Ambil nilai tahun dari URL jika tersedia, jika tidak, default ke string 'semua'
$tahun = isset($_GET['tahun']) ? $_GET['tahun'] : 'semua';

?>

<?=content_open($title)?>
<form>
    <div class="row">
        <?=input_hidden('halaman', $url)?>
        <div class="col-md-3">
            <label for="jenis_wp">Jenis WP:</label>
            <select name="jenis_wp" id="jenis_wp" class="form-control">
                <option value="">Semua</option>
                <?php
                // Daftar pilihan jenis WP
                $jenis_wp_options = array(
                    'Restoran' => 'Restoran',
                    'Reklame' => 'Reklame',
                    'Mineral BLB' => 'Mineral BLB',
                    'Retribusi' => 'Retribusi',
                    'BPHTB' => 'BPHTB'
                );
                // Loop through the jenis WP options and generate <option> tags
                foreach ($jenis_wp_options as $key => $value) {
                    $selected = ($jenis_wp == $key) ? 'selected' : '';
                    echo "<option value=\"$key\" $selected>$value</option>";
                }
                ?>
            </select>
        </div>
        <div class="col-md-3">
            <button type="submit" class="btn btn-info">Tampilkan</button>
        </div>
    </div>
</form>
<hr>
<div id="mapid"></div>
<?=content_close()?>
