<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$nim=$_POST["nim"];
$nama=$_POST["nama"];
$username=$_POST["username"];
$password=$_POST["password"];
$email=$_POST["email"];
$level=$_POST["level"]; //untuk password digunakan enskripsi md5


//Query input menginput data kedalam tabel anggota
  $sql="insert into user (nim,nama,username,password,email,level) values
		('$nim','$nama','$username','$password','$email','$level')";

//Mengeksekusi/menjalankan query diatas
  $hasil=mysqli_query($koneksi,$sql);

//Kondisi apakah berhasil atau tidak
if (empty($_POST["nim"])) {
$pesanerror = "Nim tidak boleh kosong";
}
  else if ($hasil) {

	header("location:login.php");
  }
  else {
	echo "Gagal simpan data anggota";
  header("location:sign_up.php");
	exit;
}

?>
