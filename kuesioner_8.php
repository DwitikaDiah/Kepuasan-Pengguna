<?php
  // buka koneksi dengan MySQL
  include("connection.php");
  
  //cek apakah form telah di submit 
  if (isset($_POST["submit_8"])) {
	  //ambil semua nilai form
	  // $no_handphone= htmlentities(strip_tags(trim($_POST["no_handphone"])));
	  $penilaiandudi21= htmlentities(strip_tags(trim($_POST["penilaiandudi21"])));
	  $penilaiandudi22= htmlentities(strip_tags(trim($_POST["penilaiandudi22"])));
	  $penilaiandudi23= htmlentities(strip_tags(trim($_POST["penilaiandudi23"])));
	  $penilaiandudi24= htmlentities(strip_tags(trim($_POST["penilaiandudi24"])));
	  $penilaiandudi25= htmlentities(strip_tags(trim($_POST["penilaiandudi25"])));
	  $penilaiandudi26= htmlentities(strip_tags(trim($_POST["penilaiandudi26"])));
	  $penilaiandudi27= htmlentities(strip_tags(trim($_POST["penilaiandudi27"])));
	  $penilaiandudi28= htmlentities(strip_tags(trim($_POST["penilaiandudi28"])));
	  $penilaiandudi29= htmlentities(strip_tags(trim($_POST["penilaiandudi29"])));
	  $penilaiandudi30= htmlentities(strip_tags(trim($_POST["penilaiandudi30"])));
	  $penilaiandudi31= htmlentities(strip_tags(trim($_POST["penilaiandudi31"])));
	  $penilaiandudi32= htmlentities(strip_tags(trim($_POST["penilaiandudi32"])));
	  $penilaiandudi33= htmlentities(strip_tags(trim($_POST["penilaiandudi33"])));
	  $penilaiandudi34= htmlentities(strip_tags(trim($_POST["penilaiandudi34"])));
	  $penilaiandudi35= htmlentities(strip_tags(trim($_POST["penilaiandudi35"])));
	  $penilaiandudi36= htmlentities(strip_tags(trim($_POST["penilaiandudi36"])));
	  $penilaiandudi37= htmlentities(strip_tags(trim($_POST["penilaiandudi37"])));
	  $penilaiandudi38= htmlentities(strip_tags(trim($_POST["penilaiandudi38"])));
	  $penilaiandudi39= htmlentities(strip_tags(trim($_POST["penilaiandudi39"])));
	  $penilaiandudi40= htmlentities(strip_tags(trim($_POST["penilaiandudi40"])));
	  $penilaiandudi41= htmlentities(strip_tags(trim($_POST["penilaiandudi41"])));
	  $penilaiandudi42= htmlentities(strip_tags(trim($_POST["penilaiandudi42"])));
	  $penilaiandudi43= htmlentities(strip_tags(trim($_POST["penilaiandudi43"])));
	  $penilaiandudi44= htmlentities(strip_tags(trim($_POST["penilaiandudi44"])));
	  $penilaiandudi45= htmlentities(strip_tags(trim($_POST["penilaiandudi45"])));
	  $penilaiandudi46= htmlentities(strip_tags(trim($_POST["penilaiandudi46"])));
	  $penilaiandudi47= htmlentities(strip_tags(trim($_POST["penilaiandudi47"])));
	  $penilaiandudi48= htmlentities(strip_tags(trim($_POST["penilaiandudi48"])));
	  $penilaiandudi49= htmlentities(strip_tags(trim($_POST["penilaiandudi49"])));
	  $penilaiandudi50= htmlentities(strip_tags(trim($_POST["penilaiandudi50"])));
	  $penilaiandudi51= htmlentities(strip_tags(trim($_POST["penilaiandudi51"])));
	  $penilaiandudi52= htmlentities(strip_tags(trim($_POST["penilaiandudi52"])));
	  $penilaiandudi53= htmlentities(strip_tags(trim($_POST["penilaiandudi53"])));
	  $penilaiandudi54= htmlentities(strip_tags(trim($_POST["penilaiandudi54"])));
	  $penilaiandudi55= htmlentities(strip_tags(trim($_POST["penilaiandudi55"])));
	  $penilaiandudi56= htmlentities(strip_tags(trim($_POST["penilaiandudi56"])));
	  $penilaiandudi57= htmlentities(strip_tags(trim($_POST["penilaiandudi57"])));
	  $penilaiandudi58= htmlentities(strip_tags(trim($_POST["penilaiandudi58"])));
	  $penilaiandudi59= htmlentities(strip_tags(trim($_POST["penilaiandudi59"])));
	  $penilaiandudi60= htmlentities(strip_tags(trim($_POST["penilaiandudi60"])));
	  $penilaiandudi61= htmlentities(strip_tags(trim($_POST["penilaiandudi61"])));
	  $penilaiandudi62= htmlentities(strip_tags(trim($_POST["penilaiandudi62"])));
	  $id_datapribadi= htmlentities(strip_tags(trim($_POST["id_datapribadi"])));

	  //siapkan variabel untuk menampung pesan error
	  $pesan_error= "";
	  
	  // cek ke database, apakah sudah ada nomor id_alumni yang sama    
      // filter data $id_alumni
      // $id_datapribadi = mysqli_real_escape_string($link,$id_datapribadi);
      // $query = "SELECT * FROM evaluasi_dudi WHERE id_datapribadi='$id_datapribadi','$penilaiandudi21','$penilaiandudi22','$penilaiandudi23','$penilaiandudi24','$penilaiandudi25','$penilaiandudi26','$penilaiandudi27','$penilaiandudi28','$penilaiandudi29','$penilaiandudi30','$penilaiandudi31','$penilaiandudi32','$penilaiandudi33','$penilaiandudi34','$penilaiandudi35','$penilaiandudi36','$penilaiandudi37','$penilaiandudi38','$penilaiandudi39','$penilaiandudi40','$penilaiandudi41','$penilaiandudi42','$penilaiandudi43','$penilaiandudi44','$penilaiandudi45','$penilaiandudi46','$penilaiandudi47','$penilaiandudi48','$penilaiandudi49','$penilaiandudi50','$penilaiandudi51','$penilaiandudi52','$penilaiandudi53','$penilaiandudi54','$penilaiandudi55','$penilaiandudi56','$penilaiandudi57','$penilaiandudi58','$penilaiandudi59','$penilaiandudi60','$penilaiandudi61','$penilaiandudi62'";
      // $query = "SELECT * FROM evaluasi_dudi WHERE id_datapribadi='$id_datapribadi'";
      // $hasil_query = mysqli_query($link, $query);
  
      // cek jumlah record (baris), jika ada, $id_alumni tidak bisa diproses
      // $jumlah_data = mysqli_num_rows($hasil_query);
      //  if ($jumlah_data >= 1 ) {
      //   $pesan_error .= "Data No. Handphone tersebut sudah di simpan. <br>";  
      // }
	  
	  //jika tidak ada error input data ke database
	  if ($pesan_error === "") {
		  // $no_handphone= mysqli_real_escape_string($link,$no_handphone);
		  $penilaiandudi21= mysqli_real_escape_string($link,$penilaiandudi21);
		  $penilaiandudi22= mysqli_real_escape_string($link,$penilaiandudi22);
		  $penilaiandudi23= mysqli_real_escape_string($link,$penilaiandudi23);
		  $penilaiandudi24= mysqli_real_escape_string($link,$penilaiandudi24);
		  $penilaiandudi25= mysqli_real_escape_string($link,$penilaiandudi25);
		  $penilaiandudi26= mysqli_real_escape_string($link,$penilaiandudi26);
		  $penilaiandudi27= mysqli_real_escape_string($link,$penilaiandudi27);
		  $penilaiandudi28= mysqli_real_escape_string($link,$penilaiandudi28);
		  $penilaiandudi29= mysqli_real_escape_string($link,$penilaiandudi29);
		  $penilaiandudi30= mysqli_real_escape_string($link,$penilaiandudi30);
		  $penilaiandudi31= mysqli_real_escape_string($link,$penilaiandudi31);
		  $penilaiandudi32= mysqli_real_escape_string($link,$penilaiandudi32);
		  $penilaiandudi33= mysqli_real_escape_string($link,$penilaiandudi33);
		  $penilaiandudi34= mysqli_real_escape_string($link,$penilaiandudi34);
		  $penilaiandudi35= mysqli_real_escape_string($link,$penilaiandudi35);
		  $penilaiandudi36= mysqli_real_escape_string($link,$penilaiandudi36);
		  $penilaiandudi37= mysqli_real_escape_string($link,$penilaiandudi37);
		  $penilaiandudi38= mysqli_real_escape_string($link,$penilaiandudi38);
		  $penilaiandudi39= mysqli_real_escape_string($link,$penilaiandudi39);
		  $penilaiandudi40= mysqli_real_escape_string($link,$penilaiandudi40);
		  $penilaiandudi41= mysqli_real_escape_string($link,$penilaiandudi41);
		  $penilaiandudi42= mysqli_real_escape_string($link,$penilaiandudi42);
		  $penilaiandudi43= mysqli_real_escape_string($link,$penilaiandudi43);
		  $penilaiandudi44= mysqli_real_escape_string($link,$penilaiandudi44);
		  $penilaiandudi45= mysqli_real_escape_string($link,$penilaiandudi45);
		  $penilaiandudi46= mysqli_real_escape_string($link,$penilaiandudi46);
		  $penilaiandudi47= mysqli_real_escape_string($link,$penilaiandudi47);
		  $penilaiandudi48= mysqli_real_escape_string($link,$penilaiandudi48);
		  $penilaiandudi49= mysqli_real_escape_string($link,$penilaiandudi49);
		  $penilaiandudi50= mysqli_real_escape_string($link,$penilaiandudi50);
		  $penilaiandudi51= mysqli_real_escape_string($link,$penilaiandudi51);
		  $penilaiandudi52= mysqli_real_escape_string($link,$penilaiandudi52);
		  $penilaiandudi53= mysqli_real_escape_string($link,$penilaiandudi53);
		  $penilaiandudi54= mysqli_real_escape_string($link,$penilaiandudi54);
		  $penilaiandudi55= mysqli_real_escape_string($link,$penilaiandudi55);
		  $penilaiandudi56= mysqli_real_escape_string($link,$penilaiandudi56);
		  $penilaiandudi57= mysqli_real_escape_string($link,$penilaiandudi57);
		  $penilaiandudi58= mysqli_real_escape_string($link,$penilaiandudi58);
		  $penilaiandudi59= mysqli_real_escape_string($link,$penilaiandudi59);
		  $penilaiandudi60= mysqli_real_escape_string($link,$penilaiandudi60);
		  $penilaiandudi61= mysqli_real_escape_string($link,$penilaiandudi61);
		  $penilaiandudi62= mysqli_real_escape_string($link,$penilaiandudi62);
		  $id_datapribadi= mysqli_real_escape_string($link,$id_datapribadi);

		  // //gabungkan format tanggal agar sesuai dengan format MySQL
		  // $tgl_mulai_bekerja= $thn."-".$bln."-".$tgl ;
		  
		  //buat dan jalankan query INSERT

		  $query= "INSERT INTO evaluasi_dudi (`penilaiandudi21`, `penilaiandudi22`, `penilaiandudi23`, `penilaiandudi24`, `penilaiandudi25`, `penilaiandudi26`, `penilaiandudi27`, `penilaiandudi28`, `penilaiandudi29`, `penilaiandudi30`, `penilaiandudi31`, `penilaiandudi32`, `penilaiandudi33`, `penilaiandudi34`, `penilaiandudi35`, `penilaiandudi36`, `penilaiandudi37`, `penilaiandudi38`, `penilaiandudi39`, `penilaiandudi40`, `penilaiandudi41`, `penilaiandudi42`, `penilaiandudi43`, `penilaiandudi44`, `penilaiandudi45`, `penilaiandudi46`, `penilaiandudi47`, `penilaiandudi48`, `penilaiandudi49`, `penilaiandudi50`, `penilaiandudi51`, `penilaiandudi52`, `penilaiandudi53`, `penilaiandudi54`, `penilaiandudi55`, `penilaiandudi56`, `penilaiandudi57`, `penilaiandudi58`, `penilaiandudi59`, `penilaiandudi60`, `penilaiandudi61`, `penilaiandudi62`, `id_datapribadi`) VALUES ( '$penilaiandudi21', '$penilaiandudi22','$penilaiandudi23', '$penilaiandudi24','$penilaiandudi25', '$penilaiandudi26','$penilaiandudi27', '$penilaiandudi28','$penilaiandudi29','$penilaiandudi30','$penilaiandudi31','$penilaiandudi32','$penilaiandudi33','$penilaiandudi34','$penilaiandudi35','$penilaiandudi36','$penilaiandudi37', '$penilaiandudi38','$penilaiandudi39', '$penilaiandudi40','$penilaiandudi41', '$penilaiandudi42','$penilaiandudi43', '$penilaiandudi44','$penilaiandudi45','$penilaiandudi46','$penilaiandudi47','$penilaiandudi48','$penilaiandudi49','$penilaiandudi50','$penilaiandudi51', '$penilaiandudi52','$penilaiandudi53', '$penilaiandudi54','$penilaiandudi55', '$penilaiandudi56','$penilaiandudi57','$penilaiandudi58','$penilaiandudi59','$penilaiandudi60','$penilaiandudi61','$penilaiandudi62', '$id_datapribadi') ";
		  // print($query);
		  
		  $result= mysqli_query ($link,$query);
		  }

		  //periksa hasil query
		  if ($result) {
			  //insert berhasil redirect ke kuesioner_2.php + pesan
			  $pesan= "Data yang Anda input sudah berhasil Tersimpan semua, Terima Kasih...";
			  $pesan= urlencode ($pesan);

			  // UPDATE: id = id data pribadi
			  header ("location: cetak.php?id=$id_datapribadi&pesan={$pesan}");
		  }
		  else {
			  die("Query gagal di jalankan !! " .mysqli_connect_errno($link) ."-" .mysqli_connect_error($link));
		  }

	  }
	  
  else {
	  //form belum disubmit berikan nilai awal untuk semua isian form
	  $pesan_error= "";
	  $no_handphone= "";
	  $penilaiandudi21= "";
	  $penilaiandudi22= "";
	  $penilaiandudi23= "";
	  $penilaiandudi24= "";
	  $penilaiandudi25= "";
	  $penilaiandudi26= "";
	  $penilaiandudi27= "";
	  $penilaiandudi28= "";
	  $penilaiandudi29= "";
	  $penilaiandudi30= "";
	  $penilaiandudi31= "";
	  $penilaiandudi32= "";
	  $penilaiandudi33= "";
	  $penilaiandudi34= "";
	  $penilaiandudi35= "";
	  $penilaiandudi36= "";
	  $penilaiandudi37= "";
	  $penilaiandudi38= "";
	  $penilaiandudi39= "";
	  $penilaiandudi40= "";
	  $penilaiandudi41= "";
	  $penilaiandudi42= "";
	  $penilaiandudi43= "";
	  $penilaiandudi44= "";
	  $penilaiandudi45= "";
	  $penilaiandudi46= "";
	  $penilaiandudi47= "";
	  $penilaiandudi48= "";
	  $penilaiandudi49= "";
	  $penilaiandudi50= "";
	  $penilaiandudi51= "";
	  $penilaiandudi52= "";
	  $penilaiandudi53= "";
	  $penilaiandudi54= "";
	  $penilaiandudi55= "";
	  $penilaiandudi56= "";
	  $penilaiandudi57= "";
	  $penilaiandudi58= "";
	  $penilaiandudi59= "";
	  $penilaiandudi60= "";
	  $penilaiandudi61= "";
	  $penilaiandudi62= "";

  };
  // // siapkan array untuk nama bulan
  // $arr_bln = array( "1"=>"Januari",
  //                   "2"=>"Februari",
  //                   "3"=>"Maret",
  //                   "4"=>"April",
  //                   "5"=>"Mei",
  //                   "6"=>"Juni",
  //                   "7"=>"Juli",
  //                   "8"=>"Agustus",
  //                   "9"=>"September",
  //                   "10"=>"Oktober",
  //                   "11"=>"November",
  //                   "12"=>"Desember" );
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Sistem Kepuasan Pengguna </title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/jquery-2.0.3.min"> </script>
  <script src="js/bootstrap.min"> </script>
  <link rel="icon" href="favicon.png" type="image/png" >
  <link href="css/kuesioner_2.css" rel="stylesheet">
<!-- <style>
table, th, td {
  border: 1px solid black;
}
</style> -->
<body>
<?php //masukan file header untuk menampilkan header
	  include_once ("header.php");
?>
<div class="container">
<?php
	  // tampilkan pesan jika ada
	  if (isset($pesan)) {
			echo "<div class=\"alert alert-success\">$pesan</div>";
		}

	  //tampilkan pesan_error jika ada
	  if ($pesan_error !== "") {
		  echo "<div class=\"alert alert-danger \">$pesan_error</div> ";
	  }
?>
 <div class="row">
	<form class="inner-login" action="kuesioner_8.php" method="post">
	<fieldset class="scheduler-border">
	<legend class="scheduler-border"><b>Evaluasi DUDI terhadap Lulusan ITS</b></legend>
		<!-- <p class="form-group"></p>
			<p class="bg-info">No. Handphone : </p> 
			<input type=text readonly=readonly name="no_handphone" value='<?php echo"$_GET[id]"; ?>' class="form-control"> -->

		<input type="hidden" name="id_datapribadi"  class="form-control" value="<?php echo"$_GET[id]"; ?>">
		 <table border="1">
        <caption></caption>
    <tr>
        <th>No.</th>
        <th>Kriteria</th>
       
        <th colspan="4">Tingkat Kepentingan</th> </p>

        <th colspan="4">Tingkat Kepuasan</th>
    </tr>
        <td>1.</td><td>Bahasa Asing</td>
        <td border="0"><p><input type="radio" name="penilaiandudi21" value="1">1. Tidak Penting</p></td>
        <td border="0"><p><input type="radio" name="penilaiandudi21" value="2">2. Cukup</p></td>
        <td border="0"><p><input type="radio" name="penilaiandudi21" value="3">3. Penting</p></td>
        <td border="0"><p><input type="radio" name="penilaiandudi21" value="4">4. Sangat Penting</p></td>

        <td border="0"><p><input type="radio" name="penilaiandudi22" value="1">1. Tidak Puas</p></td>
        <td border="0"><p><input type="radio" name="penilaiandudi22" value="2">2. Cukup</p></td>
        <td border="0"><p><input type="radio" name="penilaiandudi22" value="3">3. Puas</p></td>
        <td border="0"><p><input type="radio" name="penilaiandudi22" value="4">4. Sangat Puas</p></td></tr>

        <td>2.</td><td>Kemampuan Teknis</td>
        <td border="0"><p><input type="radio"  name="penilaiandudi23" value="1">1. Tidak Penting</p></td>
        <td border="0"><p><input type="radio" name="penilaiandudi23" value="2">2. Cukup</p></td>
        <td border="0"><p><input type="radio" name="penilaiandudi23" value="3">3. Penting</p></td>
        <td border="0"><p><input type="radio" name="penilaiandudi23" value="4">4. Sangat Penting</p></td>

        <td border="0"><p><input type="radio" name="penilaiandudi24" value="1">1. Tidak Puas</p></td>
        <td border="0"><p><input type="radio" name="penilaiandudi24" value="2">2. Cukup</p></td>
        <td border="0"><p><input type="radio" name="penilaiandudi24" value="3">3. Puas</p></td>
        <td border="0"><p><input type="radio" name="penilaiandudi24" value="4">4. Sangat Puas</p></td></tr>

        <td>3.</td><td>Etika</td>
        <td border="0"><p><input type="radio" name="penilaiandudi25" value="1">1. Tidak Penting</p></td>
        <td border="0"><p><input type="radio" name="penilaiandudi25" value="2">2. Cukup</p></td>
        <td border="0"><p><input type="radio" name="penilaiandudi25" value="3">3. Penting</p></td>
        <td border="0"><p><input type="radio" name="penilaiandudi25" value="4">4. Sangat Penting</p></td>

        <td border="0"><p><input type="radio" name="penilaiandudi26" value="1">1. Tidak Puas</p></td>
        <td border="0"><p><input type="radio" name="penilaiandudi26" value="2">2. Cukup</p></td>
        <td border="0"><p><input type="radio" name="penilaiandudi26" value="3">3. Puas</p></td>
        <td border="0"><p><input type="radio" name="penilaiandudi26" value="4">4. Sangat Puas</p></td></tr>

        <td>4.</td><td>Kompetensi</td>
        <td border="0"><p><input type="radio" name="penilaiandudi27" value="1">1. Tidak Penting</p></td>
        <td border="0"><p><input type="radio" name="penilaiandudi27" value="2">2. Cukup</p></td>
        <td border="0"><p><input type="radio" name="penilaiandudi27" value="3">3. Penting</p></td>
        <td border="0"><p><input type="radio" name="penilaiandudi27" value="4">4. Sangat Penting</p></td>

        <td><p><input type="radio" name="penilaiandudi28" value="1">1. Tidak Puas</p></td><td><p><input type="radio" name="penilaiandudi28" value="2">2. Cukup</p></td><td><p><input type="radio" name="penilaiandudi28" value="3">3. Puas</p></td><td><p><input type="radio" name="penilaiandudi28" value="4">4. Sangat Puas</p></td></tr>

        <td>5.</td><td>Penggunaan IT/Teknologi Informasi</td><td><p><input type="radio" name="penilaiandudi29" value="1">1. Tidak Penting</p></td><td><p><input type="radio" name="penilaiandudi29" value="2">2. Cukup</p></td><td><p><input type="radio" name="penilaiandudi29" value="3">3. Penting</p></td><td><p><input type="radio" name="penilaiandudi29" value="4">4. Sangat Penting</p></td>

        <td><p><input type="radio" name="penilaiandudi30" value="1">1. Tidak Puas</p></td><td><p><input type="radio" name="penilaiandudi30" value="2">2. Cukup</p></td><td><p><input type="radio" name="penilaiandudi30" value="3">3. Puas</p></td><td><p><input type="radio" name="penilaiandudi30" value="4">4. Sangat Puas</p></td></tr>

        <td>6.</td><td>Kemampuan komunikasi dan negosiasi</td><td><p><input type="radio" name="penilaiandudi31" value="1">1. Tidak Penting</p></td><td><p><input type="radio" name="penilaiandudi31" value="2">2. Cukup</p></td><td><p><input type="radio" name="penilaiandudi31" value="3">3. Penting</p></td><td><p><input type="radio" name="penilaiandudi31" value="4">4. Sangat Penting</p></td>

        <td><p><input type="radio" name="penilaiandudi32" value="1">1. Tidak Puas</p></td><td><p><input type="radio" name="penilaiandudi32" value="2">2. Cukup</p></td><td><p><input type="radio" name="penilaiandudi32" value="3">3. Puas</p></td><td><p><input type="radio" name="penilaiandudi32" value="4">4. Sangat Puas</p></td></tr>

        <td>7.</td><td>Kerjasama tim</td><td><p><input type="radio" name="penilaiandudi33" value="1">1. Tidak Penting</p></td><td><p><input type="radio" name="penilaiandudi33" value="2">2. Cukup</p></td><td><p><input type="radio" name="penilaiandudi33" value="3">3. Penting</p></td><td><p><input type="radio" name="penilaiandudi33" value="4">4. Sangat Penting</p></td>

        <td><p><input type="radio" name="penilaiandudi34" value="1">1. Tidak Puas</p></td><td><p><input type="radio" name="penilaiandudi34" value="2">2. Cukup</p></td><td><p><input type="radio" name="penilaiandudi34" value="3">3. Puas</p></td><td><p><input type="radio" name="penilaiandudi34" value="4">4. Sangat Puas</p></td></tr>

        <td>8.</td><td>Pengembangan diri (Kemampuan belajar hal baru)</td><td><p><input type="radio" name="penilaiandudi35" value="1">1. Tidak Penting</p></td><td><p><input type="radio" name="penilaiandudi35" value="2">2. Cukup</p></td><td><p><input type="radio" name="penilaiandudi35" value="3">3. Penting</p></td><td><p><input type="radio" name="penilaiandudi35" value="4">4. Sangat Penting</p></td>

        <td><p><input type="radio" name="penilaiandudi36" value="1">1. Tidak Puas</p></td><td><p><input type="radio" name="penilaiandudi36" value="2">2. Cukup</p></td><td><p><input type="radio" name="penilaiandudi36" value="3">3. Puas</p></td><td><p><input type="radio" name="penilaiandudi36" value="4">4. Sangat Puas</p></td></tr>

        <td>9.</td><td>Kecerdasan</td><td><p><input type="radio" name="penilaiandudi37" value="1">1. Tidak Penting</p></td><td><p><input type="radio" name="penilaiandudi37" value="2">2. Cukup</p></td><td><p><input type="radio" name="penilaiandudi37" value="3">3. Penting</p></td><td><p><input type="radio" name="penilaiandudi37" value="4">4. Sangat Penting</p></td>

        <td><p><input type="radio" name="penilaiandudi38" value="1">1. Tidak Puas</p></td><td><p><input type="radio" name="penilaiandudi38" value="2">2. Cukup</p></td><td><p><input type="radio" name="penilaiandudi38" value="3">3. Puas</p></td><td><p><input type="radio" name="penilaiandudi38" value="4">4. Sangat Puas</p></td></tr>

        <td>10.</td><td>Amanah/Integritas</td><td><p><input type="radio" name="penilaiandudi39" value="1">1. Tidak Penting</p></td><td><p><input type="radio" name="penilaiandudi39" value="2">2. Cukup</p></td><td><p><input type="radio" name="penilaiandudi39" value="3">3. Penting</p></td><td><p><input type="radio" name="penilaiandudi39" value="4">4. Sangat Penting</p></td>

        <td><p><input type="radio" name="penilaiandudi40" value="1">1. Tidak Puas</p></td><td><p><input type="radio" name="penilaiandudi40" value="2">2. Cukup</p></td><td><p><input type="radio" name="penilaiandudi40" value="3">3. Penting</p></td><td><p><input type="radio" name="penilaiandudi40" value="4">4. Sangat Penting</p></td></tr>

        <td>11.</td><td>Kreativitas</td><td><p><input type="radio" name="penilaiandudi41" value="1">1. Tidak Penting</p></td><td><p><input type="radio" name="penilaiandudi41" value="2">2. Cukup</p></td><td><p><input type="radio" name="penilaiandudi41" value="3">3. Penting</p></td><td><p><input type="radio" name="penilaiandudi41" value="4">4. Sangat Penting</p></td>

        <td><p><input type="radio" name="penilaiandudi42" value="1">1. Tidak Puas</p></td><td><p><input type="radio" name="penilaiandudi42" value="2">2. Cukup</p></td><td><p><input type="radio" name="penilaiandudi42" value="3">3. Penting</p></td><td><p><input type="radio" name="penilaiandudi42" value="4">4. Sangat Penting</p></td></tr>

        <td>12.</td><td>Loyalitas</td><td><p><input type="radio" name="penilaiandudi43" value="1">1. Tidak Penting</p></td><td><p><input type="radio" name="penilaiandudi43" value="2">2. Cukup</p></td><td><p><input type="radio" name="penilaiandudi43" value="3">3. Penting</p></td><td><p><input type="radio" name="penilaiandudi43" value="4">4. Sangat Penting</p></td>

        <td><p><input type="radio" name="penilaiandudi44" value="1">1. Tidak Puas</p></td><td><p><input type="radio" name="penilaiandudi44" value="2">2. Cukup</p></td><td><p><input type="radio" name="penilaiandudi44" value="3">3. Penting</p></td><td><p><input type="radio" name="penilaiandudi44" value="4">4. Sangat Penting</p></td></tr>

        <td>13.</td><td>Kepemimpinan</td><td><p><input type="radio" name="penilaiandudi45" value="1">1. Tidak Penting</p></td><td><p><input type="radio" name="penilaiandudi45" value="2">2. Cukup</p></td><td><p><input type="radio" name="penilaiandudi45" value="3">3. Penting</p></td><td><p><input type="radio" name="penilaiandudi45" value="4">4. Sangat Penting</p></td>

        <td><p><input type="radio" name="penilaiandudi46" value="1">1. Tidak Puas</p></td><td><p><input type="radio" name="penilaiandudi46" value="2">2. Cukup</p></td><td><p><input type="radio" name="penilaiandudi46" value="3">3. Penting</p></td><td><p><input type="radio" name="penilaiandudi46" value="4">4. Sangat Penting</p></td></tr>

        <td>14.</td><td>Ketahanan kerja/Keuletan</td><td><p><input type="radio" name="penilaiandudi47" value="1">1. Tidak Penting</p></td><td><p><input type="radio" name="penilaiandudi47" value="2">2. Cukup</p></td><td><p><input type="radio" name="penilaiandudi47" value="3">3. Penting</p></td><td><p><input type="radio" name="penilaiandudi47" value="4">4. Sangat Penting</p></td>

        <td><p><input type="radio" name="penilaiandudi48" value="1">1. Tidak Puas</p></td><td><p><input type="radio" name="penilaiandudi48" value="2">2. Cukup</p></td><td><p><input type="radio" name="penilaiandudi48" value="3">3. Penting</p></td><td><p><input type="radio" name="penilaiandudi48" value="4">4. Sangat Penting</p></td></tr>

        <td>15.</td><td>Berpikir kritis dan problem solving</td><td><p><input type="radio" name="penilaiandudi49" value="1">1. Tidak Penting</p></td><td><p><input type="radio" name="penilaiandudi49" value="2">2. Cukup</p></td><td><p><input type="radio" name="penilaiandudi49" value="3">3. Penting</p></td><td><p><input type="radio" name="penilaiandudi49" value="4">4. Sangat Penting</p></td>

        <td><p><input type="radio" name="penilaiandudi50" value="1">1. Tidak Puas</p></td><td><p><input type="radio" name="penilaiandudi50" value="2">2. Cukup</p></td><td><p><input type="radio" name="penilaiandudi50" value="3">3. Penting</p></td><td><p><input type="radio" name="penilaiandudi50" value="4">4. Sangat Penting</p></td></tr>

        <td>16.</td><td>Stabilitas emosi</td><td><p><input type="radio" name="penilaiandudi51" value="1">1. Tidak Penting</p></td><td><p><input type="radio" name="penilaiandudi51" value="2">2. Cukup</p></td><td><p><input type="radio" name="penilaiandudi51" value="3">3. Penting</p></td><td><p><input type="radio" name="penilaiandudi51" value="4">4. Sangat Penting</p></td>

        <td><p><input type="radio" name="penilaiandudi52" value="1">1. Tidak Puas</p></td><td><p><input type="radio" name="penilaiandudi52" value="2">2. Cukup</p></td><td><p><input type="radio" name="penilaiandudi52" value="3">3. Penting</p></td><td><p><input type="radio" name="penilaiandudi52" value="4">4. Sangat Penting</p></td></tr>

        <td>17.</td><td>Kesehatan fisik</td><td><p><input type="radio" name="penilaiandudi53" value="1">1. Tidak Penting</p></td><td><p><input type="radio" name="penilaiandudi53" value="2">2. Cukup</p></td><td><p><input type="radio" name="penilaiandudi53" value="3">3. Penting</p></td><td><p><input type="radio" name="penilaiandudi53" value="4">4. Sangat Penting</p></td>

        <td><p><input type="radio" name="penilaiandudi54" value="1">1. Tidak Puas</p></td><td><p><input type="radio" name="penilaiandudi54" value="2">2. Cukup</p></td><td><p><input type="radio" name="penilaiandudi54" value="3">3. Penting</p></td><td><p><input type="radio" name="penilaiandudi54" value="4">4. Sangat Penting</p></td></tr>

        <td>18.</td><td>Inisiatif</td><td><p><input type="radio" name="penilaiandudi55" value="1">1. Tidak Penting</p></td><td><p><input type="radio" name="penilaiandudi55" value="2">2. Cukup</p></td><td><p><input type="radio" name="penilaiandudi55" value="3">3. Penting</p></td><td><p><input type="radio" name="penilaiandudi55" value="4">4. Sangat Penting</p></td>

        <td><p><input type="radio" name="penilaiandudi56" value="1">1. Tidak Puas</p></td><td><p><input type="radio" name="penilaiandudi56" value="2">2. Cukup</p></td><td><p><input type="radio" name="penilaiandudi56" value="3">3. Penting</p></td><td><p><input type="radio" name="penilaiandudi56" value="4">4. Sangat Penting</p></td></tr>

        <td>19.</td><td>Tanggung jawab</td><td><p><input type="radio" name="penilaiandudi57" value="1">1. Tidak Penting</p></td><td><p><input type="radio" name="penilaiandudi57" value="2">2. Cukup</p></td><td><p><input type="radio" name="penilaiandudi57" value="3">3. Penting</p></td><td><p><input type="radio" name="penilaiandudi57" value="4">4. Sangat Penting</p></td>

        <td><p><input type="radio" name="penilaiandudi58" value="1">1. Tidak Puas</p></td><td><p><input type="radio" name="penilaiandudi58" value="2">2. Cukup</p></td><td><p><input type="radio" name="penilaiandudi58" value="3">3. Penting</p></td><td><p><input type="radio" name="penilaiandudi58" value="4">4. Sangat Penting</p></td></tr>

        <td>20.</td><td>Kemampuan adaptasi</td><td><p><input type="radio" name="penilaiandudi59" value="1">1. Tidak Penting</p></td><td><p><input type="radio" name="penilaiandudi59" value="2">2. Cukup</p></td><td><p><input type="radio" name="penilaiandudi59" value="3">3. Penting</p></td><td><p><input type="radio" name="penilaiandudi59" value="4">4. Sangat Penting</p></td>

        <td><p><input type="radio" name="penilaiandudi60" value="1">1. Tidak Puas</p></td><td><p><input type="radio" name="penilaiandudi60" value="2">2. Cukup</p></td><td><p><input type="radio" name="penilaiandudi60" value="3">3. Penting</p></td><td><p><input type="radio" name="penilaiandudi60" value="4">4. Sangat Penting</p></td></tr>

        <td>21.</td><td>Kesiapan bekerja dimana saja</td><td><p><input type="radio" name="penilaiandudi61" value="1">1. Tidak Penting</p></td><td><p><input type="radio" name="penilaiandudi61" value="2">2. Cukup</p></td><td><p><input type="radio" name="penilaiandudi61" value="3">3. Penting</p></td><td><p><input type="radio" name="penilaiandudi61" value="4">4. Sangat Penting</p></td>

        <td><p><input type="radio" name="penilaiandudi62" value="1">1. Tidak Puas</p></td><td><p><input type="radio" name="penilaiandudi62" value="2">2. Cukup</p></td><td><p><input type="radio" name="penilaiandudi62" value="3">3. Penting</p></td><td><p><input type="radio" name="penilaiandudi62" value="4">4. Sangat Penting</p></td></tr>
    <tr>
    </table>
	</br>
	<p>
		<input type="submit" class="btn btn-danger btn-md" name="submit_8" value="SIMPAN">
	</p>
 </form>
 </div>

</body>
</html>