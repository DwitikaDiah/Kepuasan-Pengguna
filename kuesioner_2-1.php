<?php

  // buka koneksi dengan MySQL
  include("connection.php");

  // ambil pesan jika ada  
  if (isset($_GET["pesan"])) {
      $pesan = $_GET["pesan"];
  }
  
  //cek apakah form telah di submit
  if (isset($_POST["submit_2-1"])) {
	  //form telah disubmit proses data

	  //ambil semua nilai form
	  $nmperusahaan= htmlentities(strip_tags(trim($_POST["nmperusahaan"])));
	  $emailperusahaan= htmlentities(strip_tags(trim($_POST["emailperusahaan"])));
	  $teleponperusahaan= htmlentities(strip_tags(trim($_POST["teleponperusahaan"])));
	  $alamatperusahaan= htmlentities(strip_tags(trim($_POST["alamatperusahaan"])));
	  $id_datapribadi= htmlentities(strip_tags(trim($_POST["id_datapribadi"])));
	  
	 //siapkan variabel untuk menampung pesan error
	 $pesan_error= "";
	  
	 //cek ke database, apakah sudah ada nomor id_alumni yang sama    
     //filter data $id_alumni
     	// $id_datapribadi = mysqli_real_escape_string($link,$id_datapribadi);
     	// $query = "UPDATE `data_pribadi` SET `no_handpone` = '".$no_handphone."' WHERE `data_pribadi`.`id` = ".$id_data_pribadi.";"
     	// $hasil_query = mysqli_query($link, $query);
     	
     // $no_handphone = mysqli_real_escape_string($link,$no_handphone);
     // $query = "SELECT id FROM data_pribadi WHERE data_pribadi.no_handphone = '$no_handphone'";
     // $hasil_query = mysqli_query($link, $query);
  
     // // cek jumlah record (baris), jika ada, $id_alumni tidak bisa diproses
     // $jumlah_data = mysqli_num_rows($hasil_query);
     //  if ($jumlah_data >= 1 ) {
     //   $pesan_error .= "Data NRP tersebut sudah di simpan. <b
     //   r>";  
     // } 

      if(empty($nmperusahaan)) {
		  $pesan_error .= "Nama Perusahaan Wajib Di isi !!! <br>";
	  }
	  
	  if(empty($emailperusahaan)) {
		  $pesan_error .= "Email Perusahaan Wajib Di isi !!! <br>";
	  }

	  // // IPK wajib di isi berupa angka, tidak boleh kosong dan tidak boleh negatif
	  // if(empty($telepon_perusahaan)) {
		 //  $pesan_error .= "Telepon Perusahaan Wajib Di isi !!! <br>";
	  // }
	  
  	   if (!is_numeric($teleponperusahaan) OR ($teleponperusahaan <=0)) {
    		$pesan_error .= "Telepon Perusahaan harus diisi dengan angka";
   		}



   //    if(empty($alamat_perusahaan)) {
		 //  $pesan_error .= "Alamat Perusahaan Wajib Di isi !!! <br>";
	  // }
	  


	  //jika tidak ada error input data ke database
	  if ($pesan_error === "") {
		  // $no_handphone= mysqli_real_escape_string($link,$no_handphone);
		  $nmperusahaan= mysqli_real_escape_string($link,$nmperusahaan);
		  $emailperusahaan= mysqli_real_escape_string($link,$emailperusahaan);
		  $teleponperusahaan= mysqli_real_escape_string($link,$teleponperusahaan);
		  $alamatperusahaan= mysqli_real_escape_string($link,$alamatperusahaan);
		  $id_datapribadi= mysqli_real_escape_string($link,$id_datapribadi);
		  

		  // // $query= "UPDATE `data_pribadi` SET `no_handphone` = '".$no_handphone."' WHERE `data_pribadi`.`id` = ".$id_data_pribadi.";
		  // $query= "INSERT INTO dataperusahaan VALUES ('$nmperusahaan','$emailperusahaan','$teleponperusahaan','$alamatperusahaan') ";
		  // $result= mysqli_query ($link,$query);
		  
		  // //buat dan jalankan query INSERT
		  // $query= "INSERT INTO `dataperusahaan`(`nmperusahaan`, `emailperusahaan`, `teleponperusahaan`, `alamatperusahaan`, `id_datapribadi`) VALUES ('$nmperusahaan','$emailperusahaan','$teleponperusahaan','$alamatperusahaan', (SELECT id FROM data_pribadi WHERE id_datapribadi = '$id_datapribadi')";
		  // $result= mysqli_query ($link,$query);

		  // UPDATE: Insert Data Perusahaan
		  $query = "INSERT INTO `dataperusahaan` (`nmperusahaan`, `emailperusahaan`, `teleponperusahaan`, `alamatperusahaan`, `id_datapribadi`) VALUES ('$nmperusahaan','$emailperusahaan','$teleponperusahaan','$alamatperusahaan', '$id_datapribadi');";
		  $result= mysqli_query ($link,$query);
		  
		  //periksa hasil query
		  if ($result) {
			  $pesan= "Data Perusahaan dengan no. handphone: \"<b>$no_handphone</b>\"Sudah Berhasil Di simpan";
			  $pesan= urlencode ($pesan);
			  
			  // UPDATE: id = id data pribadi
			  header ("location: kuesioner_2-2.php?id=$id_datapribadi&pesan= {$pesan}");
		  }
		   else {
			  die("Query gagal di jalankan !! " .mysqli_connect_errno($link) ."-" .mysqli_connect_error($link));
		  }
	  }
  }
  else {
	  //form belum di submit berikan nilai awal untuk semua isian form
	  $pesan_error= "";
	  $nmperusahaan= "";
	  $emailperusahaan= "";
	  $teleponperusahaan= "";
	  $alamatperusahaan= "";
	  $id_datapribadi= "";
	  
  }  

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
   <form class="inner-login" action="kuesioner_2-1.php" method="post">
	<fieldset class="scheduler-border">
	  <legend class="scheduler-border"><b>II. Informasi Perusahaan</b></legend>
		<p class="form-group">
			<!-- UPDATE: mendapatkan data id data pribadi -->
	  		<input type="hidden" name="id_datapribadi"  class="form-control" value="<?php echo"$_GET[id]"; ?>">
	  	</p>
		<!-- <p class="form-group"></p>
			<p class="bg-info">No. Handphone : </p> 
			<input type=text readonly=readonly name="no_handphone" value='<?php echo"$_GET[id]"; ?>' class="form-control">
				<?php
	 					
					//$query= "SELECT id_alumni FROM data_pribadi";
					
					//$result= mysqli_query ($link, $query);
					
					//buat perulangan nya
					//while($data = mysqli_fetch_array($result)) {
					?> -->
		<p class="form-group">
			<p class="bg-info">Nama Perusahaan : </p> 
			<input type="text" name="nmperusahaan"  class="form-control" value="<?php echo $nmperusahaan; ?>" >
		</p>

		<p class="form-group">
			<p class="bg-info">Email Perusahaan : </p> 
			<input type="text" name="emailperusahaan"  class="form-control" value="<?php echo $emailperusahaan; ?>">
			
		</p>
		<p class="form-group">
			<p class="bg-info">Telepon Perusahaan : </p> 
			<input type="text" name="teleponperusahaan" placeholder="Kode pos - Nomor Telepon" class="form-control" value="<?php echo $teleponperusahaan; ?>">
		</p>
		<p class="form-group">
			<p class="bg-info">Alamat Perusahaan : </p> 
			<input type="text" name="alamatperusahaan"  class="form-control" value="<?php echo $alamatperusahaan; ?>">
		</p>
	</fieldset>
	<br>
	<p>
		<input type="submit" class="btn btn-danger btn-md" name="submit_2-1" value="Next >>">
	</p>
 </form>
 </div>

</body>
</html>