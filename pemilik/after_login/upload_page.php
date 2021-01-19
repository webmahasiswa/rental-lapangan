<?php

  include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  
	<meta charset="utf-8">
	<title>homepage</title>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../js/bootstrap.min.js">
</head>
<body>
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
		<div class="container">
  		<a class="navbar-brand" href="index_pemilik.php"><h3 style="background: -webkit-linear-gradient(white, grey); -webkit-text-fill-color: transparent; -webkit-background-clip: text;">Rental Lapangan</h3></a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    		<div class="navbar-nav">
      			<a class="nav-item nav-link enable" href="index_pemilik.php">Home <span class="sr-only">(current)</span></a>
      			<a class="nav-item nav-link active" href="upload_page.php" tabindex="-1" aria-enable="true">upload</a>
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
                  <h2 class="page-header text-center">Form Upload Lapangan</h2><br>
                  <form action="cek_upload.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label>Nama Pemilik</label>
                      <div>
                      <?php
                      $order = "SELECT * FROM tb_pemilik";
                      $hasilO = $koneksi->query($order);
                      ?>
                        <select class="form-control" name="nama_pemilik">
                        <?php foreach($hasilO as $o) : ?>
                          <option value="<?= $o['id_pemilik']; ?>"><?= $o['nama_pemilik']; ?></option>
                        <?php endforeach; ?>
                        </select>
                      </div>
                      
                      <label for="nama_lapangan">Nama lapangan</label>
                      <input type="text" id="nama_lapangan" name="nama_lapangan" class="form-control" placeholder="nama lapangan"><br>
                     
                      <label>upload gambar</label>
                      <input type="file" name="file"><br>

                      <label for="alamat">alamat</label>
                      <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="alamat"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" name="kirim">Submit</button>
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
<div class="jumbotron bg-primary">
  <h6 align="center"><a href="upload_page.php" style="color: white;">Kembali ke atas</a></h6>

</div>
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="https//www.tunojoyo.ac.id"> Universitas Trunojoyo</a>
    <p>kelompok 1 basis data</p>
    <a href="index.php"><img class="image" border="0" src="../../logo_himatif.png"  width="100px" style="margin: 1px;padding: 0px color:white;"></a>
  </div>
  <!-- Copyright -->

</footer>
</body>
</html>