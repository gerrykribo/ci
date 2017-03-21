  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <li>
          <a href="<?php echo base_url('index.php/admin/admin/index'); ?>">
            <i class="fa fa-th"></i> <span>Dasbord</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-text-o"></i> <span>Artikel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('index.php/admin/blog/index'); ?>"><i class="fa fa-circle-o"></i> Buat</a></li>
            <li><a href="<?php echo base_url('index.php/admin/blog/tampilArtikel'); ?>"><i class="fa fa-circle-o"></i> Data</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-picture-o"> <span>Gallery</span></i>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('index.php/admin/gallery/tambahFoto'); ?>"><i class="fa fa-circle-o"></i> Buat</a></li>
            <li><a href="<?php echo base_url('index.php/admin/gallery/index'); ?>"><i class="fa fa-circle-o"></i> Data</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo base_url('index.php/admin/kuisioner'); ?>">
            <i class="fa fa-paper-plane-o"></i> <span>Kuisioner</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>