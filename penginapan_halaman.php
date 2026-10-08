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
        <a href="(P)suwawa_halaman.php">Suwawa</a>
        <a href="(P)tilongkabila_halaman.php">Tilongkabila</a>
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
        <td>Penginapan</td>
        <td>Suwawa</td>
        <td>Hotel Toewawa</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>2</td>
        <td>Penginapan</td>
        <td>Suwawa</td>
        <td>Kost Al Baraqah</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>3</td>
        <td>Penginapan</td>
        <td>Suwawa</td>
        <td>Kost Helumo</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>4</td>
        <td>Penginapan</td>
        <td>Suwawa</td>
        <td>Kost Serkhan</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>5</td>
        <td>Penginapan</td>
        <td>Suwawa</td>
        <td>Kost DPS Hijau</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>6</td>
        <td>Penginapan</td>
        <td>Suwawa</td>
        <td>Kost Lintas Batas</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>7</td>
        <td>Penginapan</td>
        <td>Suwawa</td>
        <td>Kost Ambar</td>
        <td></td>
        <td>Belum Terdaftar</td>
    </tr>
    <tr>
        <td>8</td>
        <td>Penginapan</td>
        <td>Suwawa</td>
        <td>Kost Putri Rohdatul</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>9</td>
        <td>Penginapan</td>
        <td>Suwawa</td>
        <td>Kost Putri Tsaqib</td>
        <td></td>
        <td>Belum Terdaftar</td>
    </tr>
    <tr>
        <td>10</td>
        <td>Penginapan</td>
        <td>Suwawa</td>
        <td>Kost Kamil</td>
        <td></td>
        <td>Belum Terdaftar</td>
    </tr>
    <tr>
        <td>11</td>
        <td>Penginapan</td>
        <td>Suwawa</td>
        <td>AKJ Kost</td>
        <td></td>
        <td>Belum Terdaftar</td>
    </tr>
    <tr>
        <td>12</td>
        <td>Penginapan</td>
        <td>Suwawa</td>
        <td>Kost Gladys</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>13</td>
        <td>Penginapan</td>
        <td>Suwawa</td>
        <td>Kos Delvi Chandra</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>14</td>
        <td>Penginapan</td>
        <td>Suwawa</td>
        <td>Kost Amanah</td>
        <td>IDR 250,000</td>
        <td></td>
    </tr>
    <tr>
        <td>15</td>
        <td>Penginapan</td>
        <td>Suwawa</td>
        <td>Kost Resky Riska</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>16</td>
        <td>Penginapan</td>
        <td>Suwawa</td>
        <td>Kost Adzkia</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>17</td>
        <td>Penginapan</td>
        <td>Suwawa</td>
        <td>Kos Suroboyo</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>18</td>
        <td>Penginapan</td>
        <td>Tilongkabila</td>
        <td>Antariksa Kost</td>
        <td></td>
        <td>Tambahan</td>
    </tr>
    <tr>
        <td>19</td>
        <td>Penginapan</td>
        <td>Tilongkabila</td>
        <td>AlFatih Kost</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>20</td>
        <td>Penginapan</td>
        <td>Tilongkabila</td>
        <td>Anggi Kost</td>
        <td>IDR 400,000</td>
        <td></td>
    </tr>
    <tr>
        <td>21</td>
        <td>Penginapan</td>
        <td>Tilongkabila</td>
        <td>Kost Bintang</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>22</td>
        <td>Penginapan</td>
        <td>Tilongkabila</td>
        <td>Evergren Home</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>23</td>
        <td>Penginapan</td>
        <td>Tilongkabila</td>
        <td>Kost Putri</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>24</td>
        <td>Penginapan</td>
        <td>Tilongkabila</td>
        <td>Kost Pink</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>25</td>
        <td>Penginapan</td>
        <td>Tilongkabila</td>
        <td>Kost Pondok Halima</td>
        <td></td>
        <td>Tambahan</td>
    </tr>
    <tr>
        <td>26</td>
        <td>Penginapan</td>
        <td>Tilongkabila</td>
        <td>EF 4 Kost</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>27</td>
        <td>Penginapan</td>
        <td>Tilongkabila</td>
        <td>Rumah Kost dan Homestay Vina</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>28</td>
        <td>Penginapan</td>
        <td>Tilongkabila</td>
        <td>Annisa Kost</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>29</td>
        <td>Penginapan</td>
        <td>Tilongkabila</td>
        <td>Fajri Kost</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>30</td>
        <td>Penginapan</td>
        <td>Tilongkabila</td>
        <td>Kost Fandi</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>31</td>
        <td>Penginapan</td>
        <td>Tilongkabila</td>
        <td>Kost Iska</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>32</td>
        <td>Penginapan</td>
        <td>Tilongkabila</td>
        <td>Kost Karina 2</td>
        <td>IDR 400,000</td>
        <td></td>
    </tr>
    <tr>
        <td>33</td>
        <td>Penginapan</td>
        <td>Tilongkabila</td>
        <td>Muslimah Kost</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>34</td>
        <td>Penginapan</td>
        <td>Tilongkabila</td>
        <td>Kost Rahmah</td>
        <td></td>
        <td>Tambahan</td>
    </tr>
    <tr>
        <td>35</td>
        <td>Penginapan</td>
        <td>Tilongkabila</td>
        <td>Kost Mawar Putri</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>36</td>
        <td>Penginapan</td>
        <td>Tilongkabila</td>
        <td>MTK Kost</td>
        <td>IDR 1,300,000</td>
        <td></td>
    </tr>
    <tr>
        <td>37</td>
        <td>Penginapan</td>
        <td>Tilongkabila</td>
        <td>4 Putri Kost</td>
        <td>IDR 200,000</td>
        <td></td>
    </tr>
    <tr>
        <td>38</td>
        <td>Penginapan</td>
        <td>Tilongkabila</td>
        <td>Kost Mahasya</td>
        <td>IDR 300,000</td>
        <td></td>
    </tr>
</table>

</body>
</html>
