<?php
$db_host = "127.0.0.1";
$db_user = "root";
$db_pass = "";
$db_name = "moklet_perpus";
$koneksi = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
//check koneksi
if (mysqli_connect_errno()) {
  echo "Koneksi database berhasil".mysqli_connect_error();
}else{
  echo "koneksi berhasil";
}

 ?>
