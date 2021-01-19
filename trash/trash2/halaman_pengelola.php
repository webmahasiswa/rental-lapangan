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
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
</head>
<body>
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
		<div class="container">
  		<a class="navbar-brand" href="index.php"><h3 style="background: -webkit-linear-gradient(white, grey); -webkit-text-fill-color: transparent; -webkit-background-clip: text;">Rental Lapangan</h3></a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    		<div class="navbar-nav">
      			<a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
      			<a class="nav-item nav-link enable" href="booking/daftar_penyewa.php" tabindex="-1" aria-enable="true">Info Penyewa</a>
            <a class="nav-item nav-link enable" href="#" tabindex="-1" aria-enable="true">Kontak Pengelola</a>
    		</div>
        <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="logout.php">Log Out</a>
        </div>
  		</div>
  		</div>
	</nav>
<div class="jumbotron">
	<div class="container text-center" style="margin-top: 10%; margin-bottom: 15%;">
    	<h1 class="display-4">Situs sewa Lapangan UTM</h1>
    	<p class="lead">selamat datang pengelola Lapangan di Universitas Trunojoyo Madura</p>

  	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col text-center">
			<h1>tentang situs</h1>
			<p>kami menyediakan pelayanan booking online lapangan yang ada di UTM. Sekarang anda tidak perlu pergi ke lokasi langsung untuk melakukan booking, cukup buka website ini dan lakukan booking online.</p>
      <p>Booking online ini sementara hanya untuk mahasiswa aktif di utm, karena nanti anda disuruh melengkapi bukti sewa dengan nomer induk mahasiswa</p>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="card" style="width: 20rem; object-position: center;">
  			<div class="card-body">
    			<h5 class="card-title">Lapangan Olahraga Fakultas Teknik</h5>
    			<p class="card-text">Lapangan ini sementara hanya bisa digunakan untuk futsal. Karena fasilitas yang terseia hanya dua buah gawang.</p>
  			</div>
		</div>
	</div>
</div>
<div class="jumbotron bg-primary">
  <h6 align="center"><a href="index.php" style="color: white;">Kembali ke atas</a></h6>

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