<?php 
require 'functions.php';

$pegawai = query("SELECT * FROM pegawai");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Pegawai</title>
</head>
<body>
  <h3>Daftar Pegawai</h3>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Foto</th>
      <th>Nama</th>

      <th>Aksi</th>
    </tr>

    <?php $i=1;
     foreach($pegawai as $p) : ?>
    <tr>
      <td><?= $i++; ?></td>
      <td><img src="img/<?= $p['photo']; ?>" width = "60"></td>
      <td><?= $p['nama']; ?></td>

      <td><a href="detail.php?id=<?= $p['id']; ?>">lihat detail</a></td>
    </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>