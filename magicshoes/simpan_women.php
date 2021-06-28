<?php
include 'koneksi.php';

$idwomen = $_POST['idwomen'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$size = $_POST['size'];
$merk = $_POST['merk'];
$warna = $_POST['warna'];
$input = mysqli_query($koneksi,"INSERT INTO women VALUES('$idwomen','$nama','$harga','$stok','$size','$merk','$warna')") or die(mysql_error($koneksi));
 if($input){
echo "Data Berhasil Disimpan"; 
header("location:dbwomen.php");
}else{
echo "Gagal Disimpan";
}
?>
