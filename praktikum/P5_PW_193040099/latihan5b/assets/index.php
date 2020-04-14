<?php 

    require 'php/functions.php';

    $alatmusik = query("SELECT*FROM alatmusik")
?>

<html>
    <head>
        <title>Latihan5b_193040099</title>
        <link rel="stylesheet" href="../assets/css/styleB.css" type="text/css">
    </head>
    <body>
        <h1>Alat Musik</h1>
        <center>
        <table border="1px">
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Alat Musik</th>
                <th>Merk</th>
                <th>Alamat Toko</th>
                <th>Harga</th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach($alatmusik as $b) : ?>
            <tr>
                <?php $i ?>
                <td><?= $b["id"]; ?></td>
                <td><img src="img/<?= $b["Gambar"]; ?>"></td>
                <td><?= $b["Alat Musik"]; ?></td>
                <td><?= $b["Merk"]; ?></td>
                <td><?= $b["Alamat Toko"]; ?></td>
                <td><?= $b["Harga"]; ?></td>
            </tr>
            <?php $i++ ?>
            <?php endforeach; ?>
        </table>
		</center>
    </body>
</html>