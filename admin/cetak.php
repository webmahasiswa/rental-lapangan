<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<body onload="window.print()">
	<a href="halaman_admin.php">kembali ke awal</a>
<?php 
  include "koneksi.php";

echo "<center><h2 style='margin-bottom:3px;'>RENTAL LAPANGAN UTM</h2>
			  Universitas Trunojoyo Madura<br>
			  Fakultas Teknik<br>
			  Prodi Teknik Informatika<br>
			  </center><hr/>";
echo "  <center><h2>Bukti Booking</h2></center><p class='lead' style='float:right;' >*harap disimpan sebagai bukti waktu pemakaian lapangan</p>
		<table width=100% cellpadding=6>
          <tr style='color:white; height:35px;' bgcolor=#6495ed>
			<th class='data'>No induk mahasiswa</th>
			<th class='data'>Tanggal sewa</th>
			<th class='data'>Jam mulai</th>
			<th class='data'>Jam selesai</th>
			<th class='data'>Lapangan</th>
			<th class='data' text-align='center'>Fasilitas Paket</th>
			<th class='data'>     Catatan     </th>
          </tr>";



    $tampil = mysqli_query($koneksi, "SELECT * FROM tb_booking ORDER BY id_booking DESC ");
    //$tampil2 = mysqli_query($koneksi, "SELECT * FROM tb_booking ORDER BY id_Fasilitas DESC rompi");
    //$r2=mysqli_fetch_assoc($tampil2);
  
    //$no = $posisi+1;
    while($r=mysqli_fetch_assoc($tampil)){
      //$tanggal=tgl_indo($r['tgl_masuk']);
      //$harga=format_rupiah($r['harga']);
	  //$harga_grosir=format_rupiah($r['harga_grosir']);
	  //if(($no % 2)==0){ $warna="#ffffff"; }else{ $warna="#E1E1E1"; }
	  //$cek = mysqli_fetch_array(mysqli_query($koneksi, "SELECT count(*) as total FROM orders where id_costumer='$r[id_costumer]'"));
      echo "<tr bgcolor=#dcdcdc; class='data'>
		<td class='data'><center>$r[Nim]</center></td>
		<td class='data'><center>$r[tgl_booking]</center></td>
		<td class='data'><center>$r[jam_awal]</center></td>
		<td class='data'><center>$r[jam_akhir]</center></td>
		<td class='data'><center>$r[id_Lapangan]</center></td>
		<td class='data'><center>paket $r[id_Fasilitas]</center></td>
		<td><br></td>
		</tr>";
		
      //$no++;
			$tgl=date('l, d - m - Y');
    }
    echo "</table><br/><tr><td><br/><span style='float:right; text-align:center;'>Admin<br/>
										rental lapangan utm<br/></br></br>
								$tgl
								<br/></span></td></tr>";
?>
</body>
</html>