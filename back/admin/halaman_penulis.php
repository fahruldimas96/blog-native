<!DOCTYPE html>
<html>
<head>
	<title>Halaman Pegawai - www.malasngoding.com</title>
</head>
<body>
	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['LEVEL']==""){
		header("location:../login.php?pesan=gagal");
	}

	?>
	<h1>Halaman penuis</h1>

	<p>Halo <b><?php echo $_SESSION['NAMA']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['LEVEL']; ?></b>.</p>
	penulis
	<a href="../logout.php">LOGOUT</a>

	<br/>
	<br/>

	<a><a href="https://www.malasngoding.com/membuat-login-multi-user-level-dengan-php-dan-mysqli">Membuat Login Multi Level Dengan PHP</a> - www.malasngoding.com</a>
</body>
</html>