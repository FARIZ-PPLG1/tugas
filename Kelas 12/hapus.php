<?php
    include 'koneksi.php';


    $hapus = $_GET['id'];

    $query = mysqli_query($koneksi, "delete from produk where idProduk='$hapus'");
    header('location:index.php');
    
?>