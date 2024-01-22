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
$udmekarsari = [
    [
        "namaDagang" => "Cobek Kayu + Ulekan",
        "harga" => ["15000","17000","18000"],
        "bahan" => "Kayu Mahoni",
        "dimensi" => ["Diameter 16 cm : 4 cm x 16 cm",
                      "Diameter 17 cm : 4 cm X 17 cm",
                      "Diameter 18 cm : 4 cm X 18 cm"],
        "ukuran"=> ["Dim 16 cm","Dim 17 cm","Dim 18 cm"],
        "gambar" => "cobek16cm.jpg"
    ],
    [
        "namaDagang" => "Kotak obat kayu P3K",
        "harga" => "89.240",
        "bahan" => "Kayu",
        "dimensi" => "P=30cm L=11cm T=36,5",
        "gambar" => "kotakobat.jpg"
    ]
    ];
    // pengambilan nilai ukuran
// echo $mahasiswa[1]["tugas"][1];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Dagangan</title>
</head>
<body>
    <h1>Daftar Dagangan</h1>

    <?php foreach( $udmekarsari as $brng ): ?>
        <ul>
            <li>
                <img src="dagang/<?= $brng["gambar"]; ?>">
            </li>
            <li>Nama Dagangan : <?= $brng["namaDagang"]; ?></li>
            <li>Harga : <?= $udmekarsari[0]["hargacobek"][0]; ?></li>
            <li>Harga : <?= $brng["harga"]; ?></li>
            <li>Bahan : <?= $brng["bahan"]; ?></li>
            <li>Dimensi : <?= $brng["dimensi"]; ?></li>
            <li>Ukuran : <?= $brng["ukuran"]; ?></li>
        </ul>
    <?php endforeach; ?>
    
</body>
</html>

<!-- tugas e bikin kasus pengelolaan data dagangan kerjinan kayu alat dapur -->