<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Skincare</title>
</head>
<body>
    <h2>Tabel Skincare</h2>
    <a href="tambah.php">+ TAMBAH SKINCARE</a> <br/><br/>
    <table border="1">
        <tr>
            <th>Id Produk</th>
            <th>Nama Produk</th>
            <th>Id Kategori</th>
            <th>Aksi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $query = mysqli_query($koneksi, "select * from produk");
        while($data = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?php echo $data["idProduk"]; ?></td>
            <td><?php echo $data["namaProduk"]; ?></td>
            <td><?php echo $data["idKategori"]; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $data["idProduk"]; ?>">EDIT</a>
                <a href="hapus.php?id=<?php echo $data["idProduk"]; ?>">HAPUS</a>
            </td>
        </tr>
        <?php 
    }
    ?>
    </table>
</body>
</html>