<?php
include 'koneksi.php';

$idmen = $_POST['idmen'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$size = $_POST['size'];
$merk = $_POST['merk'];
$warna = $_POST['warna'];
$input = mysqli_query($koneksi,"INSERT INTO men VALUES('$idmen','$nama','$harga','$stok','$size','$merk','$warna')") or die(mysql_error($koneksi));
 if($input){
echo "Data Berhasil Disimpan"; 
header("location:dbmen.php");
}else{
echo "Gagal Disimpan";
}
?>
