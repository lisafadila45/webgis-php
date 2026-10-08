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
    <a href="B_suwawa_halaman.php">Suwawa</a>
    <a href="B_tilongkabila_halaman.php">Tilongkabila</a>
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
        <td>BPHTB</td>
        <td>Tilongkabila</td>
        <td>Dedy Istijar Mohamad</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>2</td>
        <td>BPHTB</td>
        <td>Tilongkabila</td>
        <td>Hj Muhammad Basri canti,S</td>
        <td>IDR 683,480.00</td>
        <td></td>
    </tr>
    <tr>
        <td>3</td>
        <td>BPHTB</td>
        <td>Tilongkabila</td>
        <td>Sitar Alim</td>
        <td>IDR 2,132,200.00</td>
        <td></td>
    </tr>
    <tr>
        <td>4</td>
        <td>BPHTB</td>
        <td>Tilongkabila</td>
        <td>Rahman Hasan</td>
        <td>IDR 199,920.00</td>
        <td></td>
    </tr>
    <tr>
        <td>5</td>
        <td>BPHTB</td>
        <td>Tilongkabila</td>
        <td>Ibrahim Husain</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>6</td>
        <td>BPHTB</td>
        <td>Tilongkabila</td>
        <td>Zefri Akuna</td>
        <td>IDR 263,130.00</td>
        <td></td>
    </tr>
    <tr>
        <td>7</td>
        <td>BPHTB</td>
        <td>Tilongkabila</td>
        <td>Selfie Domili</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>8</td>
        <td>BPHTB</td>
        <td>Tilongkabila</td>
        <td>Husnul Khatimah Ibrahim</td>
        <td>IDR 998,760.00</td>
        <td></td>
    </tr>
    <tr>
        <td>9</td>
        <td>BPHTB</td>
        <td>Tilongkabila</td>
        <td>Hais Yunus</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>10</td>
        <td>BPHTB</td>
        <td>Tilongkabila</td>
        <td>Olis Bakari</td>
        <td>IDR 845,810.00</td>
        <td></td>
    </tr>
    <tr>
        <td>11</td>
        <td>BPHTB</td>
        <td>Tilongkabila</td>
        <td>Arson Djakaria</td>
        <td>IDR 825,800.00</td>
        <td></td>
    </tr>
    </table>

</body>
</html>