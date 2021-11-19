<?php 
    include "koneksi.php";

    $id_pelanggan = $_GET['id_pelanggan'];
    $sql = "select * from pelanggan where id_pelanggan='$id_pelanggan'";
    $query = mysqli_query($koneksi, $sql);
    $pelanggan= mysqli_fetch_array($query);
    $sql = "delete from pelanggan where id_pelanggan = '$id_pelanggan'";
    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        echo "<script>alert('Berhasil');location.href='home_pelanggan.php';</script>";
    }
    else {
        echo "<script>alert('Gagal');location.href='profil.php';</script>";
    }

?>