<style>
     .dataTable > thead > tr > th[class*="sort"]::after{display: none}
</style> 
<script src="<?php echo base_url('assets/jquery.min.js'); ?>"></script> 
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Barang
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-folder-open"></i> Barang</a></li>
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
          <div class="box box-warning">
            <div class="box-header">
            <div>
              <a href="<?php echo base_url('data_barang/tambah'); ?>" class="btn btn-social btn-flat btn-success btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Add Data"><i class="fa fa-plus"></i> Tambah Data Barang</a>

              <?php 
              if ($this->session->userdata('level')=='admin') { ?>
              <a type="submit" id="btn-delete" class="btn btn-social btn-flat btn-danger btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Hapus Data Terpilih"><i class="fa fa-trash"></i> Hapus Data Terpilih</a>
               <?php }; ?>
               
              <a href="<?php echo base_url('data_barang/print'); ?>" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" target="_blank" title="Print Data"><i class="fa fa-print"></i> Print</a>
              <a href="<?php echo base_url('data_barang/pdf'); ?>" class="btn btn-social btn-flat btn-warning btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" target="_blank" title="Export"><i class="fa fa-file-pdf-o"></i> Export Pdf</a>
            </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               <form method="post" action="<?php echo base_url('data_barang/delete_all') ?>" id="form-delete">
              <table id="table" class="table table-bordered table-hover">
                <thead class="bg-gray disabled color-palette">
                <tr>
                  <th>
                    <input type="checkbox" id="check-all">
                  </th>
                  <th class="text-center">No</th>
                  <th class="text-center">No Seri Barang</th>
                  <th class="text-center">Nama Barang</th>
                  <th class="text-center">Penempatan Barang</th>
                  <th class="text-center">Kategori</th>
                  <th class="text-center">Harga</th>
                  <th width="2%" class="text-center">Jumlah</th>
                  <th class="text-center">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $no = 1;
                foreach($barang as $b){ 
                ?>
                <tr>
                  <td>
                    <input type="checkbox" class="check-item" name="id_barang[]" value="<?= $b->id_barang ?>">
                  </td>
                  <td class="text-center"><?php echo $no++ ?></td>
                  <td class="text-center"><?php echo $b->no_seri ?></td>
                  <td><?php echo $b->nama_barang ?></td>
                  <td><?php echo $b->penempatan_barang ?></td>
                  <td><?php echo $b->jenis_barang ?></td>
                  <td><?php echo $b->hrg_barang ?></td>
                  <td class="text-center"><?php echo $b->jumlah_barang ?></td>
                  <td class="text-center">
                      <a href="data_barang/detail/<?php echo $b->id_barang; ?>" title="Lihat Detail" class="btn btn-info btn-xs"><i class="fa fa-eye"></i></a>
                      <a href="data_barang/edit/<?php echo $b->id_barang; ?>" title="Edit Data" class="btn btn-success btn-xs"><i class="fa fa-pencil-square-o"></i></a>
                       <?php 
                       if ($this->session->userdata('level')=='admin') { ?>
                      <a onclick="deleteConfirm('<?php echo site_url('data_barang/hapus/'.$b->id_barang) ?>')"
                      href="#" class="btn btn-danger btn-xs" title="Hapus Data"><i class="fa fa-trash"></i></a>
                    <?php }; ?>
                  </td>
                </tr>
            <?php } ?>
                </tbody>
              </table>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


         <!--MODAL HAPUS-->
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel">Hapus Data</h4>
              </div>
              <form class="form-horizontal">
                <div class="modal-body">
                  <input type="hidden" name="kode" id="id_cus" value="">
                  <p>Apakah Anda yakin mau menghapus surat ini?</p>   
                </div>
              <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a id="btn-hapus" class="btn btn-danger" href="#"><i class="fa fa-fw fa-lg fa-check-circle"></i> Delete</a>
              </div>
              </form>
          </div>
      </div>
  </div>

<script>
function deleteConfirm(url){
  $('#btn-hapus').attr('href', url);
  $('#deleteModal').modal();
}
</script>
</div>
</div>
</section>
</div>


