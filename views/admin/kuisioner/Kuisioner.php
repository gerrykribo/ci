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
            <span class="info-box-icon bg-aqua"><i class="fa fa-paper-plane-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Mengisi Kuisioner</span>
              <span class="info-box-number"><?php echo $jml_orang; ?> Orang</span>
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
        <div class="col-md-12 col-sm-12">
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
              <div class="col-md-6 col-sm-6">
                <form>
                  <!-- form group -->
                  <div class="form-group">
                    <label>Date:</label>
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="month" class="form-control" id="datepicker">
                      <div class="input-group-addon">
                        <button type="submit"><i class="fa fa-play"></i></button>
                      </div>
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                </form>  
              </div>
              <div class="col-md-12 col-sm-12">
                <div class="chart">
                  <canvas id="diagram-kuisioner-total" style="min-height: 280px; max-height: 750px;"></canvas>
                </div>
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
