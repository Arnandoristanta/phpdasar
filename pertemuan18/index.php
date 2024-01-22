<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit();
} 
require 'functions.php';
// pagination
// konfigurasi
$jumlahDataPerHalaman = 2;
$jumlahData = count(query('SELECT * FROM mahasiswa'));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanNow = ( isset($_GET['halaman']) ) ? $_GET['halaman'] : 1;
$awalData = ( $jumlahDataPerHalaman * $halamanNow) - $jumlahDataPerHalaman;

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData,$jumlahDataPerHalaman");

// tombol cari ditekan
if( isset($_GET['cari']) ) {
	$keyword = $_GET['keyword'];
	$sql = "SELECT * FROM mahasiswa
				WHERE
			 nrp LIKE '%$keyword%' OR
			 nama LIKE '%$keyword%' OR
			 email LIKE '%$keyword%' OR
			 jurusan LIKE '%$keyword%'
			";
	$mahasiswa = query($sql);
} else {
	$mahasiswa = query("select * from mahasiswa");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
    <a href="logout.php">Logout</a>
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah data mahasiswa</a>
    <br><br>

    <form action="" method="post">

        <input type="text" name="keyword" size="30" autofocus
        placeholder="masukkan keyword pencarian.." autocomplete="off">
        <button type="submit" name="cari">Cari!</button>
    </form>
<br><br>

<!-- navigasi -->
<?php if( $halamanNow > 1 ) : ?>
<a href="?halaman=<?= $halamanNow - 1; ?>">&laquo;</a>
<?php endif; ?>

<?php for($i =1; $i <= $jumlahHalaman; $i++) : ?>
    <?php if($i == $halamanNow ) : ?>

    <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
    <?php else : ?>
        <a href="?halaman=<?= $i; ?>" ><?= $i; ?></a>
    <?php endif; ?>
<?php endfor; ?>

<?php if( $halamanNow < $jumlahHalaman ) : ?>
<a href="?halaman=<?= $halamanNow + 1; ?>">&raquo;</a>
<?php endif; ?>

    <br>
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
    <?php foreach( $mahasiswa as $row ) : ?>
    <tr>
        <td><?= $i;  ?></td>
        <td>
            <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
            <a href="hapus.php?id=<?= $row ["id"]; ?>" onclick=
            "return confirm('yakin?');">hapus</a></td>
        <td><img src="img/<?= $row ["gambar"]; ?>" width="40"></td>
        <td><?= $row["nrp"]; ?></td>
        <td><?= $row["nama"];  ?></td>
        <td><?= $row["email"]  ?></td>
        <td><?= $row["jurusan"];  ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
        
    </table>

</body>
</html>