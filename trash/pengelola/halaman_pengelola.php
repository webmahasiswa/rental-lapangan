<?php
  session_start();

  // cek apakah yang mengakses halaman ini sudah login
  if($_SESSION['level']==""){
    header("location:index_user.php?pesan=gagal");
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  
	<meta charset="utf-8">
	<title>homepage</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../js/bootstrap.min.js">
</head>
<body>
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
		<div class="container">
  		<a class="navbar-brand" href="halaman_pengelola.php"><h3 style="background: -webkit-linear-gradient(white, grey); -webkit-text-fill-color: transparent; -webkit-background-clip: text;">Rental Lapangan</h3></a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    		<div class="navbar-nav">
      			<a class="nav-item nav-link active" href="halaman_pengelola.php">Home <span class="sr-only">(current)</span></a>
      			<a class="nav-item nav-link enable" href="upload_page.php" tabindex="-1" aria-enable="true">upload</a>
            <a class="nav-item nav-link enable" href="#" tabindex="-1" aria-enable="true">Kontak Pengelola</a>
    		</div>
        <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="../logout.php">Log Out</a>
        </div>
  		</div>
  		</div>
	</nav>
<div class="jumbotron">
  <div class="container " style="margin-top: 4%; margin-bottom: 15%;">
    <table class="table table-bordered table-striped">
      <thead>
        <tr style="text-align: center;">
          <th>No</th>
          <th>Lapangan</th>
          <th>Nama lapangan</th>
          <th>Lokasi</th>
      </tr>
      </thead>
      <tbody style="text-align: center;">
        <?php
        $koneksi = mysqli_connect("localhost","root","","dblapangan");

        // Check connection
        if (mysqli_connect_errno()){
          echo "Koneksi database gagal : " . mysqli_connect_error();
        }
        $query = "SELECT * FROM tb_lapangan";
        $sql_user = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
        while ($data = mysqli_fetch_assoc($sql_user)) { ?>
          <tr>
            <td><?=$data['id_lapangan']?></td>
            <td><?php echo "<img src='../gambar/$data[file]' width='200' height='120' />";?></td>
            <td><?=$data['nama_lapangan']?></td>
            
            <td><?=$data['alamat']?></td>
            
          </tr>
        <?php
        } ?>

      
      </tbody>      
    </table>
  </div>
<div class="jumbotron bg-primary">
  <h6 align="center"><a href="halaman_pengelola.php" style="color: white;">Kembali ke atas</a></h6>

</div>
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> Universitas Trunojoyo</a>
  </div>
  <!-- Copyright -->

</footer>
</body>
</html>