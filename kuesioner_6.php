<?php
  // buka koneksi dengan MySQL
  include("connection.php");
  
  //cek apakah form telah di submit 
  if (isset($_POST["submit_6"])) {
  	  $id_datapribadi= "";
	  $penilaiandudi9= "";
	  $penilaiandudi10= "";
	  $penilaiandudi11= "";

	  //ambil semua nilai form
	  $id_datapribadi= htmlentities(strip_tags(trim($_POST["id_datapribadi"])));
	  $penilaiandudi9= htmlentities(strip_tags(trim($_POST["penilaiandudi9"])));
	  $penilaiandudi10= htmlentities(strip_tags(trim($_POST["penilaiandudi10"])));
	  $penilaiandudi11= htmlentities(strip_tags(trim($_POST["penilaiandudi11"])));
	  
	  //siapkan variabel untuk menampung pesan error
	  $pesan_error= "";
	  
	  // cek ke database, apakah sudah ada nomor id_alumni yang sama    
      // filter data $id_alumni
      // $no_handphone = mysqli_real_escape_string($link,$no_handphone);
      // $query = "SELECT * FROM penilaian_dudi_terhadap_magangpraktekkerja WHERE id_datapribadi='$id_datapribadi'";
      // $hasil_query = mysqli_query($link, $query);
  
      // cek jumlah record (baris), jika ada, $id_alumni tidak bisa diproses
      // $jumlah_data = mysqli_num_rows($hasil_query);
      //  if ($jumlah_data >= 1 ) {
      //   $pesan_error .= "Data No. Handphone tersebut sudah di simpan. <br>";  
      // }
	  
	  //jika tidak ada error input data ke database
	  if ($pesan_error === "") {
		  $id_datapribadi= mysqli_real_escape_string($link,$id_datapribadi);
		  $penilaiandudi9= mysqli_real_escape_string($link,$penilaiandudi9);
		  $penilaiandudi10= mysqli_real_escape_string($link,$penilaiandudi10);
		  $penilaiandudi11= mysqli_real_escape_string($link,$penilaiandudi11);
		  
		  // //gabungkan format tanggal agar sesuai dengan format MySQL
		  // $tgl_mulai_bekerja= $thn."-".$bln."-".$tgl ;
		  
		  //buat dan jalankan query INSERT
		  $query= "INSERT INTO `penilaian_dudi_terhadap_magangpraktekkerja`(`penilaiandudi9`, `penilaiandudi10`, `penilaiandudi11`,`id_datapribadi`) VALUES ('$penilaiandudi9','$penilaiandudi10', '$penilaiandudi11','$id_datapribadi')";
		  print($query);
		  
		  $result= mysqli_query ($link,$query);
		  
		  //periksa hasil query
		  if ($result) {
			  //insert berhasil redirect ke kuesioner_2.php + pesan
			  $pesan= "Data yang Anda input sudah berhasil Tersimpan semua, Terima Kasih...";
			  $pesan= urlencode ($pesan);

			  // UPDATE: id = id data pribadi
			  header ("location: kuesioner_7.php?id=$id_datapribadi&pesan={$pesan}");
		  }
		  else {
			  die("Query gagal di jalankan !! " .mysqli_connect_errno($link) ."-" .mysqli_connect_error($link));
		  }

	  }
	  

  }
  else {
	  //form belum disubmit berikan nilai awal untuk semua isian form
	  $pesan_error= "";
	  $id_datapribadi= "";
	  $penilaiandudi9= "";
	  $penilaiandudi10= "";
	  $penilaiandudi11= "";
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
	<form class="inner-login" action="kuesioner_6.php" method="post">
	<fieldset class="scheduler-border">
	<legend class="scheduler-border"><b>V. Penilaian Industri (DUDI) dalam Kurikulum ITS</b></legend>
		<!-- <p class="form-group"></p>
			<p class="bg-info">No. Handphone : </p> 
			<input type=text readonly=readonly name="no_handphone" value='<?php echo"$_GET[id]"; ?>' class="form-control"> -->

		<!-- UPDATE: mendapatkan data id data pribadi -->
	  	<input type="hidden" name="id_datapribadi"  class="form-control" value="<?php echo"$_GET[id]"; ?>">
			
		<p class="bg-info">
			<label>5.1. Menurut Anda, seberapa penting lama masa studi Lulusan ITS terhadap kompetensi di dunia industri (DUDI)?</label> 
			<p><input type="radio" name="penilaiandudi9" value="1. Tidak penting">1. Tidak Penting</p>
			<p><input type="radio" name="penilaiandudi9" value="2. Cukup">2. Cukup</p>
			<p><input type="radio" name="penilaiandudi9" value="3. Penting">3. Penting</p>
			<p><input type="radio" name="penilaiandudi9" value="4. Sangat Penting">4. Sangat Penting</p>
		</p>
		<p class="bg-info">
			<label>5.2. Menurut Anda, apakah IPK alumni ITS telah sesuai dengan kompetensi yang dimilikinya? </label> 
			<p><input type="radio" name="penilaiandudi10" value="1. Tidak Sesuai">1. Tidak Sesuai</p>
			<p><input type="radio" name="penilaiandudi10" value="2. Cukup">2. Cukup</p>
			<p><input type="radio" name="penilaiandudi10" value="3. Sesuai">3. Sesuai</p>
			<p><input type="radio" name="penilaiandudi10" value="4. Sangat Sesuai">4. Sangat Sesuai</p>
		</p>
		<p class="bg-info">
			<label>5.3. Tingkat Kepuasan Industri terhadap kompetensi lulusan ITS (<em>hard skill</em> dan <em>soft skill</em> )?</label> 
			<p><input type="radio" name="penilaiandudi11" value="1. Tidak Puas">1. Tidak Puas</p>
			<p><input type="radio" name="penilaiandudi11" value="2. Cukup">2. Cukup</p>
			<p><input type="radio" name="penilaiandudi11" value="3. Puas">3. Puas</p>
			<p><input type="radio" name="penilaiandudi11" value="4. Sangat Puas">4. Sangat Puas</p>
		</p>
	</fieldset>
	<br>
	<p>
		<input type="submit" class="btn btn-danger btn-md" name="submit_6" value="Next >>">
	</p>
 </form>
 </div>

</body>
</html>