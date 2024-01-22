<?php 
// biar tidak ada orng yg usil coba lngsung ke page 2 / latihan2
// cek apakah tdk ada data di $_GET
if ( !isset($_GET["namaDagang"]) || 
     !isset($_GET["harga"]) ||
     !isset($_GET["bahan"]) ||
     !isset($_GET["dimensi"]) ||
     !isset($_GET["gambar"])
     ) {
    // redirect 
    header("Location: latihan1.php");
    exit;
} 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Dagangan</title>
</head>
<body>
    
    <ul>
        <!-- lngsung cetak data dri superglobal -->
        <li><img src="dagang/<?= $_GET["gambar"]; ?>"></li>
        <li><?= $_GET["namaDagang"]; ?></li>
        <li><?= $_GET["harga"]; ?></li>
        <li><?= $_GET["bahan"]; ?></li>
        <li><?= $_GET["dimensi"]; ?></li>
        <li></li>
    </ul>

    <a href="latihan1.php">Kembali ke daftar barang</a>

</body>
</html>