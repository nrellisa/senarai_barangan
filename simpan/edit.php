<?php 

include_once("config.php");

if(isset($_POST['update'])){
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$harga=$_POST['harga'];



	$result = mysqli_query($mysqli, "UPDATE produk SET nama='$nama', harga='$harga' WHERE id='$id'");

	echo "<script>alert('Kemasikini maklumat berjaya');"."window.location='test.php'</script>";
}
 ?>
 <?php 

 //DAPATKAN ID DARI URL
 $id=$_GET['id'];


 $result=mysqli_query($sqli, "SLECT *FROM produk WHERE id=$id");

 while($res = mysqli_fetch_array($result)){
	$nama = $res['nama'];
	$harga = $res['harga'];
}
  ?>

  <html>
  <head>
  	<title>KEMASKINI MAKLUMAT</title>
  </head>
  <body>
  	<center>
  		<h2>KEMASKINI MAKLUMAT BARANG DAN HARGA</h2>
  	<fieldset>
  		<form name="form1" method="post" action="edit.php">
  			<table border="0">
  				<tr>
  					<td>Nama Produk</td>
  					<td><input type="text" name="nama" value="<?php echo $nama;?>"></td>
  				</tr>
  				<tr>
  					<td>harga</td>
  					<td><input type="text" name="harga" value="<?php echo $harga;?>"></td>
  				</tr>
  				<tr>
  					<td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
  					<td><input type="submit" name="update" value="Update"></td>
  				</tr>
  			</table>
  		</form>
  		<a href="test.php">HOME</a>
  	</center>
  	</fieldset>
  </body>
  </html>