<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kelola Sistem
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-cogs"></i> Setting</a></li>
        <li class="active">Info</li>
      </ol>
    </section>
 <?php 
  foreach($setting as $p){ 
  ?>
<form>
<section class="content">
      <div class="row">
         <div class="col-md-3">
          <div class="box box-danger">
            <div class="box-header with-border">
              <h4 class="box-title text-bold">Logo Aplikasi</h4>
            </div>
            <div class="box-body">
              <center><img src="<?php echo base_url ($p->image); ?>" width="180" height="180">
              </center>
              <br>      
            </div>  
          </div>
        </div>

        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-body">
              <fieldset class="content-group">
                <legend class="text-bold"> Info Sistem</legend>
                  <?php
                  echo $this->session->flashdata('msg');
                  ?>
                <div class="form-group">
                    <label class="col-sm-3 control-label">ID Company</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" value="<?php echo $p->no_identitas ?>" disabled>
                    </div>
                  </div>
                <br>
                <br>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Title Aplikasi</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" value="<?php echo $p->title_app ?>" disabled>
                    </div>
                  </div>
                  <br>
                  <br>
                   <div class="form-group">
                    <label class="col-sm-3 control-label">Judul Aplikasi</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" value="<?php echo $p->judul_app ?>" disabled>
                    </div>
                  </div>
                  <br>
                <br>
                   <div class="form-group">
                    <label class="col-sm-3 control-label">Nama Company</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" value="<?php echo $p->nama_company ?>" disabled>
                    </div>
                  </div>
                  <br>
                <br>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" value="<?php echo $p->email ?>" disabled>
                    </div>
                  </div>
                  <br>
                <br>
                <div class="form-group">
                    <label class="col-sm-3 control-label">No Telepon</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" value="<?php echo $p->no_telepon ?>" disabled>
                    </div>
                  </div>
              <br>
              <br>
              <div class="form-group">
                    <label class="col-sm-3 control-label">KODE POS</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" value="<?php echo $p->kode_pos ?>"
                      disabled>
                    </div>
                  </div>
                  <br>
                  <br>
              <div class="form-group">
                    <label class="col-sm-3 control-label">Alamat</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" value="<?php echo $p->alamat ?>" disabled>
                    </div>
                  </div>
                  <br>
                  <br>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Warna Sistem</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" value="<?php echo $p->warna_sistem ?>" disabled>
                    </div>
                  </div>
              <br>
              <br>
              <div class='box-footer'>
                    <div class="col-sm-3">
                    <a href="setting/edit/<?php echo $p->id; ?>" class="btn btn-social btn-flat btn-danger btn-sm"><i class="fa fa-edit"></i> Edit</a>
                  </div>
                </div>
              </fieldset>      
            </div>
          </div>
        </div>
      </div>    
</form>
<?php }; ?>
    </section>
</div>



