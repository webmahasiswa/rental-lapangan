<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
//$id_lapangan=$_POST["id_lapangan"];
$file=$_FILES["file"]["name"];
$source=$_FILES["file"]["tmp_name"];
$folder='../gambar/';
$nama_lapangan=$_POST["nama_lapangan"];
//$nama_pemilik=$_POST["nama_pemilik"];
$alamat=$_POST["alamat"];
move_uploaded_file($source, $folder.$file);

//$aksi=$_POST["aksi"]; //untuk password digunakan enskripsi md5


//Query input menginput data kedalam tabel anggota
  $sql="insert into tb_lapangan (file,nama_lapangan,alamat) values
		('$file','$nama_lapangan','$alamat')";

//Mengeksekusi/menjalankan query diatas
  $hasil=mysqli_query($koneksi,$sql);

//Kondisi apakah berhasil atau tidak
if (empty($_POST["nama_lapangan"])) {
$pesanerror = "id tidak boleh kosong";
}
  else if ($hasil) {

	header("location:halaman_pengelola.php");
  }
  else {
	echo "Gagal simpan data anggota";
  header("location:upload_page.php");
	exit;
}

?>
