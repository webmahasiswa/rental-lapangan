<?php
require 'function.php';
$data = query("SELECT * FROM datadiri")


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>homepage</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
  <link rel="stylesheet" type="text/css" href="style_table.css">
</head>
<body>
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
		<div class="container ">
  		<a class="navbar-brand" href="#">Navbar</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    		<div class="navbar-nav">
      			<a class="nav-item nav-link active" href="homepage.php">Home <span class="sr-only">(current)</span></a>
      			<a class="nav-item nav-link" href="daftar_booking.php">Daftar Booking</a>
      			<a class="nav-item nav-link" href="form1.php">Form Penyewaan</a>
      			<a class="nav-item nav-link enable" href="pengelola.php" tabindex="-1" aria-enable="true">Kontak Pengelola</a>
    		</div>
  		</div>
  		</div>
	</nav>
<div class="jumbotron jumbotron-fluid">
	<div class="container text-center">
    	<h1>Daftar Penyewa Lapangan</h1>
      <table class="data-table">
        <caption>Daftar Penyewa Lapangan</caption>
        <thead>
          <tr>
            <th>NO.</th>
            <th>NIM</th>
            <th>NAMA</th>
            <th>JURUSAN</th>
            <th>EMAIL</th>
        </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($data as $row ):?>
          <tr bgcolor="white">
            <td><?= $i; ?></td>
            <td><?=  $row["nim"]; ?></td>
            <td><?=  $row["nama"]; ?></td>
            <td><?=  $row["email"]; ?></td>
            <td><?=  $row["jurusan"]; ?></td>
    
          </tr>
          <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>
  	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col text-center">
			<h1>tentang situs</h1>
			<p>kami menyediakan pelayanan booking online lapangan yang ada di UTM. Sekarang anda tidak perlu pergi ke lokasi langsung untuk melakukan booking, cukup buka website ini dan lakukan booking online.</p>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="card" style="width: 20rem; object-position: center;">
  			<img src="img/indonesia.jpg" class="card-img-top" alt="img/indonesia.jpg">
  			<div class="card-body">
    			<h5 class="card-title">Lapangan Olahraga Fakultas Teknik</h5>
    			<p class="card-text">Lapangan ini sementara hanya bisa digunakan untuk futsal. Karena fasilitas yang terseia hanya dua buah gawang.</p>
    			<a href="#" class="btn btn-primary">Book Now !</a>
  			</div>
		</div>
		<div class="card" style="width: 20rem; object-position: center;">
  			<img src="img/indonesia.jpg" class="card-img-top" alt="img/indonesia.jpg">
  			<div class="card-body">
    			<h5 class="card-title">Lapangan Olahraga Fakultas Teknik</h5>
    			<p class="card-text">Lapangan ini sementara hanya bisa digunakan untuk futsal. Karena fasilitas yang terseia hanya dua buah gawang.</p>
    			<a href="#" class="btn btn-primary">Book Now !</a>
  			</div>
		</div>
		<div class="card" style="width: 20rem; object-position: center;">
  			<img src="img/indonesia.jpg" class="card-img-top" alt="img/indonesia.jpg">
  			<div class="card-body">
    			<h5 class="card-title">Lapangan Olahraga Fakultas Teknik</h5>
    			<p class="card-text">Lapangan ini sementara hanya bisa digunakan untuk futsal. Karena fasilitas yang terseia hanya dua buah gawang.</p>
    			<a href="#" class="btn btn-primary">Book Now !</a>
  			</div>
		</div>
	</div>
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