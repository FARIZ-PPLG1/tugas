<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Table Tambah Skincare</title>
  </head>
  <body>
  <a href="index.php">Lihat Semua Data</a><br>
    <h3>MASUKAN SKINCARE</h3>
    <form action="insert.php" method="post">
        <table>
            <tr>
                <td>Id Produk</td>
                <td><input type="text" name="FidProduk"></td>
            </tr>
            <tr>
                <td>Nama Produk</td>
                <td><input type="text" name="FnamaProduk"></td>
            </tr>
            <tr>
                <td>Id Kategori</td>
                <td><input type="text" name="FidKategori"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="simpan"></td>
            </tr>
        </table>
    </form>
  </body>
</html>