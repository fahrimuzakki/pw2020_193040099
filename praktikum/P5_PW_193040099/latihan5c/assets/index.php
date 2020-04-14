<?php 

    require 'php/functions.php';

    $alatmusik = query("SELECT * FROM alatmusik")
?>

<html>
    <head>
        <title>Latihan5c_193040099</title>
        <link rel="stylesheet" href="../assets/css/styleCindex.css" type="text/css">
    </head>
    
    <body background="assets/img/bckgrd.png">
        <center>
                <h1>Alat Musik</h1>
                <div class="container">
                    <?php foreach ($alatmusik as $b) : ?>
                        <P class="tipe">
                            <a href="php/detail.php?id=<?= $b['id'] ?>">
                            <?= $b["Alat Musik"] ?>
                            </a>
                        </P>
                    <?php endforeach; ?>
                </div>
        </center>
    </body>
</html>