<?php 
 // include database connection file 
 include 'koneksi.php';  
 $idbarang = $_GET['idwomen']; 
 $result = mysqli_query($koneksi, "DELETE FROM women WHERE idwomen='$idwomen'"); header("Location:dbwomen.php");  
 ?> 
