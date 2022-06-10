<?php
// Pertemuan 2,membahas mengenai php
// Nilai: integer,string,boolean 
  echo 10;
  echo "<hr>";

// VARIABEL
// wadah untuk menyimpan NILAI
// namanya bebas tapi tidak boleh diawali angka dan tidak boleh ada spasi 
$nama ='Derral';
echo $nama;
echo "<br>";
// bisa ditimpa/overwrite
$nama ='Pramudya';
echo $nama;
echo "<hr>";

// String
// '' ""
echo "jum'at";
echo "<br>";
// escape character \
echo 'Derral : "Jum\'at"';
echo "Derral : \Jum'at\"";
echo "<hr>";

// Interpolasi
// mencetak isi variabel
// hanya bisa digunakan oleh ""
echo "Halo nama saya Derral $nama";
echo "<br>";
echo "<hr>";

// OPERATOR
// Aritmatika
// +,-,*,/,% 
echo 1 + 1;
echo "<br>";
$alas = 10;
$tinggi = 20;
$luas_segi_tiga = ($alas * $tinggi) / 2;
echo $luas_segi_tiga;
echo "<br>";
echo 3 % 2;
echo "<hr>";

// concat
// penggabung string
// .
$nama_depan = 'Derral';
$nama_belakang = 'Pramudya';
echo $nama_depan .  "" . $nama_belakang;
echo "<hr>";

// perbandingan 
// <,>,<=,>=,==,!=
echo 1 < 5;
echo "<br>";
echo "<hr>";

// identitas / strict comparison
echo 10 === "10";

// increment / decrement
// penambahan / pengurangan 1
// ++,--
$x = 10;
++$x;
echo $x;



?>