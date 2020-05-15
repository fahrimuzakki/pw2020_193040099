<?php

require 'functions.php';
if (isset($_POST["register"])) {
    if(registrasi($_POST) > 0) {
        echo "<script>
                    alert('Registrasi Berhasil);
                    document.location.href = 'login.php';
                    </script>";
    } else {
        echo "<script>
                    alert('Registrasi Gagal');
               </script>";
    }
}

?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Registrasi</title>

    <link rel="stylesheet" href="../assets/css/registrasi.css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>
  <form action="" method="post">
  <div class="login-page">

      <h1>Registration</h1>

      <div class="form-control">
      <i class="tiny material-icons">person</i>
        <input type="text" placeholder="Username" name="username"/>
      </div>

      <div class="form-control">
        <i class="tiny material-icons">lock</i>
        <input type="password" placeholder="Password" name="password"/>
      </div>
      

      <button class="btn-submit" type="submit" name="register">Register</button>
    </div>
    </form>
  </body>
</html>
