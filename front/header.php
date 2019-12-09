		<!-- Header -->
		<header id="header">
			<!-- Nav -->
			<div id="nav">
				<!-- Main Nav -->
				<div id="nav-fixed">
					<div class="container">
						<!-- logo -->
						<div class="nav-logo">
							<a href="index.php" class="logo"><img src="assets/img/logo2.png" alt=""></a>
						</div>
						<!-- /logo -->
						<!-- nav -->
						<ul class="nav-menu nav navbar-nav">
							<li title="Home"><a href="index.php">Home</a></li>
			<?php  
			include "koneksi/config.php";
			$query_limit = "SELECT * FROM kategori"; // Query untuk menampilkan semua data siswa
			$sql_limit = mysqli_query($conn, $query_limit); // Eksekusi/Jalankan query dari variabel $query
			while($data = mysqli_fetch_array($sql_limit)){
			 // Ambil semua data dari hasil eksekusi $sql
			?>
							<li class="<?php echo ''.$data['NOTE_HEADER'].''?>"><a href="<?php echo ''.$data['TARGET_LINK'].''?>"><?php echo ''.$data['NAMA_KAT'].''?></a></li>
			<?php } ?>
						</ul>
						<!-- /nav -->
	
						<!-- search & aside toggle -->
						<div class="nav-btns">
							<button class="aside-btn"><i class="fa fa-bars"></i></button>
							<button class="search-btn"><i class="fa fa-search"></i></button>
							<div class="search-form">
								<input class="search-input" type="text" name="search" placeholder="Enter Your Search ...">
								<button class="search-close"><i class="fa fa-times"></i></button>
							</div>
						</div>
						<!-- /search & aside toggle -->
					</div>
				</div>
				<!-- /Main Nav -->
								<!-- Aside Nav -->
				<div id="nav-aside">
					<!-- nav -->
					<div class="section-row">
						<ul class="nav-aside-menu">
							<li><a href="index.php">Home</a></li>
							<li><a href="#">Advertisement</a></li>
						</ul>
						<ul>
										<h3 class="footer-title">Kategori</h3>
			<?php  
			include "koneksi/config.php";
			$query_limit = "SELECT * FROM kategori"; // Query untuk menampilkan semua data siswa
			$sql_limit = mysqli_query($conn, $query_limit); // Eksekusi/Jalankan query dari variabel $query
			while($data = mysqli_fetch_array($sql_limit)){
			 // Ambil semua data dari hasil eksekusi $sql
			?>
										<li><a href="<?php echo ''.$data['TARGET_LINK'].''?>"><?php echo ''.$data['NAMA_KAT'].''?></a></li>
										<?php } ?>
									</ul>
					</div>
					<!-- /nav -->
					<!-- widget posts -->
					<div class="section-row">
						<h3>Recent Posts</h3>
							<?php  
					  		include "koneksi/config.php";

					  		$query = "SELECT * FROM posting, kategori WHERE posting.ID_KAT AND kategori.ID_KAT=posting.ID_KAT ORDER BY VIEWS DESC LIMIT 5"; // Query untuk menampilkan semua data siswa
					  		$sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
					  		while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
							?>
						<div class="post post-widget">
							<a class="post-img" href="?page=front/read&id=<?php echo ''.$data['ID_POST'].''?>"><img src="assets/img/<?php echo ''.$data['FOTO_POST'].''?>" alt=""></a>
							<div class="post-body">
								<h3 class="post-title"><a href="?page=front/read&id=<?php echo ''.$data['ID_POST'].''?>"><?php $namap=$data['JUDUL_POST']; $potong = substr($namap,0,40); echo $potong;?></a></h3>
							</div>
						</div>
											<?php } ?>
					</div>

					<!-- /widget posts -->
					<!-- social links -->
					<div class="section-row">
						<h3>Follow us</h3>
						<ul class="nav-aside-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
					</div>
					<!-- /social links -->
				</div>