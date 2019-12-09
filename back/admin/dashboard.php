    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Akun Management</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>


    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Bounce Rate</p>
            </div>
            <div class="icon">
              <i class="fa fa-desktop"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">

        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">


            <!-- Chat box -->
            <div class="box box-success">
              <div class="box-header">
                <i class="fa fa-comments-o"></i>

                <h3 class="box-title">Chat</h3>
              </div>
              <div class="box-body chat" id="chat-box">
                <?php include "../koneksi/config.php";
                $query = "SELECT * FROM pesan ORDER BY ID_PESAN DESC";
                $result = mysqli_query($conn, $query) or die('Error');
                while ($data = mysqli_fetch_array($result)) {
                  ?>
                  <!-- chat item -->
                  <div class="item">
                    <img src="../../assets/admin/dist/img/user4-128x128.jpg" alt="user image" class="online">
                    <p class="message">
                      <a href="#" class="name">
                        <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> <?php $date = $data['TGL_PESAN'];
                                                                                              $tgl =  date('F d, Y ( H:i )', strtotime($date));
                                                                                              echo $tgl; ?></small>
                        <?= $data["EMAIL"]; ?>
                      </a>
                      <?= $data["ISI_PESAN"]; ?>
                    </p>
                    <div class="attachment">
                      <a href="#" class="name">
                        <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> <?php $date = $data['TGL_PESAN'];
                                                                                              $tgl =  date('F d, Y ( H:i )', strtotime($date));
                                                                                              echo $tgl; ?></small>
                        <?= $data["EMAIL"]; ?>
                      </a>

                      <p class="filename">
                        <?= $data["ISI_PESAN"]; ?>
                      </p>
                    </div>
                    <!-- /.attachment -->
                  </div>
                  <!-- /.item -->
                <?php
                }
                ?>
                <!-- /.item -->
              </div>
              <!-- /.chat -->
              <div class="box-footer">
                <div class="input-group">
                  <input class="form-control" placeholder="Type message...">

                  <div class="input-group-btn">
                    <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box (chat box) -->

            <!-- quick email widget -->
            <div class="box box-info">
              <div class="box-header">
                <i class="fa fa-envelope"></i>

                <h3 class="box-title">Quick Email</h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                  <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
                </div>
                <!-- /. tools -->
              </div>
              <div class="box-body">
                <form action="#" method="post">
                  <div class="form-group">
                    <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" placeholder="Subject">
                  </div>
                  <div>
                    <textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>
                </form>
              </div>
              <div class="box-footer clearfix">
                <button type="button" class="pull-right btn btn-default" id="sendEmail">Send
                  <i class="fa fa-arrow-circle-right"></i></button>
              </div>
            </div>



        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">
          <div class="box-body">
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-default">
              TEST MODAL
            </button>
          </div>
          <!-- Calendar -->
          <div class="box box-solid bg-green-gradient">
            <div class="box-header">
              <i class="fa fa-calendar"></i>

              <h3 class="box-title">Calendar</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="#">Add new event</a></li>
                    <li><a href="#">Clear events</a></li>
                    <li class="divider"></li>
                    <li><a href="#">View calendar</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <!--The calendar -->
              <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.row -->
          </div>
      </div>
      <!-- /.box -->

    </section>
    <!-- right col -->
    </div>
    <!-- /.row (main row) -->

    </section>
    <!-- /.content -->


    <!-- modal -->
    <div class="modal fade" id="modal-default">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">JUDUL MODAL</h4>
          </div>
          <div class="modal-body">
            <p>ISI MODAL</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->