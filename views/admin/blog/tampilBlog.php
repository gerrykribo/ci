<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content header -->
  <section class="content-header">
      <h1>Artikel</h1>
      <ol class="breadcrumb">
          <li><i class="fa fa-dashboard"></i> Admin</li>
          <li> Artikel</li>
          <li class="active"> Data Artikel</li>
      </ol>
      <hr style="border: 1px solid #3c8dbc;">
  </section>
  <!-- End Content Header -->
  <!-- Content Body -->
  <section class="content">
    <!-- text editor -->
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <!-- box header -->
          <div class="box-header">
            <h3 class="box-title">Data Table With Full Features</h3>
          </div>
          <!-- end box header -->
          <!-- box body -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Penulis Artikel</th>
                  <th>Tanggal Artikel</th>
                  <th>Judul Artikel</th>
                  <th>Jenis Artikel</th>
                  <th>Edit</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $no = 1;
                foreach ($dataArtikel as $key) {
                ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $key['penulis_artikel']; ?></td>
                  <td><?php echo $key['tanggal_artikel']; ?></td>
                  <td><?php echo $key['judul_artikel']; ?></td>
                  <td><?php echo $key['jenis_artikel']; ?></td>
                  <td>
                    <a class="btn btn-sm" href="<?php echo base_url('index.php/admin/blog/editArtikel/'.$key['id_artikel']); ?>"><i class="fa fa-edit"></i> Edit</a> | 
                    <a class="btn btn-sm" href="<?php echo base_url('index.php/admin/blog/deleteArtikel/'.$key['id_artikel']); ?>"><i class="fa fa-remove"></i> Hapus</a>
                  </td>
                </tr>
                <?php
                $no++;
                }
                ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>No.</th>
                  <th>Penulis Artikel</th>
                  <th>Tanggal Artikel</th>
                  <th>Judul Artikel</th>
                  <th>Jenis Artikel</th>
                  <th>Edit</th>
                </tr>
              </tfoot>
            </table>
          </div>
          <!-- end box-body -->
        </div>
      </div>
    </div>
    <!-- end text editor -->
  </section>
  <!-- End Content Body -->
</div>
<!-- End Content Wrapper. Contains page content -->