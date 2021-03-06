<?php 
require 'functions.php';
$sepatu = query("SELECT * FROM tbl_dt_sepatu");

session_start();
    if($_SESSION['status_login'] != true) {
        echo '<script>window.location="login.php"</script>';
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


    <!-- Awal Navbar -->
    <nav
      class="navbar navbar-expand-lg navbar-dark fixed-top"
      style="background-color: crimson"
    >
      <div class="container">
        <a class="navbar-brand" href="index.php">JualSepatu.com</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto shadow-lg">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php"
                >Beranda</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="produk.php">Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->


    <title>Daftar Produk</title>
  </head>
  <body>


  <div class="container">
      <h1>Daftar Produk</h1>

      <a href="tambah.php" class="btn badge bg-primary">Tambah Data Produk</a>

      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Harga</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Gambar</th>
      <th scope="col">Status</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      <?php $no = 1; ?>
  <?php foreach($sepatu as $spt) { ?>
    <tr class="align-middle">
      <th scope="row"><?= $no++; ?></th>

      <td><?php echo $spt["product_name"] ?></td>
      <td><?php echo $spt["product_price"] ?></td>
      <td><?php echo $spt["product_description"] ?></td>
      <td>
          <img src="img/<?php echo $spt["product_image"] ?>" width="90" class="rounded-circle">
      </td>
      <td><?php echo $spt["product_status"] ?></td>
      <td>
          <a href="ubah.php?id= <?= $spt['product_id']; ?>" class="btn badge bg-warning">Ubah</a>
          <a href="hapus.php?id= <?= $spt['product_id']; ?>" class="btn badge bg-danger" onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
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
