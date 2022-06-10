<?php
// array associative
//array yang indexnya berupa string yang berassosiasi dengan nilainya
$mahasiswa = [
    [ 
        "Nama" => "Derral Pramudya", 
        "NPM" => "213040007", 
        "E-Mail" => "derralpramudia8@gmail.com",
        "Jurusan" => "Teknik Informatika"
    ],  
    [
        "Nama" => "Abah Ano", 
        "NPM" => "223040044", 
        "E-Mail" =>"abahano22@gmail.com", 
        "Jurusan" => "Teknik Informatika"
    ],
    [
        "Nama" =>"Faqih", 
        "NPM" =>"223040100", 
        "E-Mail" =>"faqih@gmail.com", 
        "Jurusan" =>"Teknik Informatika"],
    [
        "Nama" =>"Koji", 
        "NPM" =>"223040101",
        "E-Mail" =>"koji101@gmail.com",
        "Jurusan" =>"Teknik Informatika",
    ]
        
];

// var_dump($mahasiswa[2]["E-Mail"]) 

?>
<?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama : <?php echo $mhs["Nama"] ?></li>
        <li>NPM : <?php echo $mhs["NPM"] ?></li>
        <li>Email : <?php echo $mhs["E-Mail"] ?></li>
        <li>Jurusan : <?php echo $mhs["Jurusan"] ?></li>
    </ul>
<?php endforeach; ?>