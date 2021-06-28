<?php
include 'koneksi.php';
$idmen = $_GET['idmen'];
$result = mysqli_query($koneksi, "SELECT * FROM men WHERE idmen='$idmen'");
while($user_data = mysqli_fetch_array($result))
{
 $nama = $user_data['nama'];
 $harga = $user_data['harga'];
 $stok = $user_data['stok'];
 $size = $user_data['size'];
 $merk = $user_data['merk'];
 $warna = $user_data['warna'];

}
?>
<!doctype html>
<html lang="en">
 <head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="css/bootstrap.min.css" >
 <link rel="stylesheet" type="text/css" href="stylems.css">
 <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
 <title>ADMINISTRATOR</title>
 </head>

 <body>
  <!-- Navbar -->

 <section>
    <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
    <a class="navbar-brand fas fa-socks" href="#"> MagicShoes Store</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="form-inline my-2 my-lg-0 ml-auto">
            <input class="form-control mr-sm-2 search" type="search" placeholder="Search" aria-label="Search" name="cari" style="margin-left: 40em;margin-bottom:0.7em">
            <button class="btn btn-outline-light search2" style="margin-bottom: 0.6em" type="submit"><i class="fas fa-search"></i></button>
        </form>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link js-scroll-trigger text-white" href="index.php">DASHBOARD <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger text-white" href="men.php">MEN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger text-white" href="women.php">WOMEN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger text-white" href="login_dbmen.php">DBMEN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger text-white" href="login_dbwomen.php">DBWOMEN</a>
            </li>
        <div class="navbar-nav" >
          <a class="nav-item nav-link active" href="#"><h5><i class="fas fa-envelope-square" style="color: white"></i></h5></a>
          <a class="nav-item nav-link" href="#"><h5><i class="fas fa-bell-slash" style="color: white"></i></h5></a>
          <a class="nav-item nav-link" href="login.php"><h5><i class="fas fa-sign-out-alt" style="color: white"></i></h5></a>
        </div>
  </div>
</nav>
</section>
 <div class="col-md-10 p-5 pt-2">
 <h1></i> Ubah Data Sepatu Pria</h1><hr>
<form action="update_men.php" method="post">
 <div class="form-row">
 <div class="form-group col-md-4">
 <label >ID</label>
    <input type="text" name="idmen" class="form-control" id="idmen" value="<?php echo $idmen;?>">
 </div>
 </div>
 <div class="form-row">
 <div class="form-group col-md-8">
<label >NAMA</label>
    <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $nama;?>">
 </div>
 </div>
<div class="form-row">
 <div class="form-group col-md-6">
 <label >HARGA</label>
    <input type="text" name="harga" class="form-control" id="harga" value="<?php echo $harga;?>">
 </div>
 </div>
 <div class="form-row">
 <div class="form-group col-md-6">
 <label >STOK</label>
    <input type="text" name="stok" class="form-control" id="stok" value="<?php echo $stok;?>">
 </div>
 </div>
 <div class="form-row">
 <div class="form-group col-md-6">
 <label >SIZE</label>
    <input type="text" name="size" class="form-control" id="size" value="<?php echo $size;?>">
 </div>
 </div>
 <div class="form-row">
 <div class="form-group col-md-6">
 <label >MERK</label>
    <input type="text" name="merk" class="form-control" id="merk" value="<?php echo $merk;?>">
 </div>
 </div>
 <div class="form-row">
 <div class="form-group col-md-6">
 <label >WARNA</label>
    <input type="text" name="warna" class="form-control" id="warna" value="<?php echo $warna;?>">
 </div>
 </div>
 <button type="submit" class="btn btn-primary">SIMPAN</button>
</form>
 </div>
</div>

<!-- footer & copyright -->
<footer class="text-white" style="background-color: black">
 <div class="row">
 	<div class="col-md-4"><h3>Sosial Media</h3>
 		<p>Instagram : @MagicShoesStore</p>
 		<p>Twitter   : MagicShoesStore</p>
 		<p>Facebook  : MagicShoes.ofc</p>
 	</div>
 	<div class="col-md-4"><h3>TENTANG KAMI</h3>
 		<p>MagicShoesStore adalah tempat pejualan berbagai macam sepatu 
 		<p>disini terdapat macam macam jenis sepatu</p></div>

 	<div class="col-md-4"><h3>HUBUNGI KAMI</h3>
 		<p> telepon : 0778-2384732 </p>
 		<p>email : MagicShoes12@gmail.com</p>
 		</div>
 	</div>
 </footer>
 <div class="copyright text-center text-white font-weight-bold p-2" style="background-color: grey">
 <h3> DEVELOP BY:Bryant Axell Hang & Huznul Rachel Pratama</h3><i class="far fa-copyright"></i>
 </div>
</body>
</html>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

 </body>
</html>