<?php
require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit();
}

// ambil data dari url
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$orang = query("SELECT * FROM customer WHERE id = '$id'");

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['btn_ubah'])) {
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "Data gagal diubah!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Customer</title>
</head>

<body>
    <h3>Form Ubah Data Customer</h3>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name='id' value="<?= $orang['id']; ?>">
        <ul>
            <li>
                <label for="nama">
                    Nama :
                    <input type="text" name="name" id="nama" autocomplete="off" autofocus required value="<?= $orang['name']; ?>">
                </label>
            </li>

            <li>
                <label for="email">
                    Email :
                    <input type="text" name="email" id="email" autocomplete="off" required value="<?= $orang['email']; ?>">
                </label>
            </li>

            <li>
                <label for="jurusan">
                    Alamat :
                </label>
                <textarea name="address" id="" cols="20" rows="10"><?= $orang['address']; ?></textarea>
            </li>

            <li>
                <button type="submit" name="btn_ubah">Ubah Data</button>
            </li>

        </ul>
    </form>

    <script src="js/script.js"></script>
</body>

</html>