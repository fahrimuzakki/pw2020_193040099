<?php

    session_start();
    require 'functions.php';

    //cek cookie
    if(isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
      $username = $_COOKIE['username'];
      $hash = $_COOKIE['hash'];

    //ambil username berdasarkan id
    $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    $row = mysqli_fetch_assoc($result);

    //cek cookie dan username
    if ($hash === hash('sha256', $row['id'], false)) {
      $_SESSION['username'] = $row['username'];
      header("Location: admin.php");
      exit;
    }
  }

    //melakukan pengecekan apakah user sudah melakukan login jika sudah redirect kehalaman admin
    if (isset($_SESSION['username'])) {
        header("Location: admin.php");
        exit;
    }

    //login
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    

        // mencoba username dan password
        if (mysqli_num_rows($cek_user) > 0) {
            $row = mysqli_fetch_assoc($cek_user);
            if (password_verify($password, $row['password'])) {
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['hash'] = hash('sha256', $row['id'], false);

                //jika remember me dicentang
                if (isset($_POST['remember'])) {
                  setcookie('username', $row['username'], time() + 60 + 60 + 24);
                  $hash = hash('sha256', $row['id']);
                  setcookie('hash', $hash, time() + 60 + 60 + 24);
                }
            }
            if (hash('sha256', $row['id']) == $_SESSION['hash']) {
                header("Location: admin.php");
                die;
            }
            header("Location: ../index.php");
            die;
        }
        $error = true;
    }

?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/style.css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>
  <form action="" method="post">
    <div class="login-page">
      <?php if (isset($error)) : ?>
      <p style="color: red; font-style: italic;">Username atau Password salah</p>
      <?php endif; ?>
      <h1>Login</h1>
        <div class="form-control">
          <i class="tiny material-icons">person</i>
          <input type="text" placeholder="username" name="username"/>
        </div>
        <div class="form-control">
          <i class="tiny material-icons">lock</i>
          <input type="password" placeholder="password" name="password"/>
        </div>
        <div>
          <input type="checkbox" name="remember">
          <label for="remember">Remember Me</label>
        </div>
      <button class="btn-submit" type="submit" name="submit">Login</button>

        Belum punya akun? Registrasi <a href="registrasi.php">Disini</a></P>
    </div>
  </form>
  </body>
</html>





