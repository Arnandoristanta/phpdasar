<!-- <?php
// pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array

// contoh for
// for( $i = 0; $i < 5; $i++ ) {
//     echo "hello world! <br>";
// }

// contoh while
// $i = 10;
// while( $i < 5 ) {
//     echo "helo nando<br>";
//    $i++;
// }

// contoh do while
// $i = 10;
// do {
// echo "helo world <br>" ;
// $i++;
// } while( $i < 5 );



?> -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    
    <table border="1" cellpadding="10" cellspacing="0">
       <?php for ( $i = 1; $i <= 5; $i++) { ?>
            <tr>
                <?php for( $j = 1; $j <= 5; $j++) { ?>
                    <td><?php echo "$i, $j"; ?></td>
                    <?php } ?>
                </tr>
            <?php } ?>

    </table>

</body>
</html>