
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
  		<a class="navbar-brand" href="index.php"><h3 style="background: -webkit-linear-gradient(white, grey); -webkit-text-fill-color: transparent; -webkit-background-clip: text;">Rental Lapangan</h3></a>
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
                  <form>
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" id="nama" class="form-control" placeholder="Contoh form text ...">
                    </div>
 
                    <div class="form-group">
                      <label for="umur">Umur</label>
                      <input type="number" id="umur" class="form-control" placeholder="Contoh form angka ...">
                    </div>
 
                    <div class="form-group">
                      <label for="pekerjaan">Pekerjaan</label>
                      <select id="pekerjaan" class="form-control">
                        <option value="">- Pilih Pekerjaan</option>
                        <option value="">Programmer</option>
                        <option value="">Web Designer</option>
                        <option value="">Pengusaha</option>
                      </select>
                    </div>
 
                    <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <textarea class="form-control" id="alamat" rows="3" placeholder="Contoh textarea .."></textarea>
                    </div>
 
                    <button type="submit" class="btn btn-primary">Submit</button>
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
