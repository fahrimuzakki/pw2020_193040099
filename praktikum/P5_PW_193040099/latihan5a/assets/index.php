<?php 

    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");

    mysqli_select_db($conn, "tubes_193040099") or die("Database Salah!");

    $result = mysqli_query($conn, "SELECT*FROM alatmusik")
?>

<html>
    <head>
        <title>Latihan5a_19304099</title>
        <link rel="stylesheet" href="../assets/css/styleA.css" type="text/css">
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
            <?php while($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <?php $i ?>
                <td><?= $row["id"]; ?></td>
                <td><img src="img/<?= $row["Gambar"]; ?>"></td>
                <td><?= $row["Alat Musik"]; ?></td>
                <td><?= $row["Merk"]; ?></td>
                <td><?= $row["Alamat Toko"]; ?></td>
                <td><?= $row["Harga"]; ?></td>
            </tr>
            <?php $i++ ?>
            <?php endwhile; ?>
        </table>
		</center>
    </body>
</html>