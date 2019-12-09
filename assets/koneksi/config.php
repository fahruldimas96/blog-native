<?php
   // buat koneksi dengan MySQL, gunakan database: universitas
{
    date_default_timezone_set("Asia/Jakarta");
   $conn = mysqli_connect("localhost", "u6191814_stikom", "1234567890", "u6191814_blog_native");
    }
	// Check connection
	if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>