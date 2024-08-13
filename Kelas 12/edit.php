<!DOCTYPE html>
<html>
<head>
	<title>EDIT</title>
</head>
<body>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA SKINCARE</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$query = mysqli_query($koneksi,"select * from produk where idProduk='$id'");
	$data = mysqli_fetch_array($query);
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Id Produk</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $data['idProduk']; ?>">
						<input type="text" name="idProduk" value="<?php echo $data['idProduk']; ?>">
					</td>
				</tr>
				<tr>
					<td>Nama Produk</td>
					<td><input type="text" name="namaProduk" value="<?php echo $data['namaProduk']; ?>"></td>
				</tr>
				<tr>
					<td>Id Kategori</td>
					<td><input type="text" name="idKategori" value="<?php echo $data['idKategori']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="simpan"></td>
				</tr>		
			</table>
		</form>
 
</body>
</html>