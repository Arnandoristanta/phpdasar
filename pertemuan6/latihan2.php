<?php 
// $mahasiswa = [
//     ["Nando", "181111010","Teknik Informatika",
//  "Arnando8787@gmail.com"],
//  ["Wiwik", "181111011","PGSD",
//  "Wiwik11@gmail.com"]
// ];

// array asosiative
// definisi ny sama sprti aray numeric, kcuali
// key nya adalah string yg kita buat sndiri
$mahasiswa = [
    [
        "nrp" => "181111010",
        "nama" => "Arnando R",
        "jurusan" => "Teknik Informatika",
        "Email" => "Arnando8787@gmail.com",
        "gambar" => "nando.jpg"
    ],
    [
        "nama" => "Wiwik z",
        "nrp" => "181111011",
        "jurusan" => "PGSD",
        "Email" => "Wiwik11@gmail.com",
        "tugas"=> [90,75,80],
        "gambar" => "wiwik.jpg"
    ]
    ];
    // pengambilan nilai tugas
// echo $mahasiswa[1]["tugas"][1];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ): ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["Email"]; ?></li>
        </ul>
    <?php endforeach; ?>
    
</body>
</html>

<!-- tugas e bikin kasus pengelolaan data dagangan kerjinan kayu alat dapur -->