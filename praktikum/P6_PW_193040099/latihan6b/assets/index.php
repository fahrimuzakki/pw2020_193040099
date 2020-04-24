<?php 

    require 'php/functions.php';

    $alatmusik = query("SELECT * FROM alatmusik")
?>

<html>
    <head>
        <title>Latihan6b_193040099</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    
    <body background="assets/img/bckgrd.png">
        <center>
                <h1>Alat Musik</h1>
                <div class="container">
                    <?php foreach ($alatmusik as $b) : ?>
                        <P class="tipe">
                            <a href="php/detail.php?id=<?= $b['id'] ?>">
                            <b><?= $b["AlatMusik"] ?></b>
                            </a>
                        </P>
                    <?php endforeach; ?>
                </div>
                <a class="waves-effect waves-light btn" href="../assets/php/admin.php">Pergi ke Halaman Admin</a>
        </center>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>