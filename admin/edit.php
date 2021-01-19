<?php
	//menyisipkan file admin_permission yang digunakan sebagai file requirement 
	require 'customer_permission.php';
	//untuk menghubungkan dengan database server
	$db = new PDO('mysql:host=localhost;dbname=banking','root','');
	include 'validasi.php';// digunakan untuk menyisipkan file validasi.php 
	$errors = array();// digunakan untuk menampung file error dalam validasi inputan
	if(isset($_POST['edit']))//kondisi utuk menyatakan bahawa tombol edit sudah di tekan
	{
		validasiPassword($errors, $_POST, 'password_lama');// memanggil function yang ada di file validasi.php
		validateAlnum($errors, $_POST, 'password_baru');// memanggil function yang ada di file validasi.php
		tayo($errors, $_POST, 'CP','password_baru');// memanggil function yang ada di file validasi.php

		validateKosong($errors, $_POST, 'password_lama');// memanggil function yang ada di file validasi.php
		validateKosong($errors, $_POST, 'password_baru');// memanggil function yang ada di file validasi.php
		validateKosong($errors, $_POST, 'CP');// memanggil function yang ada di file validasi.php
		if (empty($errors))// digunakan jika dalam inputan sudah benar
		{
		$statement1 = $db->prepare("UPDATE `customer` SET `PASSWORD`=SHA2(:pw,0) WHERE USERNAME=:nama"); //digunakan untuk mengupdate data dari table customer dimana username sesuai dengan yang login
		$statement1->bindValue(":nama",$_SESSION['isCustomer']);//digunakan untuk mengirim data inputan ke prepared sesuai nama tampungan variable
		$statement1->bindValue(":pw",$_POST['CP']);//digunakan untuk mengirim data inputan ke prepared sesuai nama tampungan variable
		$statement1->execute();
		header ("Location: edit.php");//digunakan untuk berpindah ke file lain
		exit();
	}
}
?>
<!DOCTYPE html>
<html lang='en'>
<head>
	<title>Edit</title>
	<link rel="stylesheet" href="home.css"> 
</head>
<body>
	<!-- untuk memberikan style pada header halaman beranda seperi letak dan juga padding -->
	<div class='a'>
		<!-- untuk memberikan style pada header halaman beranda -->
		<div class='header-top'>
			<!-- untuk memberikan style pada gambar dibagian header, yaitu logo Bank -->
				<img src="./gambar/logo.png" alt="Bank"  class="logo">
			</div>
			<!-- untuk memberikan style pada tombol menu pada bagian header halaman beranda -->
			<div class='tombol'>
				<!-- menghubungkan dengan halaman beranda -->
				<a href="Profiluser.php">Beranda</a>
				<b> | </b>
				<!-- menghubungkan dengan halaman beranda LOGOUT -->
				<a href="index.php" >Log Out</a>>
				<p> Selamat datang di Bank UTM </p>
			</div>
		</div>
	</div>
	<!-- memberikan style pada bagian content -->
	<div class='content'>
		<!-- memberikan style pada bagian profil sebelah kiri -->
		<div class='profil-content-kiri'>
			<!-- memberikan style pada menu -->
			<h2 class='menu-desain'> Menu </h2>
			<a class='button-menu' href="Profiluser.php">Profil</a>
			<a class='button-menu'  href="Transfer.php">Transfer</a>
			<a class='button-menu'  href="edit.php">Edit</a>
			<a class='button-menu'  href="transaksi.php">Bukti Transaksi</a>
		</div>
		<!-- memberikan style pada bagian profil content sebelah kanan -->
		<div class='profil-content-kanan'>
			<b class='kata-edit-1'> Edit >> Edit >> </b>
			<b class='kata-edit-2'> Edit </b>
			<div class='formAll'> 	
				<h2 class='judulAll'>Edit Password</h2>
				<form method='POST'><!-- untuk mengirimkan nilai -->
					<div class='labelAll'><!-- digunakan untuk mengatur label form bagian isi -->
						<label>Password lama</label>
					</div>
					<div class='inputAll'><!-- digunakan untuk mengatur inputan form bagian isi -->
							<input class='inputanAll' name='password_lama' type='password' value="<?php if (isset($_POST['password_lama'])) echo htmlspecialchars($_POST['password_lama'])?>"/><!-- digunakan untuk membuat inputan -->
					</div>
					<div>
							<span style='color:red;padding-left: 25px;'> <?php if (isset($errors['password_lama'])) echo htmlspecialchars($errors['password_lama'])?> </span><!-- digunakan untuk menampilkan validasi erorr-->
					</div>
					<div class='labelAll'><!-- digunakan untuk mengatur label form bagian isi -->
						<label>Password Baru</label>
					</div>
					<div class='inputAll'><!-- digunakan untuk mengatur inputan form bagian isi -->
							<input class='inputanAll' name='password_baru' type='password' value="<?php if (isset($_POST['password_baru'])) echo htmlspecialchars($_POST['password_baru'])?>"/><!-- digunakan untuk membuat inputan -->
					</div>
					<div>
							<span style='color:red;padding-left: 25px;'> <?php if (isset($errors['password_baru'])) echo htmlspecialchars($errors['password_baru'])?> </span><!-- digunakan untuk menampilkan validasi erorr-->
					</div>
					<div class='labelAll'><!-- digunakan untuk mengatur label form bagian isi -->
						<label>Confirm Password</label>
					</div>
					<div class='inputAll'><!-- digunakan untuk mengatur inputan form bagian isi -->
							<input class='inputanAll' name='CP' type='password' value="<?php if (isset($_POST['CP'])) echo htmlspecialchars($_POST['CP'])?>"/><!-- digunakan untuk membuat inputan -->
					</div>
					<div>
							<span style='color:red;padding-left: 25px;'> <?php if (isset($errors['CP'])) echo htmlspecialchars($errors['CP'])?> </span><!-- digunakan untuk menampilkan validasi erorr-->
					</div>
					<div class='labelAll'><!-- digunakan untuk mengatur label form bagian isi -->
						<input class='tombolAll' type="submit"  name='edit' value="EDIT PASSWORD">
					</div>
						<br>	
				</form>
			</div>
			<br>
			<!--<p class='kalimat'>Pada menu ini user melakukan perubahan password yang sesuai dengan kriteria diantaranya :</p>
			<ul>
				<li class='kalimat'>password terdiri dari 8 s/d 12 digit, harus berupa karakter alfanumerik, minimal mengandung 1 huruf dan 1 angka, serta Case sensitive(Contoh: Bandung1)</li>
				<li class='kalimat'>password tidak boleh sama dengan USER ID</li>
				<li class='kalimat'>password tidak boleh mengandung spasi</li>
			</ul>-->
			
			</div>
			
		</div>
	<!-- memberikan style pada abagian footer -->
	<div class="footer">
		<p>Copyright © 2018 Bank mahasiswa UTM.</p>
    </div>
</body>
</html>