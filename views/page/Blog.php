  <section class="page-title">
    <div class="container">
      <h1 class="text-center">Artikel</h1>
    </div>
  </section>
  <section id="main-content" class="main-content">
    <div class="container">
        <div class="row">
          <article class="col-md-9">
            <div class="blogs-content blog-thumbnail">
            <?php
                foreach ($artikel as $selectAll) {
             ?>
                <div class="blogs-item clearfix animation" data-animate-effect="fadeInUp">
                  <h2><a href="blogs-detail.html" title="Ut varius, urna vel"><?php echo $selectAll['judul_artikel']; ?></a></h2>
                  <div class="media-body">
                    <div class="post-date">
                      <span class="datetime"><i class="fa fa-clock-o"></i><?php echo date('M d, Y', strtotime($selectAll['tanggal_artikel'])); ?></span>
                    </div>
                    <p><?php echo $selectAll['ringkasan_artikel']; ?></p>
                    <div>
                      <a href="blogs-detail.html" title="Read more..."  class="btn btn-theme" >Read more...</a> </div>
                    </div>
                </div>
                    <?php 
                }
            ?>
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
    </div>
  </section>