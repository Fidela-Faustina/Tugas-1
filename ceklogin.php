<?php
// mengaktifkan session pada php---------------------------------------------------------------------------------

session_start();

// menghubungkan php dengan koneksi database---------------------------------------------------------------------

include 'config.php';

// menangkap data yang dikirim dari form login-------------------------------------------------------------------

$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai-------------------------------------------------
$query = "SELECT * FROM user where username ='$username' AND password = '$password'";
$login = mysqli_query($koneksi, $query, $queri);

// menghitung jumlah data yang ditemukan-------------------------------------------------------------------------

$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database-----------------------------------------------------

if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin---------------------------------------------------------------------

	if($data['id_level']== "anggota"){

		// buat session login dan username---------------------------------------------------------------

		$_SESSION['username'] = $username;
		$_SESSION['id_level'] = "anggota";

		// alihkan ke halaman dashboard admin------------------------------------------------------------

		header("location:anggota.php");

	// cek jika user login sebagai pegawai-------------------------------------------------------------------

	}else if($data['id_level']== "petugas"){

		// buat session login dan username---------------------------------------------------------------

		$_SESSION['username'] = $username;
		$_SESSION['id_level'] = "petugas";

		// alihkan ke halaman dashboard pegawai----------------------------------------------------------

		header("location:petugas.php");

	// cek jika user login sebagai pengurus------------------------------------------------------------------

	}else{

		// alihkan ke halaman login kembali--------------------------------------------------------------

		header("location:index.php?pesan=gagal");
	}
}else{
	header("location:index.php?pesan=gagal");
}

?>
