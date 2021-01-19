<?php
  session_start();

  // cek apakah yang mengakses halaman ini sudah login
  if($_SESSION['level']==""){
    header("location:halaman_user.php?pesan=gagal");
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

  <script src="../js/bootstrap.min.js"></script>
  <script src="../jquery-1.11.1.min.js"></script>
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
      			<a class="nav-item nav-link active" href="halaman_user.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link enable" href="booking.php" tabindex="-1" aria-enable="true">Booking</a>
      			<a class="nav-item nav-link enable" href="#" tabindex="-1" aria-enable="true">Kontak Pengelola</a>
    		</div>
        <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="../logout.php">Log Out</a>
        </div>
  		</div>
  		</div>
	</nav>
<div class="jumbotron">
	<div class="container" style="margin-top: 4%; margin-bottom: 15%;">
    <table class="table table-bordered table-striped">
      <tr style="text-align: center;">
        <th>Lapangan</th>
        <th>Nama</th>
        <th>Pemilik</th>
        <th>Deskripsi</th>
        <th>Booking Lapangan</th>
      </tr>
      <tr style="margin-top: 5%;">
        <td><img width="200" height="100" src="../lap1.jpg"></td>
        <td style="text-align: center;">Lapangan Taruna Jaya</td>
        <td style="text-align: center;">Universitas Trunojoyo Madura</td>
        <td style="text-align: center;">Lapangan ini berada di pusat olahraga universitas, bisa untuk futsal dan basket.</td>
        <td style="text-align: center;"><button type="submit" class="btn btn-warning"><a href="booking.php">Book Now</a></button></td>
      </tr>
      <tr>
        <td><img width="200" height="100" src="../lap2.jpg"></td>
        <td style="text-align: center;">Lapangan Tofatek</td>
        <td style="text-align: center;">Fakultas Teknik</td>
        <td style="text-align: center;">Lapangan ini berada di fakultas teknik, hanya untuk futsal.</td>
        <td style="text-align: center;"><button type="submit" class="btn btn-warning"><a href="booking.php">Book Now</a></button></td>
      <tr>
        <td><img width="200" height="100" src="../lap3.jpg"></td>
        <td style="text-align: center;">Lapangan Tofatek</td>
        <td style="text-align: center;">Fakultas Teknik</td>
        <td style="text-align: center;">Lapangan ini berada di fakultas teknik, hanya untuk futsal.</td>
        <td style="text-align: center;"><button type="submit" class="btn btn-warning"><a href="booking.php">Book Now</a></button></td>
      </tr>  
      <tr>
        <td><img width="200" height="100" src="../lap1.jpg"></td>
        <td style="text-align: center;">Lapangan Tofatek</td>
        <td style="text-align: center;">Fakultas Teknik</td>
        <td style="text-align: center;">Lapangan ini berada di fakultas teknik, hanya untuk futsal.</td>
        <td style="text-align: center;"><button type="submit" class="btn btn-warning"><a href="booking.php">Book Now</a></button></td>
      </tr>
      <tr>
        <td><img width="200" height="100" src="../lap1.jpg"></td>
        <td style="text-align: center;">Lapangan Tofatek</td>
        <td style="text-align: center;">Fakultas Teknik</td>
        <td style="text-align: center;">Lapangan ini berada di fakultas teknik, hanya untuk futsal.</td>
        <td style="text-align: center;"><button type="submit" class="btn btn-warning"><a href="booking.php">Book Now</a></button></td>
      </tr>
    </table>
    
   
  </div>
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


<div class="jumbotron bg-primary">
  <h6 align="center"><a href="halaman_user.php" style="color: white;">Kembali ke atas</a></h6>

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
