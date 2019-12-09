  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../assets/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['NAMA']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> <?php echo $_SESSION['LEVEL']; ?></a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Akun Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="?page=dashboard"><i class="fa fa-circle-o"></i> Dashboard</a></li>
            <li><a href="?page=posting"><i class="fa fa-circle-o"></i> Posting</a></li>
            <li><a href="?page=kategori"><i class="fa fa-circle-o"></i> Kategori</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Fitur</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">3</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?page=pesan"><i class="fa fa-circle-o"></i> Pesan</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Kontak Informasi</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Posting Moderasi</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-th"></i> <span>Advertisement</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">new</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-gears"></i> <span>Pengaturan User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> User Profile</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Pengaturan User
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> User Verifikasi</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> User Hak Akses
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Super User</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Operator</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Penulis</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">Action</li>
        <li><a href="../logout.php" onClick="return confirm('Apakah Anda Yakin Akan Keluar!!')"><i class="fa fa-circle-o text-red"></i> <span>Logout</span></a></li>
    </section>
    <!-- /.sidebar -->
  </aside>