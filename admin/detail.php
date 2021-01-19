<?php
  // defenisikan koneksi
  require('koneksi.php');
  // Cek apakah parameter ID ada
  if (isset($_GET['id_booking'])) {
    // jika ada ambil nilai id
    $id = $_GET['id_booking'];
  } else {
    // jika tidak ada redirect ke index.php
    header('Location:data_bookingan.php');
  }
 ?>
<!DOCTYPE html>
<html lang="id" dir="ltr">
  <head>
    <title>kodeajaib[dot]com</title>
  </head>
  <body>
    <h2>Selamat Datang di KodeAjaib.com</h2>
    <h3>Detail Biodata</h3>
    <?php
      // query SQL menampilkan data dari table tbl_biodata
      $sql = "SELECT * FROM tb_booking WHERE id_booking='$id'";
      // tampung data (dalam array) kedalam variable $biodata
      $biodata = mysqli_query($koneksi, $sql);
      // variable untuk membuat tabel HTML
      $strTbl = "";
      $strTbl .= "<table>";
      // cek apakah $biodata nilai kosong atau tidak
      if (mysqli_num_rows($biodata) > 0) {
        // jika ada tampilkan kedalam tabel
        $data = mysqli_fetch_assoc($biodata);
        $strTbl .= "<tr>";
        $strTbl .= "<td>Nama Lengkap :</td>";
        $strTbl .= "<td>". $data['nama_depan'] ." ".$data['nim'] ."</td>";
        $strTbl .= "</tr>";
        $strTbl .= "<tr>";
        $strTbl .= "<td>Alamat :</td>";
        $strTbl .= "<td>". $data['tgl_booking'] ."</td>";
        $strTbl .= "</tr>";
      } else {
        // jika data tidak ada, tampilkan pesan didalam tabel
        $strTbl .="<tr><td colspan='2'>Ooouppsss... Maaf, data masih kosong, tambahkan data dari Database terlebih dahulu</td></tr>";
      }
      $strTbl .= "</table>";
      $strTbl .= "<a href='index.php'>Kembali ke Index</a>";
      // tampilkan tabel pada halaman
      print($strTbl);
     ?>
     <p>Copyright @ Localhost</p>
  </body>
</html>