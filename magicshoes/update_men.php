<?php
// include database connection file
include 'koneksi.php';
 $idmen= $_POST['idmen'];
 $nama=$_POST['nama'];
 $harga=$_POST['harga'];
 $stok=$_POST['stok'];
 $size=$_POST['size'];
 $merk=$_POST['merk'];
 $warna=$_POST['warna'];
 $result = mysqli_query($koneksi, "UPDATE men SET nama='$nama',harga='$harga',stok='$stok',size='$size',merk='$merk',warna='$warna' WHERE idmen='$idmen'");
 // Redirect to homepage to display updated user in list
 header("Location: dbmen.php");
?>