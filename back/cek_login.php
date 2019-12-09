<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi/config.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"select * from user where USERNAME='$username' and PASSWORD= md5('$password')");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['LEVEL']=="admin"){

		// buat session login dan username
		$_SESSION['USERNAME'] = $username;
		$_SESSION['LEVEL'] = "admin";
		$_SESSION['NAMA'] = $data['NAMA'];
		$_SESSION['ID_ADMIN'] = $data['ID_ADMIN'];
		// alihkan ke halaman dashboard admin
		header("location:admin/index.php");

	// cek jika user login sebagai pegawai
	}else if($data['LEVEL']=="operator"){
		// buat session login dan username
		$_SESSION['USERNAME'] = $username;
		$_SESSION['LEVEL'] = "operator";
		$_SESSION['NAMA'] = $data['NAMA'];
		$_SESSION['ID_ADMIN'] = $data['ID_ADMIN'];
		// alihkan ke halaman dashboard pegawai
		header("location:operator/index.php");

	// cek jika user login sebagai pengurus
	}else if($data['LEVEL']=="penulis"){
		// buat session login dan username
		$_SESSION['USERNAME'] = $username;
		$_SESSION['LEVEL'] = "penulis";
		$_SESSION['NAMA'] = $data['NAMA'];
		$_SESSION['ID_ADMIN'] = $data['ID_ADMIN'];
		// alihkan ke halaman dashboard pengurus
		header("location:index.php");

	}else{

		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}

	
}else{
	header("location:login.php?pesan=gagal");
}



?>