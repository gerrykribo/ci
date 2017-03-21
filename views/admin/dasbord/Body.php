<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dasbord
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Admin</li>
        <li class="active">Dasbord</li>
      </ol>
      <hr style="border: 1px solid #3c8dbc;">
    </section>

    <!-- conten -->
    <section class="content">
      
      <!-- =========================================================== -->

      <div class="row">
        <!-- col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-paper-plane-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Kuisioner :</span>
              <span class="info-box-number"><?php echo $jml_orang; ?> Orang</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-file-text-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Artikel :</span>
              <span class="info-box-number"><?php echo $jml_artikel; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-picture-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Foto :</span>
              <span class="info-box-number"><?php echo $jml_foto; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        
      </div>
      <!-- /.row -->

      <!-- =========================================================== -->

      <!-- diagram table -->
      <div class="row">
        <div class="col-md-12">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Diagram Kuisioner</h3>
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="diagram-kuisioner-total" style="height: 280px;"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- diagram table -->
       
    </section>
    <!-- end conten -->

  </div>
  <!-- /.content-wrapper -->
