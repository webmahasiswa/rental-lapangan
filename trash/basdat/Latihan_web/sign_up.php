<!DOCTYPE html>
<html lang="en">
<head>
	<title>form penyewaan</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
</head>
<body>
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
		<div class="container ">
  		<a class="navbar-brand" href="homepage.php">RentField</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    		<div class="navbar-nav">
      			<a class="nav-item nav-link active" href="homepage.php">Home <span class="sr-only">(current)</span></a>
      			<a class="nav-item nav-link" href="#">Daftar Lapangan</a>
      			<a class="nav-item nav-link" href="form1.php">Form Penyewaan</a>
      			<a class="nav-item nav-link enable" href="#" tabindex="-1" aria-enable="true">Kontak Pengelola</a>
    		</div>
    		<div class="navbar-nav ml-auto">
            	<a class="nav-item nav-link active" href="sign_up.php">Daftar</a>
            	<a class="nav-item nav-link active" href="login.php">Login</a>
        	</div>
  		</div>
  		</div>
	</nav>
<div class="jumbotron jumbotron-fluid">
<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-7">
			<div class="card o-hidden border-0 shadow-lg my-5">
				<div class="card-body p-0">
					<div class="row">
						<div class="col-lg">
							<div class="p-5">
								<div class="text">
									<h2 class="page-header text-center">Form Login</h2><br>
									<form action="cek_sign_up.php" method="post">
										<div class="form-group">
											<label>Nim</label><br>
											<input type="text" class="form-control" placeholder="nim" name="nim">
											<label>Nama</label><br>
											<input type="text" class="form-control" placeholder="nama" name="nama">
											<label>Username</label><br>
											<input type="text" class="form-control" placeholder="username" name="username">
											<label>Password</label><br>
											<input type="password" class="form-control" placeholder="password" name="password">
											<label>Email</label><br>
											<input type="text" class="form-control" placeholder="email" name="email">
											<label for="level">Level</label>
                      						<select id="level" class="form-control" name="level">
                      							<option value="pengunjung" >Pengunjung</option>
                        						<option value="admin" >Admin</option>
                        						<option value="pengelola" >Pengelola</option>
                      						</select>	
										</div>
										<div class="col-lg-7" float="right">
											<button class="btn btn-danger" type="submit" >Batal</button>
											<button class="btn btn-success" type="submit" name="login" value="LOGIN">Login</button>
										</div>

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
<div class="jumbotron bg-primary">
  <h6 align="center"><a href="halaman_admin.php" style="color: white;">Kembali ke atas</a></h6>

</div>
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="#"> Universitas Trunojoyo</a>
    <p>kelompok 1 basis data</p>
  </div>
  <!-- Copyright -->

</footer>
</body>
</html>
