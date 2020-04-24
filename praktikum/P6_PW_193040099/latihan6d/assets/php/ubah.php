<?php
require 'functions.php';

$id = $_GET["id"];
$alatmusik = query("SELECT * FROM alatmusik WHERE id = $id") [0];

	if(isset($_POST["ubah"])) {

		if(ubah($_POST) > 0) {
			echo 	"
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'admin.php';
			</script>";
		}else {
			echo "<script>
				alert('data gagal diubah!');
				document.location.href = 'admin.php';
			</script>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>ubah data</title>
</head>
<body>
	<h3>Ubah Data</h3>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $alatmusik["id"]; ?>">
		<input type="hidden" name="gambarLama" value="<?= $alatmusik["Gambar"]; ?>">
		<ul>
			<li>
			<li><label for="Gambar">Gambar :</label>
				<img src="../assets/img/<?= $alatmusik["Gambar"]; ?>" width = 150px>
				<input type="text" name="Gambar" id="Gambar">
			</li>
			<li><label for="AlatMusik">Alat Musik :</label>
				<input type="text" name="AlatMusik" id="AlatMusik" required value="<?= $alatmusik["AlatMusik"]; ?>">
			</li>
			<li><label for="Merk">Merk :</label>
				<input type="text" name="Merk" id="Merk" required value="<?= $alatmusik["Merk"]; ?>">
			</li>
			<li><label for="AlamatToko">Alamat Toko :</label>
				<input type="text" name="AlamatToko" id="AlamatToko" required value="<?= $alatmusik["AlamatToko"]; ?>">
			</li>
			<li><label for="Harga">Harga :</label>
				<input type="text" name="Harga" id="Harga" required value="<?= $alatmusik["Harga"]; ?>">
			</li>

		</ul>
		<button class="waves-effect waves-light btn" type="submit" name="ubah">ubah
			<i class="material-icons right">all_inclusive</i>
		</button>

	</form>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>