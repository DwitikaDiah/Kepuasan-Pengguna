<?php
  // buat koneksi dengan database mysql
  $dbhost = "localhost";
  $dbuser = "root2";
  $dbpass = "";
  $link = mysqli_connect($dbhost,$dbuser,$dbpass);
  
  //periksa koneksi, tampilkan pesan kesalahan jika gagal
  if(!$link){
    die ("Koneksi dengan database gagal: ".mysql_connect_errno().
         " - ".mysql_connect_error());
  }
  
  //buat database tracer_study jika belum ada
  $query = "CREATE DATABASE IF NOT EXISTS kepuasanpengguna";
  $result = mysqli_query($link, $query);
  
  if(!$result){
    die ("Query Error: ".mysqli_errno($link).
         " - ".mysqli_error($link));
  }
  else {
    echo "Database <b>'kepuasanpengguna'</b> berhasil dibuat... <br>";
  }
  
  //pilih database tracer_study
  $result = mysqli_select_db($link, "kepuasanpengguna");
  
  if(!$result){
    die ("Query Error: ".mysqli_errno($link).
         " - ".mysqli_error($link));
  }
  else {
    echo "Database <b>'kepuasanpengguna'</b> berhasil dipilih... <br>";
  }
 
  // cek apakah tabel data_pribadi sudah ada. jika ada, hapus tabel
  $query = "DROP TABLE IF EXISTS data_pribadi";
  $hasil_query = mysqli_query($link, $query);
  
  if(!$hasil_query){
    die ("Query Error: ".mysqli_errno($link).
         " - ".mysqli_error($link));
  }
  else {
    echo "Tabel <b>'data_pribadi'</b> berhasil dihapus... <br>";
  }
  
  // buat query untuk CREATE tabel data_pribadi
  $query  = "CREATE TABLE data_pribadi (id_alumni VARCHAR(15), nama VARCHAR(50), jenis_kelamin VARCHAR(15), "; 
  $query .= "asal_provinsi VARCHAR(25), tempat_lahir VARCHAR(50), tanggal_lahir DATE, ";
  $query .= "alamat_kantor VARCHAR(50), no_telp_kantor INT(15), alamat_rumah VARCHAR(50), ";
  $query .= "no_handphone INT(15), email VARCHAR(25), PRIMARY KEY (id_alumni))";

  $hasil_query = mysqli_query($link, $query);
  
  if(!$hasil_query){
      die ("Query Error: ".mysqli_errno($link).
           " - ".mysqli_error($link));
  }
  else {
    echo "Tabel <b>'data_pribadi'</b> berhasil dibuat... <br>";
  }
  
  // buat query untuk INSERT data ke tabel data_pribadi
  $query  = "INSERT INTO data_pribadi VALUES ";
  $query .= "('1', 'Imam Hidayat', 'laki-laki', 'SMKN 1 Cikarang Selatan', 'Bekasi', '1995-04-24', 'East jakarta Industrial park plot 1j', ";
  $query .= " '021883278', 'Perum graha sukadami blok A4 no 24', '081517694126', 'ihidayat155@gmail.com'), ";
  $query .= "('2', 'ahmad nurzakrin', 'laki-laki', 'SMKN 1 Tegal Wangi', 'Bekasi', '1994-03-14', 'East jakarta Industrial park plot 8a', ";
  $query .= " '021883278', 'Perum Kompas indah blok c11 no 28', '08138908754', 'ahmadnurzakrin@gmail.com') ";
  
  $hasil_query = mysqli_query($link, $query);
  
  if(!$hasil_query){
      die ("Query Error: ".mysqli_errno($link).
           " - ".mysqli_error($link));
  }
  else {
    echo "Tabel <b>'data_pribadi'</b> berhasil diisi... <br>";
  }
    
  // cek apakah tabel admin sudah ada. jika ada, hapus tabel
  $query = "DROP TABLE IF EXISTS admin";
  $hasil_query = mysqli_query($link, $query);
  
  if(!$hasil_query){
    die ("Query Error: ".mysqli_errno($link).
         " - ".mysqli_error($link));
  }
  else {
    echo "Tabel <b>'admin'</b> berhasil dihapus... <br>";
  }
  
  // buat query untuk CREATE tabel admin
  $query  = "CREATE TABLE admin (username VARCHAR(50), password CHAR(40))"; 
  $hasil_query = mysqli_query($link, $query);
  
  if(!$hasil_query){
      die ("Query Error: ".mysqli_errno($link).
           " - ".mysqli_error($link));
  }
  else {
    echo "Tabel <b>'admin'</b> berhasil dibuat... <br>";
  }
  
  // buat username dan password untuk admin
  $username = "admin123";
  $password = sha1("rahasia");
  
  // buat query untuk INSERT data ke tabel admin
  $query  = "INSERT INTO admin VALUES ('$username','$password')"; 

  $hasil_query = mysqli_query($link, $query);
  
  if(!$hasil_query){
      die ("Query Error: ".mysqli_errno($link).
           " - ".mysqli_error($link));
  }
  else {
    echo "Tabel <b>'admin'</b> berhasil diisi... <br>";
  }
  
  // tutup koneksi dengan database mysql
  mysqli_close($link);
?>