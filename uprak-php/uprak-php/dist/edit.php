<?php
include 'koneksi.php';
if (isset($_POST['simpan'])) {
    $nama_produk = $_POST['nama_produk'];
    $gambar = $_POST['gambar'];
    $harga = $_POST['harga'];

    $sql = "UPDATE produk SET nama_produk='$nama_produk', gambar='$gambar', harga='$harga', WHERE nama_produk='$nama_produk'";
    $query =mysqli_query($connect,$sql);
    if ($query) {
        header('Location: tables.php');
    }else{
        header('location: edit.php?status=gagal');
    }
}
?>