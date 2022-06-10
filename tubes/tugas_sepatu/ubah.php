<?php 
require 'functions.php';
// Query data Mahasiswa berdasarkan id
$id = $_GET['id'];
$spt = query("SELECT * FROM tbl_dt_sepatu WHERE product_id = $id")[0];

// Ketika tombol tambah diklik :
    if( isset($_POST["ubah"])) {
        if (ubah($_POST) > 0) {
            echo '<script> alert("Data berhasil diubah"); window.location="index.php";</script>';
        } else {
            echo"gagal!";
            mysqli_error($conn);
        }
    }
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Ubah Data Mahasiswa</title>
  </head>
  <body>


  <div class="container">
      <h1>Form Ubah Data Sepatu</h1>

      <a href="index.php">Kembali ke Beranda</a>

    <div class="rows mt-3">
        <div class="col-5">
            <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $spt['product_id'];?> ">
                <input type="hidden" name="gambarlama" value="<?= $spt['product_image'];?> ">
                <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required style="width: 150px"; value="<?= $spt['product_name'];?>">
                </div>  

                <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga" required value="<?= $spt['product_price'];?>">
                </div>

                <div class="mb-3">
                 <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" cols="70" rows="10"><?= $spt['product_description'];?></textarea>
                </div>

                <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <img src="img/<?= $spt['product_image'];?>" name="tampilgambar">
                <input type="file" class="form-control" id="gambar" name="gambar">
                </div>

                <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="text" class="form-control" id="status" name="status" value="<?= $spt['product_status'];?>">
                </div>

                <button type="submit" class="btn btn-primary" name="ubah">Ubah Data Sepatu</button>


            </form>
        </div>
    </div>

</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
