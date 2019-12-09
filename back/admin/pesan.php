    <!DOCTYPE html>
    <!-- DataTables CSS -->
    <link href="../../assets/admin/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../../assets/admin/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Pesan
        <small>Advanced pesan tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Fitur</a></li>
        <li class="active">Pesan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
   <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">
                            Data Table Pesan
        </div>
                        <!-- /.panel-heading ?page=e_posting&id=<?=$data;?>-->
        <div class="panel-body">
          <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Nomor Pesan</th>
                                        <th>Email</th>
                                        <th>Telp</th>
                                        <th>Judul Pesan</th>
                                      <th>Inbox Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                          <tbody>
                      <?php  include "../koneksi/config.php";
                      $query = "SELECT * FROM pesan";
                      $result = mysqli_query($conn, $query) or die('Error');
                      while($data = mysqli_fetch_array($result))
                        {
                      ?>
                                    <tr class="odd gradeX">
                                        <td><?=$data["ID_PESAN"];?></td>
                                        <td><?=$data["EMAIL"];?></td>
                                        <td><?=$data["TELP"];?></td>
                                        <td><?=$data["JUDUL_PESAN"];?></td>
                                      <td class="center"><?php $date=$data['TGL_PESAN']; $tgl =  date('F d, Y ( H:i )', strtotime($date)); echo $tgl;?></td>
                                        <td>
                                        <div class="btn-group">
                              <button type="button" class="btn btn-danger">Action</button>
                              <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                              </button>
                              <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Balas</a></li>
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
    