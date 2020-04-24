<?php
	require 'functions.php';

	if (isset($_POST["submit"])) {
			
		if (tambah($_POST) > 0) {
			echo 	"<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'admin.php';
			</script>";
		}else {
			echo "<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'admin.php';
			</script>";
		}

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<form action="" method="post">
		<ul>
			<li><label for="id">ID :</label>
				<input type="text" name="id" id="id">
			</li>
			<li><label for="Gambar">Gambar :</label>
				<input type="file" name="Gambar" id="Gambar">
			</li>
			<li><label for="AlatMusik">Alat Musik :</label>
				<input type="text" name="AlatMusik" id="AlatMusik">
			</li>
			<li><label for="Merk">Merk :</label>
				<input type="text" name="Merk" id="Merk">
			</li>
			<li><label for="AlamatToko">Alamat Toko :</label>
				<input type="text" name="AlamatToko" id="AlamatToko">
			</li>
			<li><label for="Harga">Harga</label>
				<input type="text" name="Harga" id="Harga">
			</li>

		</ul>
		<button class="waves-effect waves-light btn" type="submit" name="submit">Submit
			<i class="material-icons right">send</i>
		</button>
		<br>
		<br>	
		<a href="admin.php" color="white">
		<button class="waves-effect waves-light btn" type="submit" name="submit">Kembali
		</button>
		</a>

	</form>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            

</body>
</html>