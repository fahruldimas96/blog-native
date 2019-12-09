    <!DOCTYPE html>
    <!-- DataTables CSS -->
    <link href="../../assets/admin/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../../assets/admin/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Posting
        <small>Advanced posting tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Akun Management</a></li>
        <li class="active">Posting</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              Data Table Posting
            </div>
            <div class="box-body">
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default-input">
                <i class="fa fa-plus-circle"></i> Create Posting
              </button>
            </div>
            <!-- /.panel-heading ?page=e_posting&id=<?= $data; ?>-->
            <div class="panel-body">
              <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                  <tr>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Posting Date</th>
                    <th>
                      <center><i class="fa fa-eye"></i></center>
                    </th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php include "../koneksi/config.php";
                  $query = "SELECT * FROM posting, user, status WHERE user.ID_ADMIN=posting.ID_ADMIN AND status.ID_STATUS=posting.ID_STATUS ORDER BY ID_POST ";
                  $result = mysqli_query($conn, $query) or die('Error');
                  while ($data = mysqli_fetch_array($result)) {
                    ?>
                    <tr class="odd gradeX">
                      <td><?= $data["JUDUL_POST"]; ?></td>
                      <td><?= $data["NAMA"]; ?></td>
                      <td class="center"><?php $date = $data['TGL_POST'];
                                            $tgl =  date('F d, Y ( H:i )', strtotime($date));
                                            echo $tgl; ?></td>
                      <td>
                        <center><?= $data["VIEWS"]; ?></center>
                      </td>
                      <td>
                        <center><?= $data["NAMA_STATUS"]; ?></center>
                      </td>
                      <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-danger">Action</button>
                          <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="?page=edit_posting&id=<?= $data["ID_POST"]; ?>">Update</a></li>
                            <li><a href="../../index.php?page=front/read&id=<?= $data["ID_POST"]; ?>" target="_blank">View</a></li>
                            <li class="divider"></li>
                            <li><a href="del_posting.php?ID_POST=<?= $data["ID_POST"]; ?>" onClick="return confirm('Apakah Anda Yakin Menghapus Data Ini!!')">Delete</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                  <?php
                  }
                  ?>
                </tbody>
              </table>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

    <!-- modal input -->
    <div class="modal fade" id="modal-default-input">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Create Posting</h4>
          </div>
          <div class="modal-body">
            <form method="post" enctype="multipart/form-data">
              <div class="modal-body">
                <div class="form-group">
                  <label class="control-label" for="kategori">Kategori</label>
                  <select name="kategori" class="form-control" id="kategori" required>
                    <?php include "../koneksi/config.php";
                    $query = "SELECT * FROM kategori";
                    $result = mysqli_query($conn, $query) or die('Error');
                    while ($data = mysqli_fetch_array($result)) {
                      ?>
                      <option value="<?= $data["ID_KAT"]; ?>"><?= $data["NAMA_KAT"]; ?></option>
                    <?php
                    }
                    ?>
                  </select>
                </div>
                <div class="form-group">
                  <label class="control-label" for="judul">Judul</label>
                  <input type="text" name="judul" class="form-control" id="judul" required>
                </div>
                <div class="form-group">
                  <label class="control-label" for="title">Title</label>
                  <input type="text" name="title" class="form-control" id="title" maxlength="150" required>
                </div>
                <div class="form-group">
                  <label class="control-label" for="foto">Foto</label>
                  <input class="control-label" type="file" name="foto" id="foto">
                  <label style="color: red; font:14px Candara; width=30%">Wajib Ukuran 750x450 Pixels</label>
                </div>
                <div class="form-group">
                  <label class="control-label" for="isi">Isi</label>
                  <textarea type="text" name="isi" class="form-control" id="isi" rows="15" cols="80"></textarea>
                </div>
                <div class="form-group">
                  <input type="hidden" name="penulis" class="form-control" id="penulis" value="<?php echo $_SESSION['ID_ADMIN']; ?>" required>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            <button type="submit" name="tambah" class="btn btn-primary"><i class="fa fa-send"></i> Create</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <script type="text/javascript" src="../tinymce/js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
      tinymce.init({
        selector: "textarea",

        width: "540",
        // ===========================================
        // INCLUDE THE PLUGIN
        // ===========================================

        plugins: [
          "advlist autolink lists link image charmap print preview anchor",
          "searchreplace visualblocks code fullscreen",
          "insertdatetime media table contextmenu paste jbimages"
        ],

        // ===========================================
        // PUT PLUGIN'S BUTTON on the toolbar
        // ===========================================

        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",

        // ===========================================
        // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
        // ===========================================

        relative_urls: false
      });
    </script>
    <!-- insert posting -->
    <?php include "../koneksi/config.php";

    if (isset($_POST['tambah'])) {

      // Ambil Data yang Dikirim dari Form
      $kategori = $_POST['kategori'];
      $judul = $_POST['judul'];
      $title = $_POST['title'];
      $isi = $_POST['isi'];
      $penulis = $_POST['penulis'];
      $foto = $_FILES['foto']['name'];
      $tmp = $_FILES['foto']['tmp_name'];

      // Rename nama fotonya dengan menambahkan tanggal dan jam upload
      $fotobaru = date('dmYHis') . $foto;
      // Set path folder tempat menyimpan fotonya
      $path = "../../assets/img/" . $fotobaru;
      // Proses upload
      if (move_uploaded_file($tmp, $path)) { // Cek apakah gambar berhasil diupload atau tidak
        // Proses simpan ke Database
        $query = "INSERT INTO posting VALUES(NULL,'" . $kategori . "','" . $penulis . "',1,'" . $judul . "','" . $title . "','" . $fotobaru . "','" . $isi . "',0,current_timestamp(),current_timestamp())";
        $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
        if ($sql) { // Cek jika proses simpan ke database sukses atau tidak
          // Jika Sukses, Lakukan :
          header("location: index.php?page=posting"); // Redirect ke halaman index.php
        } else {
          // Jika Gagal, Lakukan :
          echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
          echo "<br><a href='index.php?page=posting'>Kembali Ke Form</a>";
        }
      } else {
        // Jika gambar gagal diupload, Lakukan :
        echo "Maaf, Gambar gagal untuk diupload.";
        echo "<br><a href='index.php?page=posting'>Kembali Ke Form</a>";
      }
    }
    ?>
    <!-- /.insert posting -->