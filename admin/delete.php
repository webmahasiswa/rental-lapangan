<?php
include('koneksi.php');
$id_booking	= $_GET['id_booking'];

$sql 	= "DELETE * FROM id_booking";
$query	= mysqli_query($koneksi,$sql);
header('location: halaman_admin.php');
?>