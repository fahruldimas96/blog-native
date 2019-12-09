		<!-- Footer -->
		<footer id="footer">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-5">
						<div class="footer-widget">
							<div class="footer-logo">
								<a href="index.html" class="logo"><img src="assets/img/logo2.png" alt=""></a>
							</div>
							<div class="footer-copyright">
								<span>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;2018-<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://www.facebook.com/fahrul.dimas" target="_blank">Fahrul Dimas</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="row">
							<div class="col-md-6">
								<div class="footer-widget">
									<h3 class="footer-title">Tentang Kami</h3>
									<ul class="footer-links">
										<li><a href="#">Tentang</a></li>
										<li><a href="#">Kontak</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-6">
								<div class="footer-widget">
									<h3 class="footer-title">Kategori</h3>
			<?php  
			include "koneksi/config.php";
			$query_limit = "SELECT * FROM kategori"; // Query untuk menampilkan semua data siswa
			$sql_limit = mysqli_query($conn, $query_limit); // Eksekusi/Jalankan query dari variabel $query
			while($data = mysqli_fetch_array($sql_limit)){
			 // Ambil semua data dari hasil eksekusi $sql
			?>
									<ul class="footer-links">
										<li><a href="<?php echo ''.$data['TARGET_LINK'].''?>"><?php echo ''.$data['NAMA_KAT'].''?></a></li>

									</ul>
														<?php } ?>
								</div>
							</div>
						</div>
					</div>


					<div class="col-md-3">
							<ul class="footer-social">
								<li><a href="https://www.facebook.com/fahrul.dimas" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://www.facebook.com/fahrul.dimas" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://www.facebook.com/fahrul.dimas" target="_blank"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</footer>
		<!-- /Footer -->