<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'mahasiswa'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung dengan MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * FROM datadiri';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dftar Penyewa Lapangan</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery-ui/jquery-ui.js"></script>
	<link rel="stylesheet" type="text/css" href="js/jquery-ui/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
		<div class="container ">
  		<a class="navbar-brand" href="homepage.php">Navbar</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    		<div class="navbar-nav">
      			<a class="nav-item nav-link active" href="homepage.php">Home <span class="sr-only">(current)</span></a>
      			<a class="nav-item nav-link" href="#">Daftar Lapangan</a>
      			<a class="nav-item nav-link" href="form.php">Form Penyewaan</a>
      			<a class="nav-item nav-link enable" href="#" tabindex="-1" aria-enable="true">Kontak Pengelola</a>
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
									<h2 class="page-header">Tabel Penyewa Lapangan</h2>
									<form>
										<div class="form-group">
											<h1>tabel penyewa</h1>
											<table id="example1" class="table table-bordered table-striped">
												<thead>
													<tr>
														<th>no</th>
														<th>Nim</th>
														<th>Nama</th>
														<th>Email</th>
														<th>Jurusan</th>
													</tr>
												</thead>
												<tbody>';
													<?php
													$no 	= 1;
													while ($row = mysqli_fetch_array($query)){
														echo '<tr>
																<td>'.$no.'</td>
																<td>'.$row['nim'].'</td>
																<td>'.$row['nama'].'</td>
																<td>'.$email[2] .'</td>
																<td>'.$jurusan.'</td>
															</tr>';
														$no++;
													}?>
												</tbody>
												<tfoot>
													<tr bgcolor="white">
														<td><?= $i; ?></td>
														<td><?=  $row["nim"]; ?></td>
														<td><?=  $row["nama"]; ?></td>
														<td><?=  $row["email"]; ?></td>
														<td><?=  $row["jurusan"]; ?></td>
													</tr>
												</tfoot>	
												
											</table>
											
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
<div class="container-fluid bg-primary">
	<h1>there</h1>

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
<script type="text/javascript">
 	$(function () {
    	$("#example1").DataTable();
  	});
</script>
</body>
</html>