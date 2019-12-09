    <!DOCTYPE html>
    <!-- DataTables CSS -->
    <link href="../../assets/admin/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../../assets/admin/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Posting
        <small>Advanced edit posting</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Akun Management</a></li>
        <li><a href="?page=posting">Posting</a></li><li class="active">Edit</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
   <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
              <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Posting</h3>
            </div>
            <!-- /.box-header -->
                 <?php  
      include "../koneksi/config.php";
      $id=$_GET["id"];
      $query = "SELECT * FROM posting, kategori, status WHERE ID_POST=$id AND kategori.ID_KAT=posting.ID_KAT AND status.ID_STATUS=posting.ID_STATUS";
      $result = mysqli_query($conn, $query) or die('Error');
      ?>
            <!-- form start -->
            <form role="form" method="post" action="e_posting.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
              <div class="box-body">
                <?php if ($row=mysqli_num_rows($result)){ ?>
                <?php while($row=mysqli_fetch_array($result)){ ?>
                        <div class="form-group">
                        <label class="control-label" for="kategori">Kategori</label>
                        <select name="kategori" class="form-control" id="kategori" required>
                          <option value="<?php echo ''.$row['ID_KAT'].''?>"><?php echo ''.$row['NAMA_KAT'].''?></option>
                        <?php  include "../koneksi/config.php";
                            $query = "SELECT * FROM kategori";
                            $result = mysqli_query($conn, $query) or die('Error');
                            while($data = mysqli_fetch_array($result))
                              {
                          ?>
                            <option value="<?=$data["ID_KAT"];?>"><?=$data["NAMA_KAT"];?></option>
                        <?php
                        }
                        ?>
                        </select>
                        </div>
                        <div class="form-group">
                        <label class="control-label" for="status">Status</label>
                        <select name="status" class="form-control" id="status" required>
                          <option value="<?php echo ''.$row['ID_STATUS'].''?>"><?php echo ''.$row['NAMA_STATUS'].''?></option>
                        <?php  include "../koneksi/config.php";
                            $query = "SELECT * FROM status WHERE ID_STATUS";
                            $result = mysqli_query($conn, $query) or die('Error');
                            while($data = mysqli_fetch_array($result))
                              {
                          ?>
                            <option value="<?=$data["ID_STATUS"];?>"><?=$data["NAMA_STATUS"];?></option>
                        <?php
                        }
                        ?>
                        </select>
                        </div>
                                                    <div class="form-group">
                                                    <label class="control-label" for="judul">Judul</label>
                                                    <input type="text" name="judul" class="form-control" id="judul" value="<?php echo ''.$row['JUDUL_POST'].''?>"required>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="title">Title</label>
                                                    <input type="text" max="50" name="title" class="form-control" id="title" value="<?php echo ''.$row['TITLE_POST'].''?>"required>
                                                </div>
                                                <div class="form-group">
                        <label class="control-label" for="foto">Foto</label>
                              
                              <input type="file" name="foto">
                              <input type="checkbox" name="ubah_foto" value="true"> <label style="color: blue; font:16px arial;">Ceklist Jika Ingin Mengubah Foto</label><br>

                        <label style="color: red; font:14px Candara; width=30%">Wajib Ukuran 750x450 Pixels</label>
                        </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="isi">Isi</label>
                                                    <textarea type="text" name="isi" class="form-control" id="isi" rows="15" cols="80"><?php echo ''.$row['ISI'].''?> </textarea>
                                                </div>
                                                <div class="form-group">
                                                <input type="hidden" name="penulis" class="form-control" id="penulis" value="<?php echo $_SESSION['ID_ADMIN']; ?>" required>
                                                <input type="hidden" name="id" class="form-control" id="id" value="<?php echo ''.$row['ID_POST'].''?>" required>
                                                <input name="foto1" class="form-control" type="hidden" id="foto1" value="<?php echo ''.$row['FOTO_POST'].''?>" required>

              </div>
              <button type="submit" name="tambah" class="btn btn-primary"><i class="fa fa-edit"></i> Update</button>
            </form>
          </div>
          <!-- /.box -->
      <!-- /.row -->
    </section>

 <!-- tinymce -->   
  <script type="text/javascript" src="../tinymce/js/tinymce/tinymce.min.js"></script>
  <script type="text/javascript">
tinymce.init({
    selector: "textarea",
 
        width: "1059",
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
  <?php } ?>
<?php } ?>
