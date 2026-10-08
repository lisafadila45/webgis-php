<?php
    // Koneksi ke database
    $host = "localhost"; // Host database
    $username = "root"; // Username database
    $password = ""; // Password database
    $database = "web-gis"; // Nama database

    // Membuat koneksi
    $koneksi = mysqli_connect($host, $username, $password, $database);

    // Check koneksi
    if (!$koneksi) { 
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    // SQL query untuk mengambil data dari tabel m_kecamatan
    $sql = "SELECT * FROM m_kecamatan";
    $query = mysqli_query($koneksi, $sql);

    // Membuat koneksi
$koneksi = mysqli_connect($host, $username, $password, $database);
echo "database terkoneksi";

        if ($koneksi->query($sql) === TRUE) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $koneksi->error;
        }

    // Menutup koneksi
    mysqli_close($koneksi);
?>