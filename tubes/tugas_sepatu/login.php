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
      <input type="text" placeholder="username" name="username">
      <input type="password" placeholder="password" name="password">
      <button name="submit">login</button>
      <p class="message">Belum punya akun? <a href="registrasi.php">Buat akun di sini</a></p>
    </form>

     <!-- Pengecekkan Username & Password -->
     <?php 
            if(isset($_POST['submit'])) {
                $username = mysqli_real_escape_string($conn, $_POST['username']);
				$password = mysqli_real_escape_string($conn, MD5($_POST['password']));
                $cek = mysqli_query($conn,"SELECT * FROM user WHERE username='$username' AND password = '$password'");
                if(mysqli_num_rows($cek) > 0) {
                    $_SESSION['status_login'] = true;
                    echo '<script>window.location="index.php"</script>';
                } else {
                    echo '<script>alert("Username atau Password salah")</script>';
            }
            }

        ?>




  </div>
</div>
</body>
</html>