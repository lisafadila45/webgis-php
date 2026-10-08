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
        <td>12</td>
        <td>BPHTB</td>
        <td>Suwawa</td>
        <td>Oktavianus Tangahu SH,M.AP</td>
        <td>IDR 899,500.00</td>
        <td></td>
    </tr>
    <tr>
        <td>13</td>
        <td>BPHTB</td>
        <td>Suwawa</td>
        <td>Intan Septiani Soleman</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>14</td>
        <td>BPHTB</td>
        <td>Suwawa</td>
        <td>Adam Masihu</td>
        <td>IDR 3,080,000.00</td>
        <td></td>
    </tr>
    <tr>
        <td>15</td>
        <td>BPHTB</td>
        <td>Suwawa</td>
        <td>Sri Wahyuni Lahay</td>
        <td>IDR 3,998,050.00</td>
        <td></td>
    </tr>
    <tr>
        <td>16</td>
        <td>BPHTB</td>
        <td>Suwawa</td>
        <td>Andi Tenry Fada Sumaga</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>17</td>
        <td>BPHTB</td>
        <td>Suwawa</td>
        <td>Abd. Rais Hadju</td>
        <td>IDR 7,456,750.00</td>
        <td></td>
    </tr>
    <tr>
        <td>18</td>
        <td>BPHTB</td>
        <td>Suwawa</td>
        <td>Abdul Razak Latif</td>
        <td>IDR 1.00</td>
        <td></td>
    </tr>
    <tr>
        <td>19</td>
        <td>BPHTB</td>
        <td>Suwawa</td>
        <td>Lastin Suma</td>
        <td>IDR 2,673,300.00</td>
        <td></td>
    </tr>
    <tr>
        <td>20</td>
        <td>BPHTB</td>
        <td>Suwawa</td>
        <td>Rahman Manihula</td>
        <td>IDR 4,281,900.00</td>
        <td></td>
    </tr>
    <tr>
        <td>21</td>
        <td>BPHTB</td>
        <td>Suwawa</td>
        <td>Idjah Bahu CS</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>22</td>
        <td>BPHTB</td>
        <td>Suwawa</td>
        <td>Asna Daud</td>
        <td>IDR 936,900.00</td>
        <td></td>
    </tr>
    <tr>
        <td>23</td>
        <td>BPHTB</td>
        <td>Suwawa</td>
        <td>Delfine J. Nadjamuddin</td>
        <td>IDR 5,077,400.00</td>
        <td></td>
    </tr>
    <tr>
        <td>24</td>
        <td>BPHTB</td>
        <td>Suwawa</td>
        <td>Ewin Liyonu</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>25</td>
        <td>BPHTB</td>
        <td>Suwawa</td>
        <td>Ali Suge</td>
        <td>IDR 780,800.00</td>
        <td></td>
    </tr>
    <tr>
        <td>26</td>
        <td>BPHTB</td>
        <td>Suwawa</td>
        <td>Denny Papuke</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>27</td>
        <td>BPHTB</td>
        <td>Suwawa</td>
        <td>Husin Ahmad</td>
        <td></td>
        <td></td>
    </tr>
</table>

</body>
</html>