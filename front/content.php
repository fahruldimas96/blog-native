				<!-- Aside Nav -->
			</div>
		<!-- section -->
		<div class="section">
			<!-- container -->
							<?php  
					  		include "koneksi/config.php";
					  		$query_limit = "SELECT * FROM posting, kategori, user WHERE posting.ID_KAT AND posting.ID_STATUS=1 AND kategori.ID_KAT=posting.ID_KAT AND user.ID_ADMIN=posting.ID_ADMIN ORDER BY ID_POST DESC LIMIT 4"; // Query untuk menampilkan semua data siswa
					  		$sql_limit = mysqli_query($conn, $query_limit); // Eksekusi/Jalankan query dari variabel $query
					  		while($data = mysqli_fetch_array($sql_limit)){
					  		 // Ambil semua data dari hasil eksekusi $sql
							?>
			<div class="container">
				<!-- row -->
				<div class="row">	
					<!-- post -->
					<div class="col-md-6">
						<div class="post post-thumb">
							<a class="post-img" href="?page=front/read&id=<?php echo ''.$data['ID_POST'].''?>"><img src="assets/img/<?php echo ''.$data['FOTO_POST'].''?>"/></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="<?php echo ''.$data['NOTE'].''?>" href="?page=front/read&id=<?php echo ''.$data['ID_POST'].''?>"><?php echo ''.$data['NAMA_KAT'].''?></a>
									<span class="post-date"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php $date=$data['TGL_POST']; $tgl =  date('F d, Y', strtotime($date)); echo $tgl;?> <i class="fa fa-user" aria-hidden="true"></i> <?php echo ''.$data['NAMA'].''?></span>
								</div>
								<h3 class="post-title"><a href="?page=front/read&id=<?php echo ''.$data['ID_POST'].''?>"><?php echo ''.$data['JUDUL_POST'].''?></a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->
					<?php } ?>

				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>HOT POSTS</h2>
						</div>
					</div>
							<?php  
					  		include "koneksi/config.php";
					  		$query_limit = "SELECT * FROM posting, kategori, user WHERE posting.ID_KAT='5' AND posting.ID_STATUS=1 AND kategori.ID_KAT=posting.ID_KAT AND user.ID_ADMIN=posting.ID_ADMIN ORDER BY ID_POST DESC LIMIT 6"; // Query untuk menampilkan semua data siswa
					  		$sql_limit = mysqli_query($conn, $query_limit); // Eksekusi/Jalankan query dari variabel $query
					  		while($data = mysqli_fetch_array($sql_limit)){
					  		 // Ambil semua data dari hasil eksekusi $sql
							?>
					<!-- post -->
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="?page=front/read&id=<?php echo ''.$data['ID_POST'].''?>"><img src="assets/img/<?php echo ''.$data['FOTO_POST'].''?>"/></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="<?php echo ''.$data['NOTE'].''?>" href="?page=front/read&id=<?php echo ''.$data['ID_POST'].''?>"><?php echo ''.$data['NAMA_KAT'].''?></a>
									<span class="post-date"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php $date=$data['TGL_POST']; $tgl =  date('F d, Y', strtotime($date)); echo $tgl;?> <i class="fa fa-user" aria-hidden="true"></i> <?php echo ''.$data['NAMA'].''?></span>
								</div>
								<h3 class="post-title"><a href="?page=front/read&id=<?php echo ''.$data['ID_POST'].''?>"><?php $namap=$data['JUDUL_POST']; $potong = substr($namap,0,40); echo $potong;?></a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->
					<?php } ?>
</div>

		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-10">
						<div class="row">
							<div class="col-md-12">
								<div class="section-title">
									<h2>Favorit</h2>
								</div>
							</div>
							<?php  
					  		include "koneksi/config.php";
					  		$query_limit = "SELECT * FROM posting, kategori, user WHERE posting.ID_KAT AND posting.ID_STATUS=1 AND kategori.ID_KAT=posting.ID_KAT AND user.ID_ADMIN=posting.ID_ADMIN ORDER BY VIEWS DESC LIMIT 10"; // Query untuk menampilkan semua data siswa
					  		$sql_limit = mysqli_query($conn, $query_limit); // Eksekusi/Jalankan query dari variabel $query
					  		while($data = mysqli_fetch_array($sql_limit)){
					  		 // Ambil semua data dari hasil eksekusi $sql
							?>

							<!-- post -->
							<div class="col-md-12">
								<div class="post post-row">
									<a class="post-img" href="?page=front/read&id=<?php echo ''.$data['ID_POST'].''?>"><img src="assets/img/<?php echo ''.$data['FOTO_POST'].''?>"/></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="<?php echo ''.$data['NOTE'].''?>" href="?page=front/read&id=<?php echo ''.$data['ID_POST'].''?>"><?php echo ''.$data['NAMA_KAT'].''?></a>
											<span class="post-date"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php $date=$data['TGL_POST']; $tgl =  date('F d, Y', strtotime($date)); echo $tgl;?> <i class="fa fa-user" aria-hidden="true"></i> <?php echo ''.$data['NAMA'].''?></span>
										</div>
										<h3 class="post-title"><a href="?page=front/read&id=<?php echo ''.$data['ID_POST'].''?>"><?php $namap=$data['JUDUL_POST']; $potong = substr($namap,0,40); echo $potong;?></a></h3>
										<p><?php $namap=$data['TITLE_POST']; $potong = substr($namap,0,100); echo $potong;?></p>
									</div>
								</div>
							</div>
							<!-- /post -->				
							<?php } ?>
			</div>
			<!-- /container -->