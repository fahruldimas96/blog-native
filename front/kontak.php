			</div>
			<!-- /Page Header -->
		</header>
		<!-- /Header -->
		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-6">
						<div class="section-row">
							<h3>Kontak Informasi</h3>
								<div class="separator" style="margin-bottom:2px; clear: both; text-align: center;">
								<img class="bulat" src="assets/img/about-1.jpg" width="100%" /></div>
								<p><center><label style="color: blue; font:20px Time New Roman; width=30%">Fahrul Dimas Saputra</label></center></p>
								<p>Nama saya Fahrul Dimas Saputra, biasa di panggil fahrul.&nbsp;Saya adalah seorang Karyawan Swasta dan seorang Web Programming Front-end &amp; Back-end Developer. Saya lulus dari SMK Yuppentek-2 Tangerang jurusan Rekayasa Perangkat Lunak(RPL) pada tahun 2013, Saya saat ini sedang menjalankan program studi strata 1 di STIKOM Cipta Karya Informatika (Sistem Informasi).</p>
								<p>Sejak kelas 1 SMK, saya sudah akrab dengan koding terutama HTML, CSS dan PHP.</p>
								<p><h3>Riwayat Pengalaman Kerja</h3></p>
								<p>Agustus 2013 s/d Oktober 2013:&nbsp; Berkerja Di PT.LAZADA Indonesia Sebagai Administator Inventory(WMS).</p>
								<p>November 2013 s/d Maret 2014 : Berkerja Di PT.DHL Global Forwarding&nbsp; Sebagai Sr.Administator Inventory(SAP,WMS).</p>
								<p>April 2014 s/d Mei 2015 : Berkerja Di PT.BILNA Sebagai Manager Inventory (Netsuite<strong><em>,</em></strong>Magento).</p>
								<p>Mei 2015 s/d Sekarang : Berkerja Di PT.XL Planet ( Elevenia ) Sebagai Account Management (Framework Elevenia).</p>
								<ul class="list-style">
								<li><p><strong>Email:</strong> <a href="#">fahrul.dimassaputra@gmail.com</a></p></li>
								<li><p><strong>Phone:</strong> 0812-9618-8831</p></li>
								<li><p><strong>Address:</strong> Jakarta Timur</p></li>
							</ul>
						</div>
					</div>
					<div class="col-md-5 col-md-offset-1">
						<div class="section-row">
							<h3>Pesan</h3>
							<form method="post">
								<div class="row">
									<div class="col-md-7">
										<div class="form-group">
											<span>Email</span>
											<input class="input" type="email" name="email" required>
										</div>
									</div>
									<div class="col-md-7">
										<div class="form-group">
											<span>Telepon</span>
											<input class="input" type="text" name="telp" onkeypress="return hanyaAngka(event)" maxlength="13" required>
										</div>
									</div>
									<div class="col-md-7">
										<div class="form-group">
											<span>Judul Pesan</span>
											<input class="input" type="text" name="judulpesan" required>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="input" name="isipesan" placeholder="Pesan" required></textarea>
										</div>
										<button type="submit" name="tambah" class="primary-button"><i class="fa fa-send"></i> Kirim</button>
									</div>
								</div>
							</form>
<?php
include "koneksi/config.php";
		if(isset($_POST['tambah'])){
		// Ambil Data yang Dikirim dari Form
		$email = $_POST['email'];
		$telp = $_POST['telp'];
		$judulpesan = $_POST['judulpesan'];
		$isipesan = $_POST['isipesan'];
	// Proses simpan ke Database
  	$query = "INSERT INTO pesan VALUES(NULL,1,'".$email."','".$telp."','".$judulpesan."','".$isipesan."',current_timestamp())";
  	$sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
  	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
   			// Jika Sukses, Lakukan :
			$query1 = mysqli_query($conn,"SELECT * FROM pesan ORDER BY ID_PESAN DESC");
            $data1 = mysqli_fetch_array($query1);	
            echo "Pesan Anda Berhasil Dikirim Dengan Nomor Pesan Berikut ";		        
  			echo $data1["ID_PESAN"];
	
}else{
	echo "Pesan Gagal Dikirim";
	header("location:index.php?page=front/kontak&not=Gagal");
}
}
?>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->
		<script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
		</script>