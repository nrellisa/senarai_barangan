<?php 
//PANGGIL FAIL SAMBUNG KE PANGKALAN DATA
include("config.php");
//DAPATKAN ID DARI URL
$id=$_GET['id'];

//HAPUSKAN REKOD DARI JADUAL
$result = mysqli_query($mysqli, "DELETE FROM produk WHERE id=$id");
//PAPARKAN MAKLUMAT
echo "<script>alert('Hapus maklumat berjaya');"."window.location='test.php'</script>";
 ?>