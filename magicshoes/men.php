?>
<?php
session_start();
$user = $_SESSION['user'];
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap css-->
        <link rel="stylesheet" href="css/bootstrap.min.css" rel="sylesheet" media="screen">
        <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="stylems.css">
        <!-- Bootstrap javascript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>

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
    <h1><i class="fas fa-socks mr-2"></i> Sepatu Pria </h1><hr>
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th scope="col">NO</th>
          <th scope="col">ID</th>
          <th scope="col">Nama</th>
          <th scope="col">Harga</th>
          <th scope="col">Stok</th>
          <th scope="col">Size</th>
          <th scope="col">Merk</th>
          <th scope="col">Warna</th>
        </tr>
      </thead>
        </tbody>
        <?php
        include 'koneksi.php';
  $no = 1;
  $sql = mysqli_query($koneksi,"select * from men");
  while($data = mysqli_fetch_array($sql)){
    ?>
  <tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $data['idmen']; ?></td>
    <td><?php echo $data['nama']; ?></td>
    <td><?php echo $data['harga']; ?></td>
    <td><?php echo $data['stok']; ?></td>
    <td><?php echo $data['size']; ?></td>
    <td><?php echo $data['merk']; ?></td>
    <td><?php echo $data['warna']; ?></td>
    </td></tr>
      <?php
  }
  ?>
      </table>
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