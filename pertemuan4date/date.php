<?php 
// date 
// tampilkan tgl dg format tertntu
    // echo date("l,d-M-Y");

    // Time
    // UNIX Timestamp /EPOCH time
    // detik yang sudah berlalu sejak 1 januari 1970
//    echo time();
// fungsi menghitung berapa hari lagi hari apa
// echo date("l",time()-60*60*24*125);


// mktime
// membuat sndiri detik yg sdh brlalu
// mktime(0,0,0,0,0,0) ada 6
// jam,menit,detik,bulan,tanggal,tahun
// meramal kita lahir di hari apa
// echo date("l",mktime(0,0,0,3,20,2000));
// strtotime
echo strtotime("20 mar 2000");
?>
