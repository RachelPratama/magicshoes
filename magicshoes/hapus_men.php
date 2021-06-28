<?php 
 // include database connection file 
 include 'koneksi.php';  
 $idbarang = $_GET['idmen']; 
 $result = mysqli_query($koneksi, "DELETE FROM men WHERE idmen='$idmen'"); header("Location:dbmen.php");  
 ?> 
