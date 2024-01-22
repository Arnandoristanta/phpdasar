<?php 
// aray multi dimensi
// ini adlh aray numeric, dmna index nya mulai dr 0(jdi bs aj ketuker dta ny)
$mahasiswa = [
    ["nando r", "181111010","Informatika", 
"arnandoristanta8787@gmail.com"] , 
["wiwik z", "181111011","PGSD", 
"wiwikz11@gmail.com"],
["1818213", "ristanta","Informatika", 
"arnandoristanta8787@gmail.com"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>
<body>
    <!-- cara 1 dengan foreach -->
    <h1>daftar mahasiswa</h1>
    <!-- <ul>
        <?php foreach ($mahasiswa as $mhs) :?>
            <li><?= $mhs; ?>
            </li>
        <?php endforeach; ?>
    </ul> -->

    <!-- cara 2, manual dengan index -->
    <!-- menampilkan semua data array(sesuai index) -->
    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NRP : <?= $mhs[1]; ?></li>
        <li>Jurusan : <?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>