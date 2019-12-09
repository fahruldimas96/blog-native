    <!DOCTYPE html>
    <!-- DataTables CSS -->
    <link href="../../assets/admin/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../../assets/admin/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Kategori
        <small>Advanced kategori tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Akun Management</a></li>
        <li class="active">Kategori</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              Data Table Kategori
            </div>
            <div class="box-body">
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default-input">
                <i class="fa fa-plus-circle"></i> Create Kategori
              </button>
            </div>
            <!-- /.panel-heading ?page=e_posting&id=<?= $data; ?>-->
            <div class="panel-body">
              <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                  <tr>
                    <th>Nomor Kategori</th>
                    <th>Nama</th>
                    <th>Link</th>
                    <th>Warna</th>
                    <th>Registered Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php include "../koneksi/config.php";
                  $query = "SELECT * FROM kategori";
                  $result = mysqli_query($conn, $query) or die('Error');
                  while ($data = mysqli_fetch_array($result)) {
                    ?>
                    <tr class="odd gradeX">
                      <td><?= $data["ID_KAT"]; ?></td>
                      <td><?= $data["NAMA_KAT"]; ?></td>
                      <td><?= $data["TARGET_LINK"]; ?></td>
                      <td><?= $data["NOTE"]; ?></td>
                      <td class="center"><?php $date = $data['TGL_KAT'];
                                            $tgl =  date('F d, Y ( H:i )', strtotime($date));
                                            echo $tgl; ?></td>
                      <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-danger">Action</button>
                          <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Update</a></li>
                            <li><a href="#">View</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onClick="return confirm('Apakah Anda Yakin Menghapus Data Ini!!')">Delete</a></li>
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