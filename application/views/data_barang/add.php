<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">

    <!-- Dashboard content -->
    <div class="row">
      <div class="col-md-8"></div>
      <div class="col-md-12">
        <div class="panel panel-flat">

            <div class="panel-body">

              <fieldset class="content-group">
                <legend class="text-bold"> Tambah Data Barang</legend>
                <div class="form-group">
                  <div class="col-lg-6">
                    <a href="<?php echo base_url('data_barang'); ?>" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-arrow-circle-o-left"></i> Kembali Ke Data Barang</a>
                  </div>
                </div>
                <br>
                <br>
                <form class="form-horizontal" action="tambah_aksi" method="post" enctype="multipart/form-data">
                   <div class="form-group">
                    <label class="control-label col-lg-2">No Seri Barang</label>
                    <div class="col-lg-6">
                      <input type="text" name="no_seri" class="form-control" value="BRG<?php echo sprintf("%03s", $kode_barang) ?>" placeholder="No Seri Barang" maxlength="100" required readonly>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2">Nama Barang</label>
                    <div class="col-lg-6">
                      <input type="text" name="nama_barang" class="form-control" value="" placeholder="Nama Barang" maxlength="100" required>
                    </div>
                  </div>


                   <div class="form-group">
                        <label for="penempatan_barang" class="col-sm-2 control-label">Kategori</label>
                        <div class="col-sm-6">
                          <select class="form-control" name="jenis_barang" required>
                          <option value="">---Pilih Kategori---</option>
                          <?php foreach($kategori as $kr): ?>
                            <option value="<?= $kr->nama_kategori; ?>"><?= $kr->nama_kategori; ?></option>

                          <?php endforeach; ?>
                        </select> 
                        </div>
                    </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2">Jumlah Barang</label>
                    <div class="col-lg-6">
                      <input type="number" name="jumlah_barang" class="form-control" value="" placeholder="Jumlah Barang" maxlength="100" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2">Tahun Pengadaan</label>
                    <div class="col-lg-6">
                      <input type="date" name="thn_pengadaan" class="form-control" value="" placeholder="Tahun Pengadaan Barang" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2">Distributor</label>
                    <div class="col-lg-6">
                      <input type="text" name="distributor" class="form-control" value="" placeholder="Distributor" maxlength="100" required>
                    </div>
                  </div>

                  <div class="form-group">
                        <label for="penempatan_barang" class="col-sm-2 control-label">Penempatan Barang</label>
                        <div class="col-sm-6">
                          <select class="form-control" name="penempatan_barang" required>
                          <option value="">---Pilih ruangan---</option>
                          <?php foreach($barang as $br): ?>
                            <option value="<?= $br->nama_ruangan; ?>"><?= $br->nama_ruangan; ?></option>

                          <?php endforeach; ?>
                        </select> 
                        </div>
                    </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2">Harga Barang</label>
                    <div class="col-lg-6">
                      <input type="text" name="hrg_barang" class="form-control" value="" placeholder="Rp" required>
                    </div>
                  </div>


                  <!-- <div class="form-group">
                    <label class="control-label col-lg-2">Unggah Dokumen</label>
                    <div class="col-lg-6">
                      <input type="file" name="file" class="form-control" value="" required>
                      <small>Ukuran file max 5 mb</small>
                      <small class="text-red"> Eks. pdf|docx|jpg|png</small>

                    </div>
                  </div> -->

                <div class='box-footer'>
                  <div class='col-lg-8'>
                    <button type="reset" class="btn btn-social btn-flat btn-danger btn-sm"><i class="fa fa-times"></i> Batal</button>
                    <button type="submit" class="btn btn-social btn-flat btn-info btn-sm pull-right"><i class="fa fa-check"></i> Simpan</button>
                  </div>
                  </div>

                </form>
              </fieldset>
            </div>
        </div>
      </div>
    </div>
</div>
</div>
