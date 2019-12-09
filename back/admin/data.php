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
                    <th>Tanggal Post</th>
                    <th>
                      <center><i class="fa fa-eye"></i></center>
                    </th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php include "../koneksi/config.php";
                  $query = "SELECT * FROM posting, user WHERE user.ID_ADMIN=posting.ID_ADMIN ORDER BY ID_POST ";
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
                        <div class="btn-group">
                          <button type="button" class="btn btn-danger">Action</button>
                          <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="?page=edit_posting">Update</a></li>
                            <li><a href="#">View</a></li>
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