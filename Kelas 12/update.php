<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$idproduk = $_POST['idProduk'];
$namaproduk = $_POST['namaProduk'];
$idkategori = $_POST['idKategori'];
 
// update data ke database
mysqli_query($koneksi,"UPDATE `produk` SET `idProduk`='$idproduk',`namaProduk`='$namaproduk',`idKategori`='$idkategori' WHERE `idProduk` = $idproduk");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>