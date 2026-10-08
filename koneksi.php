<?php
header('Content-Type: application/json; charset=UTF-8');

// Koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "webgis-php";

// Membuat koneksi
$koneksi = new mysqli($host, $username, $password, $database);

// Mengatur karakter set ke UTF-8
if (!$koneksi->set_charset("utf8")) {
    echo json_encode(["error" => "Error loading character set utf8: " . $koneksi->error]);
    exit();
}

// Memeriksa apakah koneksi berhasil
if ($koneksi->connect_error) {
    echo json_encode(["error" => "Koneksi gagal: " . $koneksi->connect_error]);
    exit();
}

// SQL query untuk mengambil data dari tabel t_hotspot dan join dengan m_kecamatan
$sql = "
SELECT 
    t_hotspot.id_hotspot, 
    t_hotspot.kel_desa, 
    t_hotspot.nama_wp, 
    t_hotspot.jenis_wp, 
    t_hotspot.koordinat, 
    t_hotspot.jumlah_pajak, 
    t_hotspot.gambar, 
    m_kecamatan.id_kecamatan, 
    m_kecamatan.nm_kecamatan 
FROM 
    t_hotspot 
JOIN 
    m_kecamatan 
ON 
    t_hotspot.id_kecamatan = m_kecamatan.id_kecamatan";

$result = $koneksi->query($sql);

$data = [];
if ($result) {
    while ($row = $result->fetch_assoc()) {
        // Encode setiap string sebagai UTF-8
        foreach ($row as $key => $value) {
            $row[$key] = utf8_encode($value);
        }
        $data[] = $row;
    }
} else {
    echo json_encode(["error" => "Query gagal: " . $koneksi->error]);
    exit();
}

$koneksi->close();

echo json_encode($data);
?>
