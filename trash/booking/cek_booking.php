<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$nim=$_POST["nim"];
$tgl_booking=$_POST["tgl_booking"];
$jam_awal=$_POST["jam_awal"];
$jam_akhir=$_POST["jam_akhir"];
$id_Lapangan=$_POST["id_Lapangan"];
$id_Fasilitas=$_POST["id_Fasilitas"]; //untuk password digunakan enskripsi md5


//Query input menginput data kedalam tabel anggota
  $sql="insert into tb_booking (nim,tgl_booking,jam_awal,jam_akhir,id_Lapangan,id_Fasilitas) values
		('$nim','$tgl_booking','$jam_awal','$jam_akhir','$id_Lapangan','$id_Fasilitas')";

//Mengeksekusi/menjalankan query diatas
  $hasil=mysqli_query($koneksi,$sql);

//Kondisi apakah berhasil atau tidak
if (empty($_POST["nim"])) {
$pesanerror = "Nim tidak boleh kosong";
}
  else if ($hasil) {

	header("location:halaman_user.php");
  }
  else {
	echo "Gagal simpan data anggota";
  header("location:booking.php");
	exit;
}

?>
