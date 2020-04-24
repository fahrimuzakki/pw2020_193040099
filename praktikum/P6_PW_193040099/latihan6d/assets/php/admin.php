<?php
    //menghubungkan dengan file
    require 'functions.php';

    //melakukan query
    $alatmusik = query("SELECT * FROM alatmusik");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <style type="text/css">
	  		img{
	  		width: 200px;
	  		height: 200px;
	  	}
	  </style>
</head>
<body>
    <table border="1" cellpading="10" cellspacing="0">
    <a href="tambah.php" class="waves-effect waves-light btn card-panel teal lig">Tambah Data Baru</a>
        <tr class="card-panel teal lig">
            <th>#</th>
            <th>Opsi</th>
            <th>Gambar</th>
            <th>Alat Musik</th>
            <th>Merk</th>
            <th>Alamat Toko</th>
            <th>Harga</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($alatmusik as $b) : ?>
        <tr>
            <td align="center"><?= $i; ?></td>
            <td>
            <a class="waves-effect waves-light btn" href="ubah.php?id=<?= $b['id']; ?>">Ubah</a>
            <a class="waves-effect waves-light btn red" href="hapus.php?id=<?= $b['id']; ?>" onclick = "return confirm('Apakah anda yakin ingin menghapus ini ?')">Hapus</a>
            </td>
            <td><img src="../assets/img/<?= $b['Gambar']; ?>" alt=""></td>
            <td><?= $b['AlatMusik']; ?></td>
            <td><?= $b['Merk']; ?></td>
            <td><?= $b['AlamatToko']; ?></td>
            <td><?= $b['Harga']; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>