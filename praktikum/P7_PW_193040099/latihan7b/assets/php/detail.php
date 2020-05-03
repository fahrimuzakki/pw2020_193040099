<?php 

    if (!isset($_GET['id'])){
        header("location: ../ index.php");
        exit;
    }

    require 'functions.php';

    $id = $_GET['id'];

    $b = query("SELECT * FROM alatmusik WHERE id = $id")[0];
?>

<html>
    <head>
        <title>Latihan7bDetail_193040099</title>
        <link rel="stylesheet" href="styleCdetail.css">
    </head>
    <body>
    <center>
    <h1>Alat Musik</h1>
        <div class="container">
            <div class="gambar">
                <img src="../assets/img/<?= $b["Gambar"]; ?>" alt="">
            </div>
                <div class="keterangan">
                    <p><?= $b["AlatMusik"]; ?></p>
                    <p>Merk : <?= $b["Merk"]; ?></p>
                    <p>Alamat Toko : <?= $b["AlamatToko"]; ?></p>
                    <p>Harga : <?= $b["Harga"]; ?></p>
                </div>

        <button class="tombol_kembali"><a href="../index.php">Kembali</a></button>
        </div>
        </center>
    </body>
</html>