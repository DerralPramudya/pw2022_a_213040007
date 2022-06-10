<?php
// Studi Kasus

$mahasiswa = [
    ["Derral Pramudya", "213040007", "derralpramudia8@gmail.com",
    "Teknik Informatika"],
    ["Abah", "223040044", "abahano22@gmail.com", "Teknik Informatika"],
    ["Faqih", "223040100", "faqih@gmail.com", "Teknik Informatika"],
    ["Koji", "223040101","koji101@gmail.com","Teknik Informatika"]
];
foreach ($mahasiswa as $mhs) { ?>
<ul>
    <li>Nama : <?php echo $mhs[0] ?></li>
    <li>NPM : <?php echo $mhs[1] ?></li>
    <li>Email : <?php echo $mhs[2] ?></li>
    <li>Jurusan : <?php echo $mhs[3] ?></li>
</ul>
<?php }
echo "<hr>";


?>


?>

<?php

?>
