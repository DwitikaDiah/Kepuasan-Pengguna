<?php
  // buka koneksi dengan MySQL
  include("connection.php");
  
  //cek apakah form telah di submit 
  if (isset($_POST["submit_7"])) {
	  $penilaiandudi12= "";
	  $penilaiandudi13= "";
	  $penilaiandudi14= "";
	  $penilaiandudi15= "";
	  $penilaiandudi16= "";
	  $penilaiandudi17= "";
	  $penilaiandudi18= "";
	  $penilaiandudi19= "";
	  $penilaiandudi20= "";
	  $id_datapribadi= "";
	 
	  //ambil semua nilai form
	  $penilaiandudi12= htmlentities(strip_tags(trim($_POST["penilaiandudi12"])));
	  $penilaiandudi13= htmlentities(strip_tags(trim($_POST["penilaiandudi13"])));
	  $penilaiandudi14= htmlentities(strip_tags(trim($_POST["penilaiandudi14"])));
	  $penilaiandudi15= htmlentities(strip_tags(trim($_POST["penilaiandudi15"])));
	  $penilaiandudi16= htmlentities(strip_tags(trim($_POST["penilaiandudi16"])));
	  $penilaiandudi17= htmlentities(strip_tags(trim($_POST["penilaiandudi17"])));
	  $penilaiandudi18= htmlentities(strip_tags(trim($_POST["penilaiandudi18"])));
	  $penilaiandudi19= htmlentities(strip_tags(trim($_POST["penilaiandudi19"])));
	  $penilaiandudi20= htmlentities(strip_tags(trim($_POST["penilaiandudi20"])));
	  $id_datapribadi= htmlentities(strip_tags(trim($_POST["id_datapribadi"])));
	  
	  //siapkan variabel untuk menampung pesan error
	  $pesan_error= "";
	  
	  // cek ke database, apakah sudah ada nomor id_alumni yang sama    
      // filter data $id_alumni
      // $no_handphone = mysqli_real_escape_string($link,$no_handphone);
      // $query = "SELECT * FROM evaluasiindustriterhadaplulusanits WHERE id_datapribadi='$id_datapribadi','$penilaiandudi12','$penilaiandudi13','$penilaiandudi14','$penilaiandudi15','$penilaiandudi16','$penilaiandudi17','$penilaiandudi18','$penilaiandudi19','$penilaiandudi20'";
      // $hasil_query = mysqli_query($link, $query);
  
      // cek jumlah record (baris), jika ada, $id_alumni tidak bisa diproses
      // $jumlah_data = mysqli_num_rows($hasil_query);
      //  if ($jumlah_data >= 1 ) {
      //   $pesan_error .= "Data No. Handphone tersebut sudah di simpan. <br>";  
      // }
	  
	  //jika tidak ada error input data ke database
	  if ($pesan_error === "") {
		  $penilaiandudi12= mysqli_real_escape_string($link,$penilaiandudi12);
		  $penilaiandudi13= mysqli_real_escape_string($link,$penilaiandudi13);
		  $penilaiandudi14= mysqli_real_escape_string($link,$penilaiandudi14);
		  $penilaiandudi15= mysqli_real_escape_string($link,$penilaiandudi15);
		  $penilaiandudi16= mysqli_real_escape_string($link,$penilaiandudi16);
		  $penilaiandudi17= mysqli_real_escape_string($link,$penilaiandudi17);
		  $penilaiandudi18= mysqli_real_escape_string($link,$penilaiandudi18);
		  $penilaiandudi19= mysqli_real_escape_string($link,$penilaiandudi19);
		  $penilaiandudi20= mysqli_real_escape_string($link,$penilaiandudi20);
		  $id_datapribadi= mysqli_real_escape_string($link,$id_datapribadi);
		  
		  // //gabungkan format tanggal agar sesuai dengan format MySQL
		  // $tgl_mulai_bekerja= $thn."-".$bln."-".$tgl ;
		  

		  //buat dan jalankan query INSERT
		foreach($_POST['check_list'] as $selected){
		  $query= "INSERT INTO `evaluasiindustriterhadaplulusanits`( `penilaiandudi12`, `penilaiandudi13`, `penilaiandudi14`, `penilaiandudi15`, `penilaiandudi16`, `penilaiandudi17`, `penilaiandudi18`, `penilaiandudi19`, `penilaiandudi20`,`id_datapribadi`) VALUES ('$penilaiandudi12','$penilaiandudi13','$penilaiandudi14','$penilaiandudi15','$penilaiandudi16','$selected','$selected','$selected', '$penilaiandudi20','$id_datapribadi') ";

		  $result= mysqli_query ($link,$query);
		  }

		  //periksa hasil query
		  if ($result) {
			  //insert berhasil redirect ke kuesioner_2.php + pesan
			  $pesan= "Data yang Anda input sudah berhasil Tersimpan semua, Terima Kasih...";
			  $pesan= urlencode ($pesan);

			  // UPDATE: id = id data pribadi
			  header ("location: kuesioner_8.php?id=$id_datapribadi&pesan={$pesan}");
		  }
		  else {
			  die("Query gagal di jalankan !! " .mysqli_connect_errno($link) ."-" .mysqli_connect_error($link));
		  }

	  }
	  

  }
  else {
	  //form belum disubmit berikan nilai awal untuk semua isian form
	  $pesan_error= "";
	  $penilaiandudi12= "";
	  $penilaiandudi13= "";
	  $penilaiandudi14= "";
	  $penilaiandudi15= "";
	  $penilaiandudi16= "";
	  $penilaiandudi17= "";
	  $penilaiandudi18= "";
	  $penilaiandudi19= "";
	  $penilaiandudi20= "";
	  $id_datapribadi= "";
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
  <title>Sistem Kepuasan Pengguna</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/jquery-2.0.3.min"> </script>
  <script src="js/bootstrap.min"> </script>
  <link rel="icon" href="favicon.png" type="image/png" >
  <link href="css/kuesioner_2.css" rel="stylesheet">
 </head>
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
	<form class="inner-login" action="kuesioner_7.php" method="post">
	<fieldset class="scheduler-border">
	<legend class="scheduler-border"><b>VI. Evaluasi Industri terhadap Program Magang/OJT/Kerja Praktik</b></legend>
	<!-- 	<p class="form-group"></p>
			<p class="bg-info">No. Handphone : </p> 
			<input type=text readonly=readonly name="no_handphone" value='<?php echo"$_GET[id]"; ?>' class="form-control">
			 -->

		<!-- UPDATE: mendapatkan data id data pribadi -->
	  	<input type="hidden" name="id_datapribadi"  class="form-control" value="<?php echo"$_GET[id]"; ?>">

		<p class="bg-info">
			<label>6.1 Tingkat kepentingan program magang/OJT/kerja praktik untuk meningkatkan kompetensi mahasiswa ITS</label> 
			<p><input type="radio" name="penilaiandudi12" value="1. Tidak penting">1. Tidak Penting</p>
			<p><input type="radio" name="penilaiandudi12" value="2. Cukup">2. Cukup</p>
			<p><input type="radio" name="penilaiandudi12" value="3. Penting">3. Penting</p>
			<p><input type="radio" name="penilaiandudi12" value="4. Sangat Penting">4. Sangat Penting</p>
		</p>
		<p class="form-group">
			<p class="bg-info">6.2 Berapa lama waktu minimal magang menurut perusahaan Anda?</p>
			<input type="text" name="penilaiandudi13" placeholder="Ex. 3 Bulan" class="form-control" value="<?php echo $penilaiandudi13; ?>">
		</p>
		<p class="bg-info">
			<label>6.3 Apakah perusahaan Anda bersedia membuka/menerima program magang/OJT /kerja praktik bagi mahasiswa ITS?</label> 
			<p><input type="radio" name="penilaiandudi14" value="Ya">Ya</p>
			<p><input type="radio" name="penilaiandudi14" value="Tidak">Tidak</p>
			<input type="text" name="penilaiandudi15" class="form-control" value="<?php echo $penilaiandudi15; ?>">
		</p>
		<p class="bg-info">
			<label>6.4 Apakah di perusahaan Anda sebelumnya telah menerima mahasiswa ITS untuk program magang/OJT/kerja praktik?</label> 
			<p><input type="radio" name="penilaiandudi16" value="Ya">Ya</p>
			<p><input type="radio" name="penilaiandudi16" value="Tidak">Tidak</p>
		</p>
		<p class="bg-info">
			<label>6.5 Posisi/Bidang di perusahaan Anda yang terbuka untuk program magang/OJT/kerja praktik (Pilihan dapat lebih dari 1)</label> 
			<p><input type="checkbox" name="check_list[]" value="Data entry">Data entry</p>
			<p><input type="checkbox" name="check_list[]" value="User Acceptance Testing">User Acceptance Testing</p>
			<p><input type="checkbox" name="check_list[]" value="Data Analyst">Data Analyst</p>
			<p><input type="checkbox" name="check_list[]" value="Programmer">Programmer</p>
		</p>
		<p class="bg-info">
			<label> Jurusan/Departemen ITS yang dapat diterima untuk program magang/OJT/ kerja praktik magang/OJT/kerja praktik</label> 
			<table border="1">
        <caption></caption>

        <td><p><input type="checkbox" name="check_list[]" value="Fisika">Fisika</p></td><td><p><input type="checkbox" name="check_list[]" value="Teknik Sistem Perkapalan">Teknik Sistem Perkapalan</p></td><td><p><input type="checkbox" name="check_list[]" value="Perencanaan Wilayah Kota">Perencanaan Wilayah Kota</p></td></tr>

        <td><p><input type="checkbox" name="check_list[]" value="Kimia">Kimia</p></td><td><p><input type="checkbox" name="check_list[]" value="Teknik Kelautan">Teknik Kelautan</p></td><td><p><input type="checkbox" name="check_list[]" value="Desain Produk">Desain Produk</p></td></tr>

        <td><p><input type="checkbox" name="check_list[]" value="Biologi">Biologi</p></td><td><p><input type="checkbox" name="check_list[]" value="Teknik Transportasi Laut">Teknik Transportasi Laut</p></td><td><p><input type="checkbox" name="check_list[]" value="Desain Interior">Desain Interior</p></td></tr>

        <td><p><input type="checkbox" name="check_list[]" value="Teknik Mesin">Teknik Mesin</p></td><td><p><input type="checkbox" name="check_list[]" value="Informatika">Informatika</p></td><td><p><input type="checkbox" name="check_list[]" value="Manajemen Bisnis">Manajemen Bisnis</p></td></tr>

        <td><p><input type="checkbox" name="check_list[]" value="Teknik Kimia">Teknik Kimia</p></td><td><p><input type="checkbox" name="check_list[]" value="Sistem Informasi">Sistem Informasi</p></td><td><p><input type="checkbox" name="check_list[]" value="Manajemen Teknologi">Manajemen Teknologi</p></td></tr>

        <td><p><input type="checkbox" name="check_list[]" value="Teknik Fisika">Teknik Fisika</p></td><td><p><input type="checkbox" name="check_list[]" value="Teknologi Informasi">Teknologi Informasi</p></td><td><p><input type="checkbox" name="check_list[]" value="Studi Pembangunan">Studi Pembangunan</p></td></tr>

        <td><p><input type="checkbox" name="check_list[]" value="Teknik Industri">Teknik Industri</p></td><td><p><input type="checkbox" name="pcheck_list[]" value="Matematika">Matematika</p></td><td><p><input type="checkbox" name="check_list[]" value="Teknik Infrastruktur Sipil">Teknik Infrastruktur Sipil</p></td></tr>

        <td><p><input type="checkbox" name="check_list[]" value="Teknik Material">Teknik Material</p></td><td><p><input type="checkbox" name="check_list[]" value="Statistika">Statistika</p></td><td><p><input type="checkbox" name="penilaiandudi34" value="Teknik Mesin Industri">Teknik Mesin Industri</p></td></tr>

        <td><p><input type="checkbox" name="check_list[]" value="Teknik Sipil">Teknik Sipil</p></td><td><p><input type="checkbox" name="check_list[]" value="Aktuaria">Aktuaria</p></td><td><p><input type="checkbox" name="check_list[]" value="Teknik Elektro Otomasi">Teknik Elektro Otomasi</p></td></tr>

        <td><p><input type="checkbox" name="check_list[]" value="Teknik Lingkungan">Teknik Lingkungan</p></td><td><p><input type="checkbox" name="check_list[]" value="Teknik Elektro">Teknik Elektro</p></td><td><p><input type="checkbox" name="check_list[]" value="Teknik Kimia Industri">Teknik Kimia Industri</p></td></tr>

        <td><p><input type="checkbox" name="check_list[]" value="Teknik Geomatika">Teknik Geomatika</p></td><td><p><input type="checkbox" name="check_list[]" value="Teknik Elektro">Teknik Elektro</p></td><td><p><input type="checkbox" name="check_list[]" value="Teknik Instrumentasi">Teknik Instrumentasi</p></td></tr>

        <td><p><input type="checkbox" name="check_list[]" value="Teknik Geofisika">Teknik Geofisika</p></td><td><p><input type="checkbox" name="check_list[]" value="Teknik Komputer">Teknik Komputer</p></td><td><p><input type="radio" name="penilaiandudi42" value="Statistika Bisnis">Statistika Bisnis</p></td></tr>

        <td><p><input type="checkbox" name="check_list[]" value="Teknik Perkapalan">Teknik Perkapalan</p></td><td><p><input type="checkbox" name="check_list[]" value="Teknik Komputer">Teknik Komputer</p></td><td><p><input type="checkbox" name="check_list[]" value="Teknik Biomedik">Teknik Biomedik</p></td></tr>

        <td><p><input type="checkbox" name="check_list[]" value="Arsitektur">Arsitektur</p></td></tr>
        
    </table>
		</p>
		<p class="bg-info">
			<label>6.7 Kompetensi (teknis, pengetahuan, manajerial, <em>soft skill</em>) yang dibutuhkan perusahaan dari program magang? (Pilihan dapat lebih dari 1)</label> 
			<p><input type="checkbox" name="check_list[]" value="Teknis">Teknis</p>
			<p><input type="checkbox" name="check_list[]" value="Pengetahuan">Pengetahuan</p>
			<p><input type="checkbox" name="check_list[]" value="Manajerial">Manajerial</p>
			<p><input type="checkbox" name="check_list[]" value="<em>Soft skill</em>"><em>Soft skill</em></p>
			Lainnya: <input type="text" name="check_list[]" class="form-control" value="<?php echo $penilaiandudi19 ; ?>">
		</p>
		<p class="form-group">
			<p class="bg-info">6.8 Pada bulan apa program magang/OJT/kerja praktik dapat dilaksanakan di perusahaan Anda?</p> 
			<input type="text" name="penilaiandudi20" placeholder="Ex: Januari - Februari"   class="form-control" value="<?php echo $penilaiandudi20; ?>">
		</p>
	</fieldset>
	<br>
	<p>
		<input type="submit" class="btn btn-danger btn-md" name="submit_7" value="Next >>">
	</p>
 </form>
 </div>

</body>
</html>