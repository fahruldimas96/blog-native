<?php
// Load file koneksi.php
include "../koneksi/config.php";
// Ambil data id yang dikirim oleh form_ubah.php melalui URL
$id = $_GET['id'];
// Ambil Data yang Dikirim dari Form
$kategori = $_POST['kategori'];
$judul = $_POST['judul'];
$title = $_POST['title'];
$isi = $_POST['isi'];
$penulis = $_POST['penulis'];
$foto1= $_POST['foto1'];
// Cek apakah user ingin mengubah fotonya atau tidak
if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
  // Ambil data foto yang dipilih dari form
  $foto = $_FILES['foto']['name'];
  $tmp = $_FILES['foto']['tmp_name'];
  
  // Rename nama fotonya dengan menambahkan tanggal dan jam upload
  $fotobaru = date('dmYHis').$foto;
  
  // Set path folder tempat menyimpan fotonya
  $path = "../image/".$fotobaru;
  // Proses upload
  if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
    // Query untuk menampilkan data tentangsaya berdasarkan ID_TS yang dikirim
    $query = "SELECT * FROM posting WHERE ID_POST='".$id."'";
    $sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
    $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
    // Cek apakah file foto sebelumnya ada di folder images
    if(is_file("../image/".$data['FOTO_POST'])) // Jika foto ada
      unlink("../image/".$data['FOTO_POST']); // Hapus file foto sebelumnya yang ada di folder images
    
    // Proses ubah data ke Database
    $query = "UPDATE posting SET ID_KAT='".$kategori."', JUDUL_POST='".$judul."', TITLE_POST='".$title."', ISI='".$isi."', ID_ADMIN='".$penulis."', FOTO_POST='".$fotobaru."' WHERE ID_POST='".$id."'";
    $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      header("location: index.php?page=posting"); // Redirect ke halaman beranda.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='index.php?page=posting'>Kembali Ke Form</a>";
    }
  }else{
    // Jika gambar gagal diupload, Lakukan :
    echo "Maaf, Gambar gagal untuk diupload.";
    echo "<br><a href='index.php?page=posting'>Kembali Ke Form</a>";
  }
}else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
  // Proses ubah data ke Database
  $query = "UPDATE posting SET ID_KAT='".$kategori."', JUDUL_POST='".$judul."', TITLE_POST='".$title."', ISI='".$isi."', ID_ADMIN='".$penulis."', FOTO_POST='".$foto1."' WHERE ID_POST='".$id."'";
  $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: index.php?page=posting"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='index.php?page=posting'>Kembali Ke Form</a>";
  }
}
?>