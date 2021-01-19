<?php

  include 'koneksi.php';

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
  		<a class="navbar-brand" href="halaman_user.php"><h3 style="background: -webkit-linear-gradient(white, grey); -webkit-text-fill-color: transparent; -webkit-background-clip: text;">Rental Lapangan</h3></a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    		<div class="navbar-nav">
      			<a class="nav-item nav-link enable" href="halaman_user.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link active" href="booking.php" tabindex="-1" aria-enable="true">Booking</a>
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
    <div class="row justify-content-center">
    <div class="col-lg-7">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <div class="row">
            <div class="col-lg">
              <div class="p-5">
                <div class="text">
                  <h2 class="page-header text-center">Form Booking</h2><br>
                  <form action="cek_booking.php" method="post">
                    <div class="form-group">
                      <?php
                      $queryz= "SELECT * FROM tb_booking INNER JOIN tb_fasilitas ON tb_booking.id_Fasilitas = tb_fasilitas_id_fasilitas";
                      //$sql_booking = mysqli_query($koneksi,$queryz) or die (mysqli_error($koneksi));
                      ?>
                      <label for="nim">Nim</label>
                      <input type="text" id="nim" name="nim" class="form-control" placeholder="NIM">
                      <span style="color: red;">
                      <?php
                        if (isset($_GET["errnim"])) {
                          $err = $_GET["errnim"];
                          echo $err;
                        }
                      ?> </span><br>
											<label for="tgl_daftar">Tanggal</label>
                      <input type="date" id="tgl_booking" name="tgl_booking" class="form-control" placeholder="pilih tanggal">
                      <span style="color: red;">
                      <?php
                        if (isset($_GET["errtgl_booking"])) {
                          $err1 = $_GET["errtgl_booking"];
                          echo $err1;
                        }
                      ?></span><br>
											<label for="jam_awal">Jam Mulai</label>
                      <input type="time" id="jam_awal" name="jam_awal" class="form-control" placeholder="pilih jam mulai">
                      <span style="color: red;">
                      <?php
                        if (isset($_GET["errjam_awal"])) {
                          $err = $_GET["errjam_awal"];
                          echo $err;
                        }
                      ?></span><br>
											<label for="jam_akhir">Jam Selesai</label>
                      <input type="time" id="jam_akhir" name="jam_akhir" class="form-control" placeholder="pilih jam selesai">
                      <span style="color: red;">
                      <?php
                        if (isset($_GET["errjam_akhir"])) {
                          $err = $_GET["errjam_akhir"];
                          echo $err;
                        }
                      ?></span><br>

                    </div>


										<div class="form-group">
                    <label>Lapangan</label><br>
                      <div>
                      <?php
                      $order = "SELECT * FROM lapangan";
                      $hasilO = $koneksi->query($order);
                      ?>
                        <select class="form-control" name="nama_lapangan">
                        <?php foreach($hasilO as $o) : ?>
                          <option value="<?= $o['id_lapangan']; ?>"><?= $o['nama_lapangan']; ?></option>
                          <span style="color: red;">
                          <?php
                          if (isset($_GET["errnama_lapangan"])) {
                            $err = $_GET["errnama_lapangan"];
                            echo $err;
                          }
                          ?></span>
                        <?php endforeach; ?>
                        </select>
                      </div>
                      
                      
                    </div>
										<div class="form-group">
                      <label>fasilitas</label><br>
                      <div>
                      <?php
                      $order = "SELECT * FROM tb_fasilitas";
                      $hasilO = $koneksi->query($order);
                      ?>
                        <select class="form-control" name="rompi">
                        <?php foreach($hasilO as $o) : ?>
                          <option value="<?= $o['id_fasilitas']; ?>"><?= $o['id_fasilitas']; ?> paket</option>
                        <?php endforeach; ?>
                        </select>
                      </div>
                      
                      
                    </div>
                    
                    <button class="btn btn-primary" type="submit" name="login" value="LOGIN" >Booking</button>
                    
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>
</div>
<div class="container">
	<div class="row">

	</div>
</div>

<div class="jumbotron bg-primary">
  <h6 align="center"><a href="booking.php" style="color: white;">Kembali ke atas</a></h6>

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
