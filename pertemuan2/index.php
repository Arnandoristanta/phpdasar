<?php 
// Pertemuan 2 - php dasar
// sintaks PHP

// standar Output
// echo , print
// print_r
// var_dump


// penulisan sintaks PHP
// 1. php di dalam HTML
// 2. HTML di dalam PHP


// variable dan tipe data
// variable
// tidak boleh diawali dg angka tpi boleh mengandung angka
// $nama = "Arnando R";

// echo "Halo nama saaya $nama";


// operator 
// aritmatika
// + - / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// penggabung string / concatenation / concat
// .

// $nama_depan = "arnando R";
// $nama_belakang = "Ristanta";

// echo $nama_depan . " " . $nama_belakang;

// Assignment
// =, +=, -=, *=, /=, %=, .=

// $x = 1;
// $x -= 5;
// echo $x;

// $nama = "Arnando";
// $nama .= " ";
// $nama .= "Ristanta";
// echo $nama;

// perbandingan 
// <, >, <=, >=, ==, !=

// var_dump(1 == 4);

// identitas 
// ===, !==
// di bwah untuk mengecek bener2 apakah tipe data sama
// var_dump(1 === "1");

// Logika
// &&, ||, 
$x = 10;
// apakah 10 kurang dr 20 dan apakah 10 bilangan genap
var_dump($x < 20 && $x % 2 == 0)

?>
