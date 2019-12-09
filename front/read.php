
			<?php  
			include "koneksi/config.php";
			$no=$_GET["id"];
			$query = mysqli_query($conn, "SELECT * FROM posting, user, kategori WHERE ID_POST=$no AND user.ID_ADMIN=posting.ID_ADMIN AND kategori.ID_KAT=posting.ID_KAT");
			mysqli_query($conn, "UPDATE posting SET VIEWS = VIEWS+1 WHERE ID_POST = '$no'");
			?>
			<!-- Page Header -->
			</div>
			<!-- /Page Header -->

				<!-- row -->
						<div class="section-post">
								<?php if ($row=mysqli_num_rows($query)){ ?>
								<?php while($row=mysqli_fetch_array($query)){ ?>

								<h3><?php echo ''.$row['JUDUL_POST'].''?></h3>

								<div class="post-meta">
								<i class="fa fa-clock-o" aria-hidden="true"></i> <?php $date=$row['TGL_POST']; $tgl =  date('F d, Y', strtotime($date)); echo $tgl;?>
								Posted By <i class="fa fa-user" aria-hidden="true"></i> <?php echo ''.$row['NAMA'].''?>
								<a class="<?php echo ''.$row['NOTE'].''?>" href="?page=front/read&id=<?php echo ''.$row['ID_POST'].''?>"><?php echo ''.$row['NAMA_KAT'].''?></a></div>
							</br>

								<div class="post post-row">
								<a class="post-img" href="?page=front/read&id=<?php echo ''.$row['ID_POST'].''?>"><img src="assets/img/<?php echo ''.$row['FOTO_POST'].''?>"/></a>
								</div>

   	   							<p class="text-read-detail"><?php echo ''.$row['ISI'].''?><p>

</div>
<?php } ?>
<?php } ?>
						<!-- ad -->
						<div class="section-row text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="assets/img/ad-3.jpg" alt="">
							</a>
						</div>
						<!-- ad -->