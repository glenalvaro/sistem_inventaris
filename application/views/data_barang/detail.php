<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Detail Data Barang
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-folder-open"></i> Data Barang</a></li>
        <li class="active">Detail</li>
      </ol>
    </section>

<section class="content">
  <div class="row">
    <div class="col-xs-8">
      <div class="box box-primary">
        <div class="box-header">
          <?php foreach($detail as $d){ ?>
            <table class="table">
                <tr>
                  <th>No Seri</th>
                  <td><?php echo $d->no_seri ?></td>
                </tr>
                <tr>
                  <th>Nama Barang</th>
                  <td><?php echo $d->nama_barang ?></td>
                </tr>
                <tr>
                  <th>Kategori</th>
                  <td><?php echo $d->jenis_barang ?></td>
                </tr>
                <tr>
                  <th>Jumlah Barang</th>
                  <td><?php echo $d->jumlah_barang ?></td>
                </tr>
                <tr>
                  <th>Tahun Pengadaan</th>
                  <td><?php echo $d->thn_pengadaan ?></td>
                </tr>
                <tr>
                  <th>Distributor</th>
                  <td><?php echo $d->distributor ?></td>
                </tr>
                <tr>
                  <th>Penempatan Barang</th>
                  <td><?php echo $d->penempatan_barang ?></td>
                </tr>
                <tr>
                  <th>Harga Barang</th>
                  <td><?php echo $d->hrg_barang ?></td>
                </tr>

                <!-- <tr>
                  <th>File</th>
                  <td><a href="<?= base_url(); ?>/upload/surat_masuk/<?= $d->file; ?>" target="_blank" ><?php echo $d->file ?></a>
                  </td>
                </tr> -->
              </table>
            <?php } ?>
            <div class="box-footer">
                <a href="<?php echo base_url('data_barang'); ?>" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-arrow-circle-o-left"></i> Kembali Ke Data Barang</a>
                <!-- <a href="<?= base_url(); ?>/upload/surat_masuk/<?= $d->file; ?>" class="btn btn-primary" download><i class="fa fa-download"></i>  Download pdf</a> -->
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>


