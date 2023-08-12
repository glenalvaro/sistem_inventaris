<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pesan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-envelope-o"></i> Pesan</a></li>
      </ol>
    </section>

  <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Form Pesan</h3>
              </div>
                <div class="box-body">
                  <?php
                  echo $this->session->flashdata('msg');
                  ?>
                <form class="form-horizontal">
              <div class="box-body">
                  <div class="callout callout-info">
                    <h4><i class="fa fa-info"></i> Note:</h4>
                    Ini adalah form untuk mengirim pesan ke pegawai
                </div>
                 <?php foreach ($pesan as $p) { ?>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-1 control-label">Email</label>
                  <div class="col-sm-4">
                    <input type="email" class="form-control" value="<?php echo $p->email ?>" disabled>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-1 control-label">Pesan</label>
                  <div class="col-sm-6">
                    <textarea class="form-control" rows="6" cols="100" disabled><?php echo $p->pesan ?></textarea>
                  </div>
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                 <div class="col-sm-1">
                <a href="pesan/edit/<?php echo $p->id; ?>" class="btn btn-social btn-flat btn-danger btn-sm"><i class="fa fa-edit"></i> Buat Pesan</a>
              </div>
            </div>
             <?php } ?>
          </div>
        </form>
          </div>
        </div>
    </div>
  </div>
</section>
</div>
</section>