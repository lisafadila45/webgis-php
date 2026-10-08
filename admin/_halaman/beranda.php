<?php
  $title="Beranda";
  $judul=$title;
  
?>
<?=content_open('Halaman Beranda')?>
    <?=$session->pull("info")?>
    <section class="content">
    <style>
        /* Style tambahan untuk penataan */
        figure {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        img {
            max-width: 10%; /* Atur lebar gambar sesuai kebutuhan */
            margin-right: 20px; /* Jarak antara gambar dan teks */
        }
        h2{
          margin-left: 10px;
          margin-right: 50px;
        }
        p{
          margin-left: 10px;
          margin-right: 50px;
          text-align: justify;
        }
    </style>
    <figure>
      <img src="<?=assets()?>icons/logo-bonebol.png" alt="Deskripsi Gambar">
      <figcaption>
        <h2>Badan Keuangan dan Pendapatan Daerah</h2>
        <p>Salah satu Organisasi Perangkat Daerah (OPD) di lingkungan Pemerintah Kabupaten Bone Bolango yang mempunyai tugas pokok membantu Bupati dalam melaksanakan urusan pemerintahan di bidang pengelolaan keuangan, pendapatan, dan aset daerah.</p>
      </figcaption>
    </figure><br><br>
    <figure>
      <img src="<?=base_url()?>assets/icons/logo-bonebol.png" alt="Deskripsi Gambar">
      <figcaption>
        <h2>SIPAD Bonebol</h2>
        <p>SIPAD Bonebol 
          adalah singkatan dari Sistem Informasi Pendapatan Asli Daerah. Ini adalah portal yang digunakan oleh pemerintah daerah untuk mengelola pendapatan asli daerah (PAD) Kab. Bone Bolango dalam bentuk informasi geospasial.
          SIPAD adalah alat yang penting untuk membantu pemerintah daerah Bone Bolango dalam mengelola PAD secara lebih efektif dan efisien.</p>
      </figcaption>
    </figure><br><br>
    <figure>
      <img src="<?=base_url()?>assets/icons/logo-bonebol.png" alt="Deskripsi Gambar">
      <figcaption>
        <h2>Pendapatan Asli Daerah</h2>
        <p>Pendapatan Asli Daerah (PAD) Kabupaten Bone Bolango tahun 2024 dianggarkan mencapai Rp103,8 Miliar. 
          Angka ini merupakan bagian dari estimasi Anggaran Pendapatan dan Belanja Daerah (APBD) Kabupaten Bone Bolango tahun 2024 sebesar Rp963,48 Miliar.</p>
      </figcaption>
    </figure>
      <?=content_close()?>