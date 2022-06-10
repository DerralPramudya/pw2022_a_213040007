<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'tubes';

$conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('Gagal terhubung ke Database');


function koneksi() {
    $conn = mysqli_connect('localhost', 'root', '', 'tubes') or die('KONEKSI GAGAL!');
    return $conn;
}

function query($query) {
    $conn = koneksi();
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
}
    return $rows;
}

function tambah($data) {

    // checking default photo
    // if ($_FILES['gambar']['error'] === 4 ) {
    //     $gambar = 'SABER.jpg';
    // } else {
    //     $gambar = upload();
    //     // checking failed uploading photo
    //     if (!$gambar) {
    //         return false;
    //     }
    // }

    $conn = koneksi();

    $nama = htmlspecialchars($data["nama"]);
    $harga = htmlspecialchars($data["harga"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $status = htmlspecialchars($data["status"]);

    // Upload gambar
    $gambar = upload();
    if ($gambar === false) {
        return false;
    }

    $query = "INSERT INTO 
                tbl_dt_sepatu
            VALUES
                (null, '$nama', '$harga', '$deskripsi', '$gambar', '$status' )";

    mysqli_query($conn, $query) or die (mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function hapus($idproduct) {

    $conn = koneksi();
    $result = query("SELECT * FROM tbl_dt_sepatu WHERE product_id = $idproduct")[0];

    // Hapus gambar
    $image = $result['product_image'];
    unlink("img/$image");

    // Query delete
    mysqli_query($conn, "DELETE FROM tbl_dt_sepatu WHERE product_id = $idproduct") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);

}

function ubah($data) {
    $conn = koneksi();
    $id = $data['id'];
    $nama = htmlspecialchars($data["nama"]);
    $harga = htmlspecialchars($data["harga"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $gambarLama = htmlspecialchars($data["gambarlama"]);
    $status = htmlspecialchars($data["status"]);

    // Cek upload file baru atau tidak
    if($_FILES['gambar'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }
    

    
    $query = "UPDATE
                tbl_dt_sepatu
            SET
                product_name = '$nama',
                product_price = '$harga',
                product_description = '$deskripsi',
                product_image = '$gambar',
                product_status = '$status'
                WHERE product_id = $id";

    mysqli_query($conn, $query) or die (mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function upload ()
{
    $rand = rand();
    $ekstensi = array('jpg', 'png', 'jpeg');
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    $ext = pathinfo($namaFile, PATHINFO_EXTENSION);

    // Cek jika tidak ada gambar yang diupload
    if ($error === 4)  {
        echo "<script>
                alert('Tolong upload file terlebih dahulu!');
              </script>";
    }

    // Cek ekstensi file
    if ( !in_array($ext, $ekstensi)) {
        echo "<script>
                alert('yang anda upload bukan gambar!');
              </script>";
              return false;
    }

    // Cek ukuran gambar
    if ($ukuranFile > 3000000) {
        echo "<script>
                alert('Ukuran file terlalu besar!');
              </script>";
              return false;
    }

    // execute upload
    $newName = $rand. '_' .$namaFile;
    move_uploaded_file($tmpName, 'img/'.$rand.'_'.$namaFile);
    return $newName;
}

function registrasi($data) {
    global $conn;

    $nama = mysqli_real_escape_string($conn, $data['nama_user']);
    $username = mysqli_real_escape_string($conn, $data['username']);
    $password = mysqli_real_escape_string($conn, $data['password']);
    $password2 = mysqli_real_escape_string($conn, $data['re_password']);

    // Cek password sesuai atau tidak 
    if($password !== $password2) {
        echo "<script>alert('Konfirmasi password tidak sesuai')</script>";
        return false;
    }

    // Enkripsi password
    $password = md5($password);
 
    mysqli_query($conn, "INSERT INTO user VALUES('', '$nama', '$username', '$password')");

    return mysqli_affected_rows($conn);
}



?>