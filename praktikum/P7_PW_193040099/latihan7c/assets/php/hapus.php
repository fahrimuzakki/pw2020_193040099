<title>Hapus Data</title>
<?php

session_start();
    if (!isset($_SESSION["username"])) {
        header("Location: login.php");
        exit;
    }

require 'functions.php';

$id = $_GET["id"];
if (hapus($id) > 0) {
			echo "<script>
				alert('Data Berhasil di Hapus!');
				document.location.href = 'admin.php';
			</script>";
		}else {
			echo "<script>
				alert('Data Gagal di Hapus!');
				document.location.href = 'admin.php';
			</script>";
		}
?>

