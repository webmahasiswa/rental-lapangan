
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
  		<a class="navbar-brand" href="halaman_admin.php"><h3 style="background: -webkit-linear-gradient(white, grey); -webkit-text-fill-color: transparent; -webkit-background-clip: text;">Rental Lapangan</h3></a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    		<div class="navbar-nav">
      			<a class="nav-item nav-link enable" href="halaman_admin.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link active" href="data_booking.php" tabindex="-1" aria-enable="true">data booking</a>
            <a class="nav-item nav-link enable" href="data_user.php" tabindex="-1" aria-enable="true">data user</a>
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
          <th>nim</th>
          <th>Nama</th>
          <th>username</th>
          <th>password</th>
          <th>email</th>
          <th>level</th>
      </tr>
      </thead>
      <tbody>
        <?php
        $koneksi = mysqli_connect("localhost","root","","db_lapangan");

        // Check connection
        if (mysqli_connect_errno()){
          echo "Koneksi database gagal : " . mysqli_connect_error();
        }
        $query = "SELECT * FROM tb_daftar";
        $sql_user = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
        while ($data = mysqli_fetch_assoc($sql_user)) { ?>
          <tr>
            <td><?=$data['nim']?></td>
            <td><?=$data['nama_lengkap']?></td>
            <td><?=$data['username']?></td>
            <td><?=$data['password']?></td>
            <td><?=$data['email']?></td>
            <td><?=$data['level']?></td>
          </tr>
        <?php
        } ?>

      
      </tbody>      
    </table>
  </div>

  </div>
</div>
<div class="container">
	<div class="row">

	</div>
</div>

<div class="jumbotron bg-primary">
  <h6 align="center"><a href="index.php" style="color: white;">Kembali ke atas</a></h6>

</div>
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="https//www.tunojoyo.ac.id"> Universitas Trunojoyo</a>
    <p>kelompok 1 basis data</p>
    <a href="index.php"><img class="image" border="0" src="logo_himatif.png"  width="100px" style="margin: 1px;padding: 0px color:white;"></a>
  </div>
  <!-- Copyright -->

</footer>
</body>
</html>
