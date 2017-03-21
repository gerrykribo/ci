  <section class="page-title">
    <div class="container">
      <h1 class="text-center">Gallery</h1>
    </div>
  </section>
  <section id="main-content" class="main-content">
    <div class="container">
        <article class="portfolio-content col-md-9">
            <ul class="nav-tabs menu-tab text-center"  role="tablist">
                <li class="active"><a role="tab" data-toggle="tab"  href="#galleryAll" title="All">All</a></li>
                <li><a role="tab" data-toggle="tab"  href="#galleryKegiatan" title="Business">Kegiatan Puskesmas</a></li>
                <li><a role="tab" data-toggle="tab"  href="#galleyLain" title="Design">Lain - Lain</a></li>
            </ul>
            <div class="tab-content">
                <div class=" tab-pane active" id="galleryAll">
                   <div class="row animation" data-animate-effect="fadeIn">
                        <?php 
                            foreach ($gallery as $galleryAll) {
                         ?>
                        <div class="col-sm-3">
                            <div class="portfolio-info">
                                <div class="field-image">
                                    <ul class="photobox">
                                        <li><a href="<?php echo base_url('assets/uploads/gallery/'.$galleryAll['file_foto']); ?>" title="Fusce sagittis fringilla"><img width="555" alt="" src="<?php echo base_url('assets/uploads/gallery/'.$galleryAll['file_foto']); ?>"/></a></li>
                                    </ul>
                                </div>
                                <div class="desc text-center">
                                    <h4><?php echo $galleryAll['judul_foto']; ?></h4>
                                    <p><?php echo date('M d, Y', strtotime($galleryAll['tanggal_foto'])); ?></p>
                                    <a class="btn-more" href="javascript:void(0);" title="Search"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                         ?>
                    </div>
                </div>
                <div class="tab-pane" id="galleryKegiatan">
                    <div class="row animation" data-animate-effect="fadeIn">
                        <?php 
                            foreach ($gallery as $galleryKegiatan) {
                                if ($galleryKegiatan['pelayanan_foto'] == 'kegiatan') {                            
                         ?>
                        <div class="col-sm-3">
                            <div class="portfolio-info">
                                <div class="field-image">
                                    <ul class="photobox">
                                        <li><a href="<?php echo base_url('assets/uploads/gallery/'.$galleryKegiatan['file_foto']); ?>" title="Fusce sagittis fringilla"><img width="555" alt="" src="<?php echo base_url('assets/uploads/gallery/'.$galleryKegiatan['file_foto']); ?>"/></a></li>
                                    </ul>
                                </div>
                                <div class="desc text-center">
                                    <h4><?php echo $galleryKegiatan['judul_foto']; ?></h4>
                                    <p><?php echo $galleryKegiatan['deskripsi_foto']; ?></p>
                                    <a class="btn-more" href="javascript:void(0);" title="Search"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php
                                }
                            }
                         ?>
                    </div>
                </div>
                <div class="tab-pane" id="galleyLain">
                    <div class="row animation" data-animate-effect="fadeIn">
                        <?php 
                            foreach ($gallery as $galleyLain) {
                                if ($galleyLain['pelayanan_foto'] == 'lain-lain') {                            
                         ?>
                        <div class="col-sm-3">
                            <div class="portfolio-info">
                                <div class="field-image">
                                    <ul class="photobox">
                                        <li><a href="<?php echo base_url('assets/uploads/gallery/'.$galleyLain['file_foto']); ?>" title="Fusce sagittis fringilla"><img width="555" alt="" src="<?php echo base_url('assets/uploads/gallery/'.$galleyLain['file_foto']); ?>"/></a></li>
                                    </ul>
                                </div>
                                <div class="desc text-center">
                                    <h4><?php echo $galleyLain['judul_foto']; ?></h4>
                                    <p><?php echo $galleyLain['deskripsi_foto']; ?></p>
                                    <a class="btn-more" href="javascript:void(0);" title="Search"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php
                                }
                            }
                         ?>
                    </div>
                </div>
            </div>
        </article>
        <!-- menu bagian kiri -->
        <aside class="sidebar col-md-3">
            <div class="block"> 
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li class="active"><a href="#kegiatan" role="tab" data-toggle="tab"> Kegiatan</a></li>
                  <li><a href="#lain" role="tab" data-toggle="tab"> Lain - lain</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="kegiatan">
                        <div class="media">
                            <div class="col-sm-12">
                                <div class="panel" data-toggle="collapse" href="#collapse" >
                                    <p> 2016 <i class="fa fa-plus"></i></p>
                                </div>
                                <div id="collapse" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <?php 
                                            $no = 1;
                                            foreach ($bulan as $key => $value) {
                                                echo '<a href="#">'.$value.'</a>';
                                                $no ++;
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="col-sm-12">
                                <div class="panel" data-toggle="collapse" href="#collapse-1" >
                                    <p> 2017 <i class="fa fa-plus"></i></p>
                                </div>
                                <div id="collapse-1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <?php 
                                            $no = 1;
                                            foreach ($bulan as $key => $value) {
                                                echo '<a href="#">'.$value.'</a>';
                                                $no ++;
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="lain">
                        <div class="media">
                            <div class="col-sm-12">
                                <div class="panel" data-toggle="collapse" href="#collapse-2" >
                                    <p> 2016 <i class="fa fa-plus"></i></p>
                                </div>
                                <div id="collapse-2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <?php 
                                            $no = 1;
                                            foreach ($bulan as $key => $value) {
                                                echo '<a href="#">'.$value.'</a>';
                                                $no ++;
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="col-sm-12">
                                <div class="panel" data-toggle="collapse" href="#collapse-3" >
                                    <p> 2017 <i class="fa fa-plus"></i></p>
                                </div>
                                <div id="collapse-3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <?php 
                                            $no = 1;
                                            foreach ($bulan as $key => $value) {
                                                echo '<a href="#">'.$value.'</a>';
                                                $no ++;
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Tab panes -->
            </div>
        </aside>
        <!-- end menu bagian kiri -->
    </div>
        
  </section>