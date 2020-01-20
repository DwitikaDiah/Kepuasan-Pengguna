<?php
  // buka koneksi dengan MySQL
  include("connection.php");
  
  //cek apakah form telah di submit 
  if (isset($_POST["submit_3"])) {

	  $penilaiandudi1= "";
	  $id_datapribadi= "";
	 
	  // //ambil semua nilai form

	  $penilaiandudi1= htmlentities(strip_tags(trim($_POST["penilaiandudi1"])));
	  $id_datapribadi= htmlentities(strip_tags(trim($_POST["id_datapribadi"])));
	  
	  //siapkan variabel untuk menampung pesan error
	  $pesan_error= "";
	  
	  // cek ke database, apakah sudah ada nomor id_alumni yang sama    
      // filter data $id_alumni
      // $no_handphone = mysqli_real_escape_string($link,$no_handphone);
      // $query = "SELECT * FROM penilaian_dudi_terhadap_kurikulum_its WHERE no_handphone='$no_handphone','$penilaiandudi1'";
      // $hasil_query = mysqli_query($link, $query);
  
      // cek jumlah record (baris), jika ada, $id_alumni tidak bisa diproses
      // $jumlah_data = mysqli_num_rows($hasil_query);
      //  if ($jumlah_data >= 1 ) {
      //   $pesan_error .= "Data No. Handphone tersebut sudah di simpan. <br>";  
      // }
	  
	  //jika tidak ada error input data ke database
	  if ($pesan_error === "") {
		  // $no_handphone= mysqli_real_escape_string($link,$no_handphone);
	  	  // $id_datapribadi= mysqli_real_escape_string($link,$id_datapribadi);
		  $id_datapribadi= mysqli_real_escape_string($link,$id_datapribadi);
		  
		  // //gabungkan format tanggal agar sesuai dengan format MySQL
		  // $tgl_mulai_bekerja= $thn."-".$bln."-".$tgl ;
		  

		  //buat dan jalankan query INSERT

		foreach($_POST['check_list'] as $selected){
		  $query= "INSERT INTO `penilaian_dudi_terhadap_kurikulum_its`(`penilaiandudi1`,`id_datapribadi`) VALUES ('$selected','$id_datapribadi') ";
		  // print($query);
		  
		  $result= mysqli_query ($link,$query);
		 }

		  //periksa hasil query
		  if ($result) {
			  //insert berhasil redirect ke kuesioner_2.php + pesan
			  $pesan= "Data yang Anda input sudah berhasil Tersimpan semua, Terima Kasih...";
			  $pesan= urlencode ($pesan);

			  // UPDATE: id = id data pribadi
			  header ("location: kuesioner_6.php?id=$id_datapribadi&pesan={$pesan}");
		  }
		  else {
			  die("Query gagal di jalankan !! " .mysqli_connect_errno($link) ."-" .mysqli_connect_error($link));
		  }

	  }
	  

  }
  else {
	  //form belum disubmit berikan nilai awal untuk semua isian form
	  $pesan_error= "";
	  // $no_handphone= "";
	  $penilaiandudi1= "";
	  $id_datapribadi= "";
	  // $id_datapribadi= "";
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
	<form class="inner-login" action="kuesioner_3.php" method="post">
	<fieldset class="scheduler-border">
	<legend class="scheduler-border"><b>IV. Evaluasi Kerjasama Antara Industri (DUDI) dan ITS</b></legend>
<!-- 		<p class="form-group"></p>
			<p class="bg-info">No. Handphone : </p> 
			<input type=text readonly=readonly name="no_handphone" value='<?php echo"$_GET[id]"; ?>' class="form-control"> -->

		<!-- UPDATE: mendapatkan data id data pribadi -->
	  	<input type="hidden" name="id_datapribadi"  class="form-control" value="<?php echo"$_GET[id]"; ?>">

		<p class="bg-info">
			<label>Tipe Kerjasama Antara Industri dengan ITS (Pilihan boleh lebih dari satu)</label> 
			<p><input type="checkbox" name="check_list[]" value="a. Perekrutan Karyawan">a. Perekrutan Karyawan</p>
			<p><input type="checkbox" name="check_list[]" value="b. Magang/OJT/Kerja Praktik">b. Magang/OJT/Kerja Praktik</p>
			<p><input type="checkbox" name="check_list[]" value="c. Beasiswa">c. Beasiswa</p>
			<p><input type="checkbox" name="check_list[]" value="d. Kuliah Tamu">d. Kuliah Tamu</p>
			<p><input type="checkbox" name="check_list[]" value="e. Workshop/pelatihan/seminar">e. Workshop/pelatihan/seminar</p>
			<p><input type="checkbox" name="check_list[]" value="f. Penelitian">f. Penelitian</p>
			<p><input type="checkbox" name="check_list[]" value="g. Sponsorship">g. Sponsorship</p>
			<p><input type="checkbox" name="check_list[]" value="h. Narasumber Kurikulum">h. Narasumber Kurikulum</p>
			<!-- Lainnya: <input type="text" name="check_list[]" class="form-control" value="<?php echo $penilaiandudi1 ; ?>"> -->
		</p>
	</br>
	<p>
		<input type="submit" class="btn btn-danger btn-md" name="submit_3" value="Next >>">
	</p>
 </form>
 </div>

</body>
</html>