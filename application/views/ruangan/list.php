<style>
     .dataTable > thead > tr > th[class*="sort"]::after{display: none}
</style>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Ruangan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-cubes"></i> Ruangan</a></li>
        <li class="active">Data</li>
      </ol>
    </section>
<!-- disini tempat menaruh isi halaman -->
<section class="content">
  <?php
    echo $this->session->flashdata('msg');
  ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-danger">
            <div class="box-header">
            <div>
              <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-social btn-flat btn-success btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-plus"></i> Tambah Data Ruangan</a>
            </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table" class="table table-bordered table-hover">
                <thead class="bg-gray disabled color-palette">
                <tr>
                  <th class="text-center">No</th>
                  <th>ID Ruangan</th>
                  <th>Nama Ruangan</th>
                  <th class="text-center">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $no = 1;
                foreach($ruang as $r){ 
                ?>
                <tr>
                  <td class="text-center"><?php echo $no++ ?></td>
                  <td><?php echo $r->id_ruangan ?></td>
                  <td><?php echo $r->nama_ruangan ?></td>
                  <td class="text-center">
                      <a href="#" class="btn btn-success btn-xs" data-toggle="modal" data-target="#modal_edit<?= $r->id_ruangan; ?>"><i class="fa fa-pencil-square-o"></i></a>
                      <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal_hapus1<?= $r->id_ruangan;?>"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
            <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

<!-- Modal Tambah -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Data Ruangan</h4>
      </div>

      <div class="modal-body">
        <form class="form-horizontal"  enctype="multipart/form-data" method="POST" action="<?= base_url('ruangan/tambah_aksi'); ?>">

          <div class="box-body">
                    <div class="form-group">
                        <label for="id" class="col-sm-3 control-label">ID Ruangan</label>
                        <div class="col-sm-8">
                          
                          <input type="text" name="id_ruangan" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nama" class="col-sm-3 control-label">Nama Ruangan</label>
                        <div class="col-sm-8">
                          <input type="text" name="nama_ruangan" class="form-control" required>
                        </div>
                    </div>
     
              <div class="modal-footer">
                  <button type="reset" class="btn btn-social btn-flat btn-danger btn-sm"><i class="fa fa-times"></i> Batal</button>
                  <button type="submit" class="btn btn-social btn-flat btn-info btn-sm pull-right"><i class="fa fa-check"></i> Simpan</button>
            </div>

          </div>    <!-- end box body -->
        </form>
      </div>

    </div>
  </div>
</div>

<!-- Modal edit -->
<?php foreach($ruang as $r):  ?>
<div class="modal fade" id="modal_edit<?= $r->id_ruangan;?>" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Ruangan</h4>
      </div>

      <div class="modal-body">
        <form class="form-horizontal" method="post" action="<?= base_url('ruangan/edit'); ?>">
          <div class="form-group">
            <!-- <label class="control-label col-md-3">ID Ruangan</label> -->
            <div class="col-md-8">
              <input class="form-control"  type="hidden" name="id_ruangan" value="<?= $r->id_ruangan;?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">Nama Ruangan</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="nama_ruangan"  value="<?= $r->nama_ruangan; ?>" required >
            </div>
          </div>
          

          <div class="modal-footer">
                  <button type="reset" class="btn btn-social btn-flat btn-danger btn-sm"><i class="fa fa-times"></i> Batal</button>
                  <button type="submit" class="btn btn-social btn-flat btn-info btn-sm pull-right"><i class="fa fa-check"></i> Simpan</button>
            </div>

        </form>
      </div>

    </div>
  </div>
</div>
<?php endforeach; ?>


         <!--MODAL HAPUS-->
 <?php  foreach($ruang as $r): ?>
<div class="modal fade" id="modal_hapus1<?= $r->id_ruangan;?>"  role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
        <h3 class="modal-title" id="myModalLabel">Hapus Data Ruangan</h3>
      </div>
      <form class="form-horizontal" method="post" action="<?= base_url('ruangan/hapus');?>">
        <div class="modal-body">
          <p>Anda yakin mau menghapus?</p>
        </div>
        <div class="modal-footer">
          <input type="hidden" name="id_ruangan" value="<?= $r->id_ruangan;?>"> 
          <a class="btn btn-default icon-btn" href="#" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>&nbsp;&nbsp;&nbsp;<button class="btn btn-danger icon-btn" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Hapus</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php   endforeach; ?>
</div>
</div>
</section>
</div>


