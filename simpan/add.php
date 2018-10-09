<?php 
//PANGGIL FAIL SAMBUNG KE PANGKALAN DATA
include_once("config.php");

if(isset($_POST['Submit'])){
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$harga=$_POST['harga'];

	//tambah rekod ke pangkalan data
	$result = mysqli_query($mysqli, "INSERT INTO produk (id,nama,harga)"."VALUES('$id','$nama','$harga')");

	echo "<script>alert('tambah maklumat berjaya'); "."window.location='index.php'</script>";

} else {
	?>
<html>
<head>
	<title>TAMBAH REKOD</title>
</head>
<body>
	<center> <h2>TAMBAH REKOD BARANGAN DAN HARGA</h2>
	<fieldset>
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
		<tr>
			<td>ID</td>
			<td><input type="text" name="id"></td>
		</tr>
		<tr>
			<td>Nama Produk</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td><input type="text" name="harga"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="Submit" value="Add"></td>
		</tr>
		</table>
	</form>

<BR><a href="index.php">Kembali ke Laman Utama</a>
	</fieldset>
	</center>
<?php
}
 ?>
 </body>
</html>