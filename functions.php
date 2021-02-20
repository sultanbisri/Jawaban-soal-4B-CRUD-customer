<?php

function koneksi()
{
    return mysqli_connect('localhost', 'root', '', 'dealer_mobil');
}

function query($query)
{
    $conn = koneksi();

    $result = mysqli_query($conn, $query);

    // kondisi jika data ingin melihat berdasarkan id
    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    $nama    = htmlspecialchars($data['name']);
    $email   = htmlspecialchars($data['email']);
    $alamat = htmlspecialchars($data['address']);
   
    $query = "INSERT INTO
                customer
               VALUES
               (null, '$nama','$email', '$alamat');
            ";

    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();

    mysqli_query($conn, "DELETE FROM customer WHERE id = $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id       = $data['id'];
    $nama    = htmlspecialchars($data['name']);
    $email   = htmlspecialchars($data['email']);
    $alamat = htmlspecialchars($data['address']);

    $query = " UPDATE customer SET
               name = '$nama',
               email = '$email',
               address = '$alamat'
               
               WHERE id = $id";

    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}