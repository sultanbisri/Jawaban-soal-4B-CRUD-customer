<?php

require 'functions.php';

$orang = query("SELECT * FROM customer");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Customer</title>
</head>

<body>
    <h3>Daftar Customer</h3>

    <a href="tambah.php">Tambah Data Customer</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>

        <?php $no = 1;
        foreach ($orang as $customer) : ?>

            <tr>
                <td><?= $no++; ?></td>
                <td><?= $customer['name']; ?></td>
                <td><?= $customer['email']; ?></td>
                <td><?= $customer['address']; ?></td>
                <td> <a href="detail.php?id=<?= $customer['id']; ?> ">lihat detail</a> </td>
            </tr>

        <?php endforeach; ?>
    </table>
</body>

</html>