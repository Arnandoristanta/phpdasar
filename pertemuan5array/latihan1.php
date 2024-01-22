<?php 
// array
// sebuah variable yg dpt menampung bnyk nilai
// elemen pada array boleh memliki tipe data yg beda
// pasangan antara key dan value
// key-nya adlh index, yg mulai dri 0

// u/ mmbuat aray ada cara lama
$hari = array("senin","selasa", "rabu");
// cara baru
$bulan = ["januari", "februari","maret"];
$arr1 = [123, "tulisan", false];
// menampilkan aray
// var_dump() / print_r()
// var_dump($hari) ;
// echo "<br>";
// print_r($bulan) ;
// echo "<br>";
// menampilkan 1 elemen pada aray
// echo$arr1[0];
// echo "<br>";
// echo $bulan[2];

// mnmbahkan elemen baru pda aray
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jum'at";
echo "<br>";
var_dump($hari);









; ?>
