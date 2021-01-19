<?php

$koneksi = new mysqli("localhost","root","","dblapangan");

// Check connection
if (mysqli_connect_error()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>
