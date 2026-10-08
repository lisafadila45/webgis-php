<!DOCTYPE html>
<html>
<head>
    <title>Tabel Data Set</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #6A5ACD;
            color: white;
        }
        td.wp-name {
            font-size: 12px;
        }
        /* Style untuk menu dropdown */
        .dropdown {
            float: right;
        }
        .dropbtn {
            background-color: #fff;
            color: #000;
            padding: 10px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <!-- Menu dropdown -->
<div class="dropdown">
    <button class="dropbtn"><i class="fas fa-chevron-down"></i> Pilih Kecamatan</button>
    <div class="dropdown-content">
        <a href="M_suwawa_halaman.php">Suwawa</a>
        <a href="M_tilongkabila_halaman.php">Tilongkabila</a>
        <!-- Tambahkan kecamatan lainnya jika diperlukan -->
    </div>
</div>

<table>
    <tr>
        <th>No</th>
        <th>Jenis WP</th>
        <th>Kecamatan</th>
        <th>Nama WP</th>
        <th>Jumlah Penerimaan</th>
        <th>Keterangan</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Mineral BLB dan Restoran</td>
        <td>Tilongkabila</td>
        <td>SDN 5 Tilongkabila</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>2</td>
        <td>Mineral BLB</td>
        <td>Tilongkabila</td>
        <td>Kantor Desa Moutong</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>3</td>
        <td>Mineral BLB</td>
        <td>Tilongkabila</td>
        <td>SMKN 1 Suwawa</td>
        <td></td>
        <td></td>
    </tr>
</table>

</body>
</html>