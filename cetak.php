<?php
  //cek apakah user sudah login, cek kehadiran session nama
	//jika belum langsung redirect ke login.php
	

  // buka koneksi dengan MySQL
  include("connection.php");
  
  // ambil pesan jika ada  
  if (isset($_GET["pesan"])) {
      $pesan = $_GET["pesan"];
  }
  
  
  // siapkan array untuk nama bulan
  $arr_bln = array( "1"=>"Januari",
                    "2"=>"Februari",
                    "3"=>"Maret",
                    "4"=>"April",
                    "5"=>"Mei",
                    "6"=>"Juni",
                    "7"=>"Juli",
                    "8"=>"Agustus",
                    "9"=>"September",
                    "10"=>"Oktober",
                    "11"=>"November",
                    "12"=>"Desember" );
					
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
  <link href="css/kuesioner.css" rel="stylesheet">
 </head>
<body>
<?php //masukan file header untuk menampilkan header
	  include_once ("header.php");
?>
<div class="container">
<?php
	  // tampilkan pesan jika ada
	  if (isset($pesan)) {
			echo "<div class=\"alert alert-success\">$pesan<p>"; ?>
	<?php echo"</p></div>";
		}

?>
 <div class="row">
	 <div id="footer">
			Copyright © <?php echo date("Y"); ?> Kepuasan Pengguna
		</div>
</div> 
</div>

</body>
</html>