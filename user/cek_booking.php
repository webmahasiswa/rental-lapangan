<?php
include 'koneksi.php';

$nim = $_POST['nim'];
$tgl_booking = $_POST['tgl_booking'];
$jam_awal = $_POST['jam_awal'];
$jam_akhir = $_POST['jam_akhir'];
$nama_lapangan = $_POST['nama_lapangan'];
$rompi = $_POST['rompi'];
//$alamat = $_POST['alamat'];

$sql = "INSERT INTO tb_booking(id_Lapangan,nim,tgl_booking,jam_awal,jam_akhir,id_Fasilitas) VALUES
		('$nama_lapangan','$nim','$tgl_booking','$jam_awal','$jam_akhir','$rompi')";


//Mengeksekusi/menjalankan query diatas
  $hasil=mysqli_query($koneksi,$sql);

//Kondisi apakah berhasil atau tidak
if (empty($_POST["nim"])) {
	header("location:booking.php?errnim= *Nim belum di isi");
}else if(empty($tgl_booking)){
	header("location:booking.php?errtgl_booking= *Tanggal belum di isi");
}else if(empty($jam_awal)){
	header("location:booking.php?errjam_awal= *Jam Awal belum di isi");
}else if(empty($jam_akhir)){
	header("location:booking.php?errjam_akhir= *Jam Akhir belum di isi");
}else if(empty($nama_lapangan)){
	header("location:booking.php?errnama_lapangan= *Nama Lapangan belum di isi");
}
  elseif ($hasil) {

	header("location:cetak.php");
  }
  else {
	echo "Gagal simpan data anggota";
  header("location:booking.php");
	exit;
}

?>