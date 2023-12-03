<?php 
require 'functions.php';

//ambil id dari url
$id = $_GET['id'];

//query pegawai berdasarkan id
$p = query("SELECT * FROM pegawai WHERE id = $id");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Data Pegawai</title>
</head>
<body>
  <h3>Detail Data Pegawai</h3>
  <ul>
    <li><img src="img/<?= $p['photo']; ?>"></li>
    <li>Nama : <?= $p['nama']; ?></li>
    <li>Email : <?= $p['email']; ?></li>
    <li>Jabatan : <?= $p['jabatan']; ?></li>
    <li>Tahun Masuk : <?= $p['tahun']; ?></li>
    <li><a href="">Ubah</a> | <a href="">Hapus</a></li>
    <li><a href="exercise3.php">Kembali Ke Daftar Mahasiswa</a></li>
  </ul>
</body>
</html>