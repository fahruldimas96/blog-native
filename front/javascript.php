				<div class="section">
                
                </div>
                </div>
                </br>
			<!-- container -->
			<div class="container">
				<!-- row -->

						<div class="row">
							<div class="col-md-12">
								<div class="section-title">
									<h2>JAVASCRIPT</h2>
								</div>
							</div>
							<?php  
					  		include "koneksi/config.php";
					  				  $dataPerPage = 5;
 
								      // Apabila $_GET['page'] sudah didefinisikan, gunakan nomor halaman tersebut,
								      // Sedangkan apabila belum, nomor halamannya 1.
								      if(isset($_GET['p']))
								      {
								        $noPage = $_GET['p'];
								      }
								      else $noPage = 1;
								 
								      // Perhitungan offset
								      $offset = ($noPage - 1) * $dataPerPage;

					  		$query = "SELECT * FROM posting, kategori,user WHERE posting.ID_KAT=1 AND kategori.ID_KAT=posting.ID_KAT AND user.ID_ADMIN=posting.ID_ADMIN ORDER BY ID_POST DESC LIMIT $offset, $dataPerPage";
					  		// Query untuk menampilkan semua data siswa
					  		$sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
					  		while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
							?>
							<!-- post -->
							<div class="col-md-12">
								<div class="post post-row">
									<a class="post-img" href="?page=front/read&id=<?php echo ''.$data['ID_POST'].''?>"><img src="assets/img/<?php echo ''.$data['FOTO_POST'].''?>"/></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="<?php echo ''.$data['NOTE'].''?>" href="?page=front/read&id=<?php echo ''.$data['ID_POST'].''?>"><?php echo ''.$data['NAMA_KAT'].''?></a>
											<span class="post-date"> <i class="fa fa-clock-o" aria-hidden="true"></i> <?php $date=$data['TGL_POST']; $tgl =  date('F d, Y', strtotime($date)); echo $tgl;?> <i class="fa fa-user" aria-hidden="true"></i> <?php echo ''.$data['NAMA'].''?></span>
										</div>
										<h3 class="post-title"><a href="?page=front/read&id=<?php echo ''.$data['ID_POST'].''?>"><?php echo ''.$data['JUDUL_POST'].''?></a></h3>
										<p><?php $namap=$data['TITLE_POST']; $potong = substr($namap,0,100); echo $potong;?></p>
									</div>
								</div>
							</div>
							<!-- /post -->
						<?php } ?>
							
							<div class="col-md-12">
								<div class="section-row">
																		<?php // Mencari jumlah semua data tabel 'alamat', kemudian simpan dalam variabel $jumData
		include "koneksi/config.php";
        $query3   = "SELECT  COUNT(ID_POST) AS jumData FROM posting WHERE ID_KAT=1";
        $hasil3  = mysqli_query($conn, $query3);
        $data3    = mysqli_fetch_array($hasil3);
 
        $jumData = $data3['jumData'];

          if ($jumData > 5)
            {
 
              // Menentukan jumlah halaman yang muncul berdasarkan jumlah semua data
              $jumPage = ceil($jumData/$dataPerPage);
 
              // Menampilkan link 'Sebelum'   
              if ($noPage > 1) 
 
              $query = "SELECT * FROM posting";
              $result = mysqli_query($conn, $query) or die('Error');
 
              $data = mysqli_fetch_array($result);
 
              echo  "<a href='?page=front/javascript&p=".($noPage-1)."'><button class='primary-button-1 center-block'>Prev</button></a>";
 
              // Menampilkan nomor halaman dan linknya
              for($page = 1; $page <= $jumPage; $page++)
              {
 
                if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
                {
 
                  if (($page == 1) && ($page != 2))  echo "<a href='#'><button class='primary-button-1 center-block'>..</button></a>";
                  if (($page != ($jumPage - 1)) && ($page == $jumPage))  echo "<a href='#'><button class='primary-button-1 center-block'>..</button></a>";
                  if ($page == $noPage) echo " <a href='#'><button class='primary-button-1 center-block'>".$page."</button></a>";
                  else echo "<a href='?page=front/javascript&p=".$page."'><button class='primary-button-1 center-block'>".$page."</button></a>";
                }
              }
 			

              // Menampilkan link 'Sesudah'
              if ($noPage < $jumPage) 
              echo "<a href='?page=front/javascript&p=".($noPage+1)."'><button class='primary-button-1 center-block'>Next</button></a>";
            }
 
          else
            {
            }
 
        echo "</center>";     ?>
								</div>
							</div>
						</div>
								<div class="col-md-12">
								<div class="section-row">
									<button class="primary-button center-block">Load More</button>
								</div>
							</div>
						</div>