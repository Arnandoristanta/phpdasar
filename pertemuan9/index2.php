<?php 
// koneksi ke db
$conn = mysqli_connect("localhost","root","","phpdasar");
// ambil data dr tabel mahasiswa / quert data mhs
$result = mysqli_query($conn,"SELECT * FROM mahasiswa");

// ambil data (fetch) mhs dari object result
// mysqli_fetch_row() = mengembalikan aray numeric
// mysqli_fetch_assoc() = mengembalikan aray asosiatif
// mysqli_fetch_array() = mengembalikan kedua nya
// mysqli_fetch_object() = 

// while ($mhs = mysqli_fetch_assoc($result)) {
// var_dump($mhs);
// }
// Jika ingin memunculkan pesan apabila ad eror
// if ( !$result) {
//     echo mysqli_error($conn);
// }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>

    <?php $i = 1; ?>
    
    <?php while ( $row = mysqli_fetch_assoc($result)) : ?>
    
    <tr>
        <td><?= $i  ?></td>
        <td>
            <a href="">ubah</a> |
            <a href="">hapus</a>
        </td>
        <td><img src="img/<?= $row ["gambar"]; ?>" width="50"></td>
        <td><?= $row["nrp"]; ?></td>
        <td><?= $row["nama"];  ?></td>
        <td><?= $row["email"]  ?></td>
        <td><?= $row["jurusan"];  ?></td>
    </tr>
    <?php $i++; ?>
    <?php endwhile; ?>
        
    </table>



</body>
</html>