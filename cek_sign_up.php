<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$nim=$_POST["nim"];
$nama_lengkap=$_POST["nama_lengkap"];
$username=$_POST["username"];
$password=$_POST["password"];
$email=$_POST["email"];
$level=$_POST["level"]; //untuk password digunakan enskripsi md5


//Query input menginput data kedalam tabel anggota
  $sql="INSERT INTO tb_daftar (nim,nama_lengkap,username,password,email,level) VALUES
		('$nim','$nama_lengkap','$username','$password','$email','$level')";

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

}

?>
