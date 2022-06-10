<?php
// function 
// function dirancang untuk menyelesaikan masalah tertentu
// pemanggil nilai untuk dikembalikan ke program
//manual
$a = 9;
$b = 4;
$luas_a = $a * $a * $a;
$luas_b = $b * $b * $b;

$total = $luas_a + $luas_b;

echo "Total Luas dari kubus A dengan sisi $a dan Kubus B dengan sisi $b adalah $total";
echo "<hr>";

// with function


function HitungluasDuaKubus($kubus1, $kubus2)
{
    $total = ($kubus1 * $kubus1 * $kubus1) + ($kubus2 * $kubus2 * $kubus2);
    return "Total Luas dari kubus A dengan sisi $kubus1 dan Kubus B dengan sisi $kubus2 adalah $total";
}


echo HitungluasDuaKubus(2, 3);
echo "<br>";