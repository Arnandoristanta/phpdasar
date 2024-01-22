<?php 
// pengulangan pda aray
// for / foreach
$angka = [3,2,1,1312,12,321,12,131122,9];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: red;
            text-align: center;
            line-height: 50px;

            margin: 3px;
            float: left;
        }
        .clear { clear:both;}
    </style>
</head>
<body>
    
<!-- dibuat menggunakan for -->
<?php for( $i = 0; $i < count($angka); $i++ ){ ?>
<div class="kotak"><?php echo $angka[$i]; ?> </div>
<?php } ?>
<!-- dibuat menggunakan foreach (ini pnting bgt)-->
<div class="clear"></div>
<?php foreach( $angka as $a ) { ?>
    <div class="kotak"><?php echo $a; ?> </div>
<?php } ?>
<!-- gaya penulisan templeting -->
<div class="clear"></div>

<?php foreach ( $angka as $a ) : ?>
    <div class="kotak"><?= $a; ?>
    </div>
<?php endforeach; ?>


</body>
</html>