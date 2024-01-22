<?php 
function salam($waktu = "datang", $nama = "Admin") {
    return "selamat $waktu, $nama";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan function</title>
</head>
<body>
    <h1><?= salam("pagi", "nando"); ?>
    </h1>
</body>
</html>