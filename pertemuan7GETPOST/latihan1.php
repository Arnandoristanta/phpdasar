<!-- <?php 
// variable scope / lingkup variable
// x 10 adlh variable lokal untuk halaman ini
// $x = 10;

// function tampilX() {
//     // variable x 20 adlh vriable lokal untuk function ini sj
//     $x = 20;
//     echo $x;
// }
// function tampilX() {
//     global $x;
//     echo $x;
// }

// tampilX();
?> -->

<?php 
// SUPERGLOBAL VARIABLE MILIK PHP
// MERUPAKAN ARAY ASOSIATIV4
// $_GET
$udmekarsari = [
    [
        "namaDagang" => "Cobek Kayu + Ulekan",
        "harga" => "15.000",
        "bahan" => "Kayu Mahoni",
        "dimensi" => "Diameter 16 cm : 4 cm x 16 cm",
        "gambar" => "cobek16cm.jpg"
    ],
    [
        "namaDagang" => "Kotak obat kayu P3K",
        "harga" => "89.240",
        "bahan" => "Kayu",
        "dimensi" => "P=30cm L=11cm T=36cm",
        "gambar" => "kotakobat.jpg"
    ]
    ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Dagangan</h1>    
    <ul>
  
    
    <?php foreach( $udmekarsari as $brng ): ?>
        <li>
            <!-- metode reques GET 
            adalah metode pengiriman data mllui URL
            dan data trsbut bisa d tngkap oleh variable superglobal $_GET-->
            <a href="latihan2.php?namaDagang=<?= $brng["namaDagang"];
            ?>&harga=<?= $brng["harga"]; 
            ?>&bahan=<?= $brng["bahan"]; 
            ?>&dimensi=<?= $brng["dimensi"]; 
            ?>&gambar=<?= $brng["gambar"]; 
            ?>"><?= $brng["namaDagang"]; ?></a>
        </li>
    <?php endforeach; ?>
    </ul>    


</body>
</html>