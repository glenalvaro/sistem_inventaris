<?php 
  foreach($setting as $p){ 
    ?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url ($p->image); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $p->title_app ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> <?php echo $this->session->userdata('level'); ?></a>
        </div>
      </div>
<?php }; ?>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
      <?php
      if ($this->session->userdata('level')=='admin') { ?>
        <li class="header">Data</li>
        <li>
          <a href="<?php echo base_url('admin'); ?>">
            <i class="fa fa-dashboard"></i> <span> Dashboard</span>
          </a>
        </li>
      <?php }; ?>
      <?php
      if ($this->session->userdata('level')=='pegawai') { ?>
        <li class="header">Administrator</li>
        <li>
          <a href="<?php echo base_url('pegawai'); ?>">
            <i class="fa fa-home"></i> <span> Home</span>
          </a>
        </li>
      <?php }; ?>

       <?php
        if ($this->session->userdata('level')=='admin') { ?>
        <li>
      <li>
          <a href="<?php echo base_url('ruangan'); ?>">
            <i class="fa fa-cubes"></i> <span> Data Ruangan</span>
          </a>
        </li>
        <?php }; ?>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-sitemap"></i>
            <span>Kelola Data Barang</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('data_barang'); ?>"><i class="fa fa-folder-open"></i> Item</a></li>

         <?php
        if ($this->session->userdata('level')=='admin') { ?>
            <li><a href="<?php echo base_url('kategori'); ?>"><i class="fa fa-clipboard"></i> Kategori</a></li>
            <?php }; ?>
          </ul>
        </li>

         <?php
        if ($this->session->userdata('level')=='admin') { ?>
        <li>
          <a href="<?= base_url('pengguna'); ?>">
            <i class="fa fa-users"></i> <span> Kelola Users</span>
          </a>
        </li>

       <li class="header">Setting</li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-desktop"></i>
            <span>Manajemen Aplikasi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="<?php echo base_url('setting'); ?>">
              <i class="fa fa-cogs"></i> <span>Kelola Sistem</span>
            </a>
            </li>
            <li><a href="<?php echo base_url('backup'); ?>"><i class="fa fa-database"></i> Backup DataBase</a></li>
          </ul>
        </li>

         <li>
          <a href="<?php echo base_url('pesan'); ?>">
            <i class="fa fa-comments"></i> <span>Pesan</span>
          </a>
        </li>
        <?php }; ?>

        <li>
          <a href="<?php echo base_url('profil'); ?>">
            <i class="fa fa-user"></i> <span>Profile</span>
          </a>
        </li>

        <hr class="sidebar-divider">

         <li>
          <a href="<?php echo base_url('auth/logout'); ?>">
            <i class="glyphicon glyphicon-log-out"></i> <span> Logout</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>