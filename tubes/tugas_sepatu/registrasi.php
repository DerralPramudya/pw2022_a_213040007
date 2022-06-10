<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'tubes';

$conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('Gagal terhubung ke Database');


session_start();
require "functions.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="login-page">
  <div class="form">
    <form class="login-form" method="POST">
    <input type="text" placeholder="nama" name="nama_user">
      <input type="text" placeholder="username" name="username">
      <input type="password" placeholder="password" name="password">
      <input type="password" placeholder="konfirmasi password" name="re_password">
      <button name="registrasi">registrasi</button>
      <p class="message">Sudah punya akun? <a href="login.php">Masuk di sini</a></p>
    </form>

    <!-- Pengecekkan Username & Password -->
    <?php 
            if(isset($_POST['registrasi'])) {
                if(registrasi($_POST) > 0) {
                    echo "<script>alert('User baru telah ditambahkan')</script>";
                    echo '<script>window.location="login.php"</script>';
                } else {
                    echo mysqli_error($conn);
                }
            }

        ?>

  </div>
</div>
</body>
</html>