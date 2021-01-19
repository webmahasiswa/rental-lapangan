<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$nama_pemilik=$_POST["nama_pemilik"];
$username_pemilik=$_POST["username_pemilik"];
$password_pemilik=$_POST["password_pemilik"];
$email_pemilik=$_POST["email_pemilik"];


//Query input menginput data kedalam tabel anggota
  $sql="insert into tb_pemilik (nama_pemilik,username_pemilik,password_pemilik,email_pemilik) values
		('$nama_pemilik','$username_pemilik','$password_pemilik','$email_pemilik')";

//Mengeksekusi/menjalankan query diatas
  $hasil=mysqli_query($koneksi,$sql);

//Kondisi apakah berhasil atau tidak
if (empty($_POST["nama_pemilik"])) {
$pesanerror = "Nama tidak boleh kosong";
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
