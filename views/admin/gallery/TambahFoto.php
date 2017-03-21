<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content header -->
    <section class="content-header">
        <h1>Gallery</h1>
        <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> Admin</li>
            <li>Gallery</li>
            <li class="active">Tambah</li>
        </ol>
    </section>
    <!-- End Content header -->
    <!-- Content Body -->
    <section class="content">
        <!-- Text Editor -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Upload Foto</h3>
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                      <!-- /. tools -->
                    </div>
                    <?php if (isset($sukses)) {
                      ?>
                      <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-check"></i>Foto berhasil di simpan.
                      </div>
                      <?php
                    } ?>
                    <?php echo form_open_multipart('index.php/admin/gallery/simpanFoto'); ?>
                    <div class="box-body">
                        <div class="form-group">
                            <label>Judul Foto</label>
                            <textarea name="judul_foto" class="form-control"><?php echo set_value('judul_foto'); ?></textarea>
                            <?php echo form_error('judul_foto', '<code> Tolong ! ', '</code>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi Foto</label>
                            <textarea name="deskripsi_foto" class="form-control" style="max-width: 1072px;"><?php echo set_value('deskripsi_foto'); ?></textarea>
                            <?php echo form_error('deskripsi_foto', '<code> Tolong ! ', '</code>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Unit Pelayanan</label>
                            <select class="form-control" name="jenis_foto">
                                <option value="kegiatan">Kegiatan Puskesmas</option>
                                <option value="lain-lain">Lain - lain</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Upload Foto</label>
                            <input type="file" name="file_foto">
                            <?php echo $error; ?>
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
        </div>
        <!-- End Text Editor -->
    </section>
    <!-- End Content Body -->
</div>
<!-- End Content Wrapper. Contains page content -->