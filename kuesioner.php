<?php
  //cek apakah user sudah login, cek kehadiran session nama
	//jika belum langsung redirect ke login.php
	
  // buka koneksi dengan MySQL
  include("connection.php");
  
  // ambil pesan jika ada  
  if (isset($_GET["pesan"])) {
      $pesan = $_GET["pesan"];
  }
 
  //cek apakah form telah di submit
  if (isset($_POST["submit"])) {
	  //form telah di submit proses data
	  
	  //ambil semua nilai form
	  // $id_alumni= htmlentities(strip_tags(trim($_POST["id_alumni"])));
	  $nama_lengkap= htmlentities(strip_tags(trim($_POST["nama"])));
	  $posisi_jabatan= htmlentities(strip_tags(trim($_POST["posisi_jabatan"])));
	  $no_handphone= htmlentities(strip_tags(trim($_POST["no_handphone"])));
	  $alamat_email= htmlentities(strip_tags(trim($_POST["alamat_email"])));
	  
	  //siapkan variabel untuk menampung pesan error
	  $pesan_error= "";
	  
	  //cek apakah id_alumni sudah diisi
	  // if (empty($no_handphone)) {
		 //  $pesan_error .= "No Handphone Wajib diisi <br>";
	  // }

	  	//kode supplier harus berupa 2 digit huruf dan dan 2 digit angka
		// else if(!preg_match("/^[0-9]{14}$/" , $no_handphone)) {
		// 	$pesan_error .= "Format Penulisan No Handphone Salah !!! <br>";
		// }

	 //   //kode supplier harus berupa 2 digit huruf dan dan 2 digit angka
		// else if(!preg_match("/^[0-9]{14}$/" , $id_alumni)) {
		// 	$pesan_error .= "Format Penulisan ID Alumni Salah !!! <br>";
		// }
	 //  //kode supplier harus berupa 2 digit huruf dan dan 2 digit angka
		// else if(!preg_match("/^[0-9]{2}+TI+[a-d]{1}[0-9]{4}$/", $id_alumni)) {
		// 	$pesan_error .= "Format Penulisan ID Alumni Salah !!! <br>";
		// }
	  
	  // cek ke database, apakah sudah ada nomor NIM yang sama    
	  // filter data $nim
      // $no_handphone = mysqli_real_escape_string($link,$no_handphone);
      // $query = "SELECT * FROM data_pribadi WHERE no_handphone='$no_handphone'";
      // $hasil_query = mysqli_query($link, $query);
  
      // cek jumlah record (baris), jika ada, $nim tidak bisa diproses
    //   $jumlah_data = mysqli_num_rows($hasil_query);
    //   if ($jumlah_data >= 1 ) {
		  // $pesan_error .= "No. Handphone sudah digunakan !!! <br>";  
    //   }
	  
	  // //cek apakah no handphone sudah diisi
	  // if (empty($no_handphone)) {
		 //  $pesan_error .= "No handphone Wajib diisi <br>";
	  // }

	  //cek apakah nama sudah diisi
	  if (empty($nama_lengkap)) {
		  $pesan_error .= "Nama Wajib diisi <br>";
	  }

	  //cek apakah posisi jabatan sudah diisi 
	  if (empty($posisi_jabatan)) {
		  $pesan_error .= "Posisi/Jabatan Wajib diisi <br>";
	  }
	  
	  //siapkan variabel untuk menggenerate pilihan jenis kelamin
	  // $laki_laki= ""; $perempuan= "";
	  
	  // switch($jenis_kelamin) {
		 //  case"laki-laki" : $laki_laki = "checked"; break;
		 //  case"perempuan" : $perempuan = "checked"; break;
	  // }
	  
	  //cek apakah asal sma sudah diisi
	  // if (empty($asal_provinsi)) {
		 //  $pesan_error .= "Asal Provinsi Wajib diisi <br>";
	  // }
	  
	  // //cek apakah tempat_lahir sudah diisi
	  // if (empty($tempat_lahir)) {
		 //  $pesan_error .= "Tempat Lahir Wajib diisi <br>";
	  // }
	  
	  //cek apakah Email sudah diisi
	  if (empty($alamat_email)) {
		  $pesan_error .= "E-mail Wajib diisi <br>";
	  }
	  else if (!preg_match("/.+@.+\..+/", $alamat_email)) {
		  $pesan_error .= "Format Penulisan E-mail salah <br>";
	  }
	  
	  //jika tidak ada error input data ke database
	  if ($pesan_error === "") {
		  
		  //filter semua data
		  $no_handphone= mysqli_real_escape_string($link,$no_handphone);
		  $nama_lengkap= mysqli_real_escape_string($link,$nama_lengkap);
		  $posisi_jabatan= mysqli_real_escape_string($link,$posisi_jabatan);
		  $alamat_email= mysqli_real_escape_string($link,$alamat_email);
		  
		  // //gabungkan format tanggal agar sesuai dengan format MySQL
		  // $tgl_lhr= $thn."-".$bln."-".$tgl ;
		  
		  //buat dan jalankan query INSERT
		  $query = "INSERT INTO `data_pribadi`(`nama_lengkap`, `posisi_jabatan`, `no_handphone`, `alamat_email`) VALUES ('$nama_lengkap','$posisi_jabatan','$no_handphone','$alamat_email')";
		  
		  $result= mysqli_query($link,$query);
		  
		  //periksa hasil query
		  if ($result) {
			  //insert berhasil redirect ke kuesioner_2.php + pesan
			  $pesan= "Data Pribadi dengan Nama Lengkap : \"<b>$nama_lengkap</b>\" sudah berhasil di simpan ";
			  $pesan= urlencode ($pesan);

			  // UPDATE: mendapatkan id data pribadi
			  $id_datapribadi = mysqli_insert_id($link);

			  header ("location: kuesioner_2-1.php?id=$id_datapribadi&pesan={$pesan}");
		  }
		  else {
		  		print_r($query);
			  die("Query gagal di jalankan !! " .mysqli_connect_errno($link) ."-" .mysqli_connect_error($link));
		  }
	  }
  }
  else {
	  //form belum di submit, berikan nilai awal untuk semua isian form
	  $pesan_error= "";
	  $no_handphone= "";
	  $nama_lengkap= "";
	  $posisi_jabatan= "";
	  $alamat_email= "";
  }
 
  // // siapkan array untuk nama provinsi
  // $arr_provinsi = array( "1"=>"Aceh",
  //                   "2"=>"Bali",
  //                   "3"=>"Banten",
  //                   "4"=>"Bengkulu",
  //                   "5"=>"Gorontalo",
  //                   "6"=>"DKI Jakarta",
  //                   "7"=>"Jambi",
  //                   "8"=>"Jawa Barat",
  //                   "9"=>"Jawa Tengah",
  //                   "10"=>"Jawa Timur",
  //                   "11"=>"Kalimantan Barat",
  //                   "12"=>"Kalimantan Selatan",
  //                   "13"=>"Kalimantan Tengah",
  //                   "14"=>"Kalimantan Timur",
  //                   "15"=>"Kalimantan Utara",
  //                   "16"=>"Kep. Bangka Belitung",
  //                   "17"=>"Kep. Riau",
  //                   "18"=>"Lampung",
  //                   "19"=>"Maluku",
  //                   "20"=>"Maluku Utara",
  //                   "21"=>"Nusa Tenggara Barat",
  //                   "22"=>"Nusa Tenggara Timur",
  //                   "23"=>"Papua",
  //                   "24"=>"Papua Barat",
  //                   "25"=>"Riau",
  //                   "26"=>"Sulawesi Barat",
  //                   "27"=>"Sulawesi Selatan",
  //                   "28"=>"Sulawesi Tengah",
  //                   "29"=>"Sulawesi Tenggara",
  //                   "30"=>"Sulawesi Utara",
  //                   "31"=>"Sumatera Barat",
  //                   "32"=>"Sumatera Selatan",
  //                   "33"=>"Sumatera Utara",
  //                   "34"=>"Yogyakarta", ); 

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
  <link href="css/kuesioner.css" rel="stylesheet">
 </head>
<body>
<?php //masukan file header untuk menampilkan header
	  include_once ("header.php");
?>
<div class="container">
<?php
	  // tampilkan pesan jika adas
	  if (isset($pesan)) {
			echo "<div class=\"alert alert-success\">$pesan</div>";
		}

	  //tampilkan pesan_error jika ada
	  if ($pesan_error !== "") {
		  echo "<div class=\"alert alert-danger \">$pesan_error</div> ";
		}
?>

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
	<form class="inner-login" action="kuesioner.php" method="post">
	<fieldset class="scheduler-border">
	<legend class="scheduler-border"><b>I. Informasi Personal</b></legend>
		<p class="form-group">
			<p class="bg-info">Nama Lengkap : </p> 
			<input type="text" name="nama"  class="form-control" value="<?php echo $nama_lengkap; ?>">
		</p>
		<p class="form-group">
			<p class="bg-info">Posisi/Jabatan : </p> 
			<textarea cols="25" name="posisi_jabatan" class="form-control"> <?php echo $posisi_jabatan; ?> </textarea>
		</p>
		<p class="form-group">
			<p class="bg-info">Nomor Telp. : </p>
			<input type="text" name="no_handphone" class="form-control" value="<?php echo $no_handphone; ?>">
		</p>
		<p class="form-group">
			<p class="bg-info"> Alamat E-mail : </p>
			<input type="text" name="alamat_email" class="form-control" value="<?php echo $alamat_email; ?>">
		</p>
		</div>
		<div id="footer">
			Copyright © <?php echo date("Y"); ?> Kepuasan Pengguna
		</div>
</div>
</fieldset>
  <br>
  <p>
    <center><input type="submit" class="btn btn-danger btn-md" name="submit" value="Next >>"></center>
  </p>
</form> 
</div>
</div>
</body>
</html>