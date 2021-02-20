<?php
require 'functions.php';

// ambil data dari url
$id = $_GET['id'];

$orang = query("SELECT * FROM customer WHERE id = $id");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Customer</title>
</head>

<body>

    <h3>Detail Customer</h3>

    <ul>
        <li>Nama : <?= $orang['name']; ?> </li>
        <li>Email : <?= $orang['email']; ?></li>
        <li>Alamat : <?= $orang['address']; ?></li>
        <li>
            <a href="ubah.php?id=<?= $orang['id']; ?>">ubah</a> |
            <a href="hapus.php?id=<?= $orang['id']; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ?'); ">hapus</a>
        </li>
        <li><a href="index.php">Kembali Ke Daftar Customer</a></li>
    </ul>

</body>

</html>
