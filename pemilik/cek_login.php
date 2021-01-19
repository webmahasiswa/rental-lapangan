<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username_pemilik = $_POST['username_pemilik'];
$password_pemilik = $_POST['password_pemilik'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from tb_pemilik where username_pemilik='$username_pemilik' and password_pemilik='$password_pemilik'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$_SESSION['username_pemilik'] = $username_pemilik;
	//$_SESSION['status'] = "login";
	header("location: after_login/index_pemilik.php");
	
}else{
	header("location:login.php?pesan=gagal");
}

?>
