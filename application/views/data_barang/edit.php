<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">

    <!-- Dashboard content -->
    <div class="row">
      <div class="col-md-12"></div>
      <div class="col-md-12">
        <div class="panel panel-flat">

            <div class="panel-body">

              <fieldset class="content-group">
                <legend class="text-bold"> Edit Data Barang</legend>
                 <?php foreach($barang as $u){ ?>
                <form class="form-horizontal" action="<?php echo base_url('data_barang/update'); ?>" method="post" enctype="multipart/form-data">
                   <div class="form-group">
                    <label class="control-label col-lg-2">No Seri Barang</label>
                    <div class="col-lg-6">
                      <input type="hidden" name="id_barang" value="<?php echo $u->id_barang ?>">
                      <input type="text" name="no_seri" class="form-control" value="<?php echo $u->no_seri ?>">
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="control-label col-lg-2">Nama Barang</label>
                    <div class="col-lg-6">
                      <input type="text" name="nama_barang" class="form-control" value="<?php echo $u->nama_barang ?>">
                    </div>
                  </div>

                  <div class="form-group">
                        <label for="jenis_barang" class="col-sm-2 control-label">Kategori</label>
                        <div class="col-sm-6">
                          <select class="form-control" name="jenis_barang" required>
                          <option value="<?php echo $u->jenis_barang ?>"><?php echo $u->jenis_barang ?></option>
                          <?php foreach($kategori as $d): ?>
                            <option value="<?= $d->nama_kategori; ?>"><?= $d->nama_kategori; ?></option>

                          <?php endforeach; ?>
                        </select> 
                        </div>
                    </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2">Jumlah Barang</label>
                    <div class="col-lg-6">
                      <input type="text" name="jumlah_barang" class="form-control" value="<?php echo $u->jumlah_barang ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2">Tahun Pengadaan</label>
                    <div class="col-lg-6">
                      <input type="date" name="thn_pengadaan" class="form-control" value="<?php echo $u->thn_pengadaan ?>" >
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="control-label col-lg-2">Distributor</label>
                    <div class="col-lg-6">
                      <input type="text" name="distributor" class="form-control" value="<?php echo $u->distributor ?>">
                    </div>
                  </div>

                  <div class="form-group">
                        <label for="penempatan_barang" class="col-sm-2 control-label">Penempatan Barang</label>
                        <div class="col-sm-6">
                          <select class="form-control" name="penempatan_barang" required>
                          <option value="<?php echo $u->penempatan_barang ?>"><?php echo $u->penempatan_barang ?></option>
                          <?php foreach($ruang as $d): ?>
                            <option value="<?= $d->nama_ruangan; ?>"><?= $d->nama_ruangan; ?></option>

                          <?php endforeach; ?>
                        </select> 
                        </div>
                    </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2">Harga Barang</label>
                    <div class="col-lg-6">
                      <input type="text" name="hrg_barang" class="form-control" value="<?php echo $u->hrg_barang ?>">
                    </div>
                  </div>

                   <!-- <div class="form-group">
                    <label class="control-label col-lg-2">Unggah Dokumen</label>
                    <div class="col-lg-6">
                      <input type="file" name="file" class="form-control" value="" required>
                      <a href="<?= base_url(); ?>/upload/surat_masuk/<?= $u->file; ?>" target="_blank" >Lihat File Sebelumya</a><br>
                      <small>Ukuran file max 5 mb</small>
                      <small>Ekstensi pdf|docx|jpg|png</small>

                    </div>
                  </div> -->

                  <div class='box-footer'>
                    <div class="col-sm-3">
                    <a href="<?php echo base_url('data_barang'); ?>" class="btn btn-social btn-flat btn-danger btn-sm"><i class="fa fa-reply"></i> Kembali</a>
                    <button type="submit" name="btnsimpan" class="btn btn-social btn-flat btn-info btn-sm pull-right"><i class="fa fa-check"></i> Simpan</button>
                  </div>
                </div>
                </form>
                 <?php } ?>
              </fieldset>


            </div>

        </div>
      </div>
    </div>
</div>
</div>
