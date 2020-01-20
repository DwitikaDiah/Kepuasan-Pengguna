<?php
  // buka koneksi dengan MySQL
  include("connection.php");
  
  //cek apakah form telah di submit 
  if (isset($_POST["submit_2-2"])) {
	 
	  //ambil semua nilai form
	  $alumni= htmlentities(strip_tags(trim($_POST["alumni"])));
	  $jabatan= htmlentities(strip_tags(trim($_POST["jabatan"])));
	  $asaljurusan= htmlentities(strip_tags(trim($_POST["asaljurusan"])));
	  $id_datapribadi= htmlentities(strip_tags(trim($_POST["id_datapribadi"])));
	  
	  //siapkan variabel untuk menampung pesan error
	  $pesan_error= "";
	  
	  //cek apakah id_alumni sudah diisi
	  // if(empty($no_handphone)) {
		 //  $pesan_error .= "No. Handphone Wajib Di isi !!! <br>";
	  // }

	  // // IPK wajib di isi berupa angka, tidak boleh kosong dan tidak boleh negatif
	  // if(empty($telepon_perusahaan)) {
		 //  $pesan_error .= "Telepon Perusahaan Wajib Di isi !!! <br>";
	  // }
	  
  	  //  if (!is_numeric($teleponperusahaan) OR ($teleponperusahaan <=0)) {
    	// 	$pesan_error .= "Telepon Perusahaan harus diisi dengan angka";
   		// }

   //    if(empty($alamat_perusahaan)) {
		 //  $pesan_error .= "Alamat Perusahaan Wajib Di isi !!! <br>";
	  // }
	  
	  //jika tidak ada error input data ke database
	  if ($pesan_error === "") {
		  // $no_handphone= mysqli_real_escape_string($link,$no_handphone);
		  // $no_handphone= mysqli_real_escape_string($link,$no_handphone);
		  // $emailperusahaan= mysqli_real_escape_string($link,$emailperusahaan);
		  // $teleponperusahaan= mysqli_real_escape_string($link,$teleponperusahaan);
		  // $alamatperusahaan= mysqli_real_escape_string($link,$alamatperusahaan);
		  $id_datapribadi= mysqli_real_escape_string($link,$id_datapribadi);

		  // //gabungkan format tanggal agar sesuai dengan format MySQL
		  // $tgl_mulai_bekerja= $thn."-".$bln."-".$tgl ;
		  

		  //buat dan jalankan query INSERT

		foreach($_POST['check_list'] as $selected){
		  $query= "INSERT INTO `profilalumni`(`alumni`, `jabatan`, `asaljurusan`, `id_datapribadi`) VALUES ('$alumni','$jabatan','$selected', '$id_datapribadi') ";
		  // print($query);

		  $result= mysqli_query ($link,$query);
		  }

		  //periksa hasil query
		  if ($result) {
			  //insert berhasil redirect ke kuesioner_2.php + pesan
			  $pesan= "Data yang Anda input sudah berhasil Tersimpan semua, Terima Kasih...";
			  $pesan= urlencode ($pesan);

			  // UPDATE: id = id data pribadi
			  header ("location: kuesioner_3.php?id=$id_datapribadi&pesan={$pesan}");
		  }
		  else {
			  die("Query gagal di jalankan !! " .mysqli_connect_errno($link) ."-" .mysqli_connect_error($link));
		  }

	  }
	  

  }
  else {
	  //form belum disubmit berikan nilai awal untuk semua isian form
	  $pesan_error= "";
	  $no_handphone= "";
	  $alumni= "";
	  $jabatan= "";
	  $asaljurusan= "";
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
	<form class="inner-login" action="kuesioner_2-2.php" method="post">
	<fieldset class="scheduler-border">
	<legend class="scheduler-border"><b>III. Profil Alumni ITS yang Bekerja di Perusahaan</b></legend>
		<!-- <p class="form-group"></p>
			<p class="bg-info">No. Handphone : </p> 
			<input type=text readonly=readonly name="no_handphone" value='<?php echo"$_GET[id]"; ?>' class="form-control"> -->
		
		<!-- UPDATE: mendapatkan data id data pribadi -->
	  	<input type="hidden" name="id_datapribadi"  class="form-control" value="<?php echo"$_GET[id]"; ?>">
		<p class="form-group">
			<p class="bg-info">Departemen/unit/divisi alumni ITS ditempatkan</p> 
			<input type="text" name="alumni" placeholder="Ex. IT, Marketing, HRD, etc..." class="form-control" value="<?php echo $alumni; ?>">
		</p>
		<p class="form-group">
			<p class="bg-info">Jabatan tertinggi alumni ITS di departemen/unit/divisi perusahaan</p>
			<input type="text" name="jabatan" placeholder="Ex. Direktur, Staff, etc..." class="form-control" value="<?php echo $jabatan; ?>">
		</p>
    <p class="form-group">
      <p class="bg-info">Asal jurusan alumni ITS</p>
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
	</br>
	</fieldset>
	<br>
	<p>
		<input type="submit" class="btn btn-danger btn-md" name="submit_2-2" value="Next >>">
	</p>
 </form>
 </div>

</body>
</html>