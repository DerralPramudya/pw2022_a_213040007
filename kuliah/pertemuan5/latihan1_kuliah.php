<?php
// ARRAY
// array adalah variable yang dapat menampung lebih dari satu nilai sekaligus

$hari1 = "Senin";
$hari2 = "Selasa";

$bulan1 = "Januari";
$bulan2 = "Februari";

// membuat array
$hari = ["Senin" , "Selasa" , "Rabu" , "Kamis" , "Jumat"]; //cara baru
$bulan = array("Januari" , "Februari" , "Maret" , "April"); //cara lama
$myArray = [100 , "Derral" ,true];

//mencetak aray
//mencetak satu elemen / nilai menggunakan index mulai dari nol
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<hr>";

//mencetak semua elemen pada array
//var_dump() atau print_r()
//khusus untuk debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<hr>";

//mencetak menggunakan looping
//for
for($i = 0; $i < count($hari); $i++) {
    echo $hari[$i];
    echo "<br>";
    
}
echo "<hr>";

//foreach
foreach($bulan as $bln) {
    echo $bln;
    echo "<br>";
}

echo "<hr>";

foreach ($hari as $a => $b) {
    echo "Key : $a, Value: $b";
    echo "<br>";
}
echo "<hr>";

//memanipulasi isi array
//menambah elemen baru diakhir array
$hari[] = "Sabtu";
$hari[] = "Minggu";
var_dump($hari);



?>