<?php

include 'koneksi.php';

if (isset($_POST['simpan'])) {
	// $id = $_POST['id_produk'];
	$nama_produk = $_POST['nama_produk'];
	$gambar = $_POST['gambar'];
    $harga = $_POST['harga'];
	
    $sql = "INSERT INTO produk (nama_produk, gambar, harga) VALUES ('$nama_produk', '$gambar','$harga')";
    $query = mysqli_query($connect, $sql);
    if ($query) {
        header('Location: tables.php');
    }else{
        header('Location: simpandata.php?status=gagal');
    }
}
?>