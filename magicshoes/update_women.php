<?php
// include database connection file
include 'koneksi.php';
 $idwomen= $_POST['idwomen'];
 $nama=$_POST['nama'];
 $harga=$_POST['harga'];
 $stok=$_POST['stok'];
 $size=$_POST['size'];
 $merk=$_POST['merk'];
 $warna=$_POST['warna'];
 $result = mysqli_query($koneksi, "UPDATE women SET nama='$nama',harga='$harga',stok='$stok',size='$size',merk='$merk',warna='$warna' WHERE idwomen='$idwomen'");
 // Redirect to homepage to display updated user in list
 header("Location: dbwomen.php");
?>