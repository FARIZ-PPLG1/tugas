<?php 
    include 'koneksi.php';

    $idproduk = $_POST['FidProduk'];
    $namaproduk = $_POST['FnamaProduk'];
    $idkategori = $_POST['FidKategori'];

    mysqli_query($koneksi, "INSERT INTO produk VALUES('$idproduk', '$namaproduk', '$idkategori')");
    header("location:index.php");
?>