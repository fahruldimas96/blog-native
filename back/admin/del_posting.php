// Load file koneksi.php
<?php include "../koneksi/config.php";
// Ambil data NIS yang dikirim oleh index.php melalui URL

$query = "SELECT * FROM posting WHERE ID_POST='$_GET[ID_POST]'";
$sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
// Cek apakah file fotonya ada di folder images
if (is_file("../../assets/img/" . $data['FOTO_POST'])) // Jika foto ada
  unlink("../../assets/img/" . $data['FOTO_POST']); // Hapus foto yang telah diupload dari folder images
// Query untuk menghapus data siswa berdasarkan NIS yang dikirim
$query2 = "DELETE FROM posting WHERE ID_POST='$_GET[ID_POST]'";
$sql2 = mysqli_query($conn, $query2); // Eksekusi/Jalankan query dari variabel $query
if ($sql2) { // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: index.php?page=posting"); // Redirect ke halaman index.php
} else {
  // Jika Gagal, Lakukan :
  echo "Data gagal dihapus. <a href='index.php?page=posting'>Kembali</a>";
}
