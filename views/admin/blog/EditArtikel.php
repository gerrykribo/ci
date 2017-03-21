<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content header -->
    <section class="content-header">
        <h1>Artikel</h1>
        <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> Admin</li>
            <li> Artikel</li>
            <li class="active"> Edit Artikel</li>
        </ol>
        <hr style="border: 1px solid #3c8dbc;">
    </section>
    <!-- End Content Header -->
    <!-- Content Body -->
    <section class="content">
        <!-- text editor -->
        <div class="row">
            <div class="col-md-12">
              <!-- /.box -->
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Silahkan Buat Artikel Anda :</h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                      <i class="fa fa-times"></i></button>
                  </div>
                  <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                <?php if (isset($sukses)) {
                  ?>
                  <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-check"></i>Artikel berhasil disimpan.
                  </div>
                  <?php
                } ?>
                <?php echo form_open_multipart('index.php/admin/blog/simpanEdit'); ?>
                  <?php 
                    foreach ($dataArtikel as $key) {
                      echo '<input type="hidden" name="id_artikel" value="'.$key['id_artikel'].'">';
                    }
                  ?>
                  <div class="form-group">
                    <label>Judul Artikel</label>
                    <textarea class="form-control" name="judul_artikel"><?php echo $key['judul_artikel']; ?></textarea>
                    <?php echo form_error('judul_artikel', '<code> Tolong ! ', '</code>'); ?>
                  </div>
                  <div class="form-group">
                    <label>Jenis Artikel</label>
                    <p class="help-block">Catatan : set ulang jenis artikel.</p>
                    <select class="form-control" name="jenis_artikel">
                      <option value="kesehatan">Kesehatan</option>
                      <option value="lain-lain">Lain-lain</option>
                    </select>
                    <?php echo form_error('jenis_artikel', '<code> Tolong ! ', '</code>'); ?>
                  </div>
                  <div class="form-group">
                      <label>Ulasan Artikel</label>
                      <textarea name="ringkasan_artikel" class="form-control"><?php echo $key['ringkasan_artikel']; ?></textarea>
                      <?php echo form_error('ringkasan_artikel', '<code> Tolong ! ', '</code>'); ?>
                  </div>
                  <div class="form-group">
                    <label>Isi Artikel</label>  
                    <textarea id="editor1" name="deskripsi_artikel" rows="10" cols="80" class="form-control"><?php echo $key['deskripsi_artikel']; ?></textarea>
                    <?php echo form_error('deskripsi_artikel', '<code> Tolong ! ', '</code>'); ?>
                  </div>
                </div>
                <div class="box-footer">
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>  
                </div>
                <?php echo form_close(); ?>
              </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- end text editor -->
    </section>
    <!-- End Content Body -->
</div>
<!-- End Content Wrapper. Contains page content -->