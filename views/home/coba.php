<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <label> ------------------------ </label>
            </div>
        </div>
    </div>    
</section>

<!-- prifil template -->
<section id="section-about-us" class="section section-about-us bg-about-us">
    <div class="container text-center">
        <h2>Profil</h2>
        <p class="sub-title">Halaman ini mendiskripsikan <u>PUSKESMAS PRIGEN</u></p>
        <div id="about-slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner animation" data-animate-effect="fadeInUp">
                <div class="item active">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="about-info text-center">
                                <div class="field-image"><img alt="" width="262"  src="<?php echo base_url('assets/home/images/demo/about-us/tentang-kami.png'); ?>"/></div>
                                <h4>Tentang Kami</h4>
                                <p class="position"></p>
                                <p>Melihat jauh mengenai sejarah puskesmas prigen.</p>
                                <ul class="social-list">
                                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="about-info text-center">
                                <div class="field-image"><img alt="" width="262"  src="<?php echo base_url('assets/home/images/demo/about-us/visi-misi.jpg'); ?>"/></div>
                                <h4>Visi Dan Misi</h4>
                                <p class="position"></p>
                                <p>Mengetahui visi dan misi di puskesmas kami.</p>
                                <ul class="social-list">
                                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="about-info text-center">
                                <div class="field-image"><img alt="" width="262"  src="<?php echo base_url('assets/home/images/demo/about-us/desain-dan-struktur-organisasi.jpg'); ?>"/></div>
                                <h4>Struktur Organisasi</h4>
                                <p class="position"></p>
                                <p>Berikut ini adalah orang-orang yang telah turut bersama-sama dengan kami.</p>
                                <ul class="social-list">
                                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end profil template -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <label> ------------------------ </label>
            </div>
        </div>
    </div>    
</section>
<!-- blog template -->
<section id="section-portfolio" class="section section-portfolio bg-portfolio">
    <div class="container">
        <h2>Gallery Foto</h2>
        <p class="sub-title" style="color: #000;">Menginformasikan kegitan - kegitan yang pernah di lakukan oleh puskesmas dari mengenai kesehatan dan lain lain.</p>
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
                                <p><?php echo $galleryAll['deskripsi_foto']; ?></p>
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
    </div>
</section>
<!-- end home -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <label>------------------------</label>
            </div>
        </div>
    </div>    
</section>
<!-- artikel template -->
<section id="section-blogs" class="section section-blogs bg-blogs">
    <div class="container">
        <h2 class="text-center">Artikel</h2>
        <p class="sub-title">Informasi Mengenai Kesehatan Dan Non Kesehatan.</p>
        <div id="blogs-slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner text-left animation" data-animate-effect="fadeInUp">   
                <div class="item active">
                    <div class="row">
                    <?php
                        for ($i=0; $i < count($artikel); $i++) {
                     ?>
                        <div class="col-md-6">
                            <div class="block-item clearfix">
                                <a href="#"> 
                                    <h4><?php echo $artikel[$i]['judul_artikel']?></h4>
                                </a><hr style="border: 1px solid #D3CB8D;">
                                <p class="datetime text-right" style="color: #d3cb8d;"><?php echo $artikel[$i]['tanggal_artikel']; ?></p>
                                <p class="content" style="color: #F5CE6A;"><?php echo $artikel[$i]['ringkasan_artikel'] ?></p><hr style="border: 1px solid #D3CB8D;">
                                <a href="blogs-detail.html" title="Read more...">Read more...</a>
                            </div>
                        </div>
                    <?php 
                        }
                     ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end artikel template -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <label> ------------------------ </label>
            </div>
        </div>
    </div>    
</section>
<!-- layanan template -->
<section id="section-services" class="section section-services bg-services" >
    <div class="container">
        <h2>Layanan</h2>
        <p class="sub-title">Di Bawah Ini Adalah Jam Layanan Berkunjung <u>PUSKESMAS PRIGEN</u></p>
        <div class="row">
            <div class="col-sm-4 animation" data-animate-effect="fadeInLeft">
                <div class="services-info text-center"> <i class="fa fa-medkit"></i>
                    <h3>Pengobatan Umum / Konsultasi</h3>
                    <a href="services.html" class="btn btn-theme" role="button" title="Read More">Read More</a>
                </div>
            </div>
            <div class="col-sm-4 animation" data-animate-effect="fadeInUp">
                <div class="services-info text-center"> <i class="fa fa-medkit"></i>
                    <h3>Pengobatan Dan Tindakana Gigi</h3>
                    <a href="services.html" class="btn btn-theme" role="button" title="Read More">Read More</a>
                </div>
            </div>
            <div class="col-sm-4 animation" data-animate-effect="fadeInRight">
                <div class="services-info text-center"> <i class="fa fa-medkit"></i>
                    <h3>Tindakan Medik Dan Terapi Terencana</h3>
                    <a href="services.html" class="btn btn-theme" role="button" title="Read More">Read More</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 animation" data-animate-effect="fadeInLeft">
                <div class="services-info text-center"> <i class="fa fa-medkit"></i>
                    <h3>Penunjang Diagnotik</h3>
                    <a href="services.html" class="btn btn-theme" role="button" title="Read More">Read More</a>
                </div>
            </div>
            <div class="col-sm-4 animation" data-animate-effect="fadeInUp">
                <div class="services-info text-center"> <i class="fa fa-medkit"></i>
                    <h3>Rawat Inap</h3>
                    <a href="services.html" class="btn btn-theme" role="button" title="Read More">Read More</a>
                </div>
            </div>
            <div class="col-sm-4 animation" data-animate-effect="fadeInRight">
                <div class="services-info text-center"> <i class="fa fa-medkit"></i>
                    <h3>Pelayanan Inovasi</h3>
                    <a href="services.html" class="btn btn-theme" role="button" title="Read More">Read More</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 animation" data-animate-effect="fadeInLeft">
                <div class="services-info text-center"> <i class="fa fa-medkit"></i>
                    <h3>Pelayanan Lainnya</h3>
                    <a href="services.html" class="btn btn-theme" role="button" title="Read More">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end layanan template -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <label> ------------------------ </label>
            </div>
        </div>
    </div>    
</section>
<!-- kuisioner tempalate -->
<section id="section-contact" class="section-contact section bg-contact" >
    <div class="container" style="font-size: 20px;">
        <h2 class="text-center">Kuisioner</h2>
        <?php if (isset($error_kuisioner)) echo $error_kuisioner; ?>
        
        <form role="form" class="contact-form" action="<?php echo base_url(); ?>index.php/home/simpanKuisioner" method="post">
            <div class="col-md-12">
                <div class="row">
                    <!-- Layanan Resepsionis -->
                    <div class="form-group">
                        <div class="col-md-8">
                            <p>Layanan Resepsionis</p>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-4 col-sm-6">
                                <label class="radio-inline">
                                    <input type="radio" name="resepsionis"
                                           onclick="document.getElementById('tidak-resepsionis').style.display='none'"
                                           value="puas"> Puas
                                </label>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="radio-inline">
                                    <input type="radio" name="resepsionis"
                                           onclick="document.getElementById('tidak-resepsionis').style.display='block'"
                                           value="tidak puas"> Tidak
                                </label>
                            </div>
                        </div>
                        <!-- Kuisioner tidak puasan resepsionis -->
                        <div class="col-md-12" id="tidak-resepsionis" style="display: none; border: 1px solid white; margin-bottom: 10px;">
                            <div class="col-sm-12">
                                <label>Pendalaman jenis ketidak puasan :</label>
                                <p>Pada hal apa anda tidak puas dengan layanan yang telah diberikan :</p>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-resepsionis[]" value="keramahan" aria-label="...">
                                    </span>
                                    Keramahan
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-resepsionis[]" value="kecepatan tindakan">
                                    </span>
                                    Kecepatan Tindakan
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-resepsionis[]" value="keprofesionalismean">
                                    </span>
                                    Keprofesionalismean
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-resepsionis[]" value="kebersihan">
                                    </span>
                                    Kebersihan
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-resepsionis[]" value="kerapian">
                                    </span>
                                    Kerapian
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-resepsionis[]" value="bau">
                                    </span>
                                    Bau
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" id="yourBox" name="tidak-resepsionis[]" value="lain lain">
                                    </span>
                                    <input type="text" id="yourText" class="form-control" name="lain2" disabled>
                                </div>
                            </div>
                        </div>
                        <!-- End kuisioner tidak puasan resepsionis -->
                    </div>
                    <!-- End Layanan Resepsionis -->
                    <!-- Layanan Loket/Pendaftaran/Kasir -->
                    <div class="form-group">
                        <div class="col-md-8">
                            <p>Layanan Loket/Pendaftaran/Kasir</p>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-4 col-sm-6">
                                <label class="radio-inline">
                                    <input type="radio" name="loket"
                                           onclick="document.getElementById('tidak-Loket').style.display='none'"
                                           value="puas"> Puas
                                </label>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="radio-inline">
                                    <input type="radio" name="loket"
                                           onclick="document.getElementById('tidak-Loket').style.display='block'"
                                           value="tidak puas"> Tidak
                                </label>
                            </div>
                        </div>
                        <!-- Kuisioner tidak puasan Loket/Pendaftaran/Kasir -->
                        <div class="col-md-12" id="tidak-Loket" style="display: none; border: 1px solid white; margin-bottom: 10px;">
                            <div class="col-sm-12">
                                <label>Pendalaman jenis ketidak puasan :</label>
                                <p>Pada hal apa anda tidak puas dengan layanan yang telah diberikan :</p>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-loket[]" value="keramahan" aria-label="...">
                                    </span>
                                    Keramahan
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-loket[]" value="kecepatan tindakan">
                                    </span>
                                    Kecepatan Tindakan
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-loket[]" value="keprofesionalismean">
                                    </span>
                                    Keprofesionalismean
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-loket[]" value="kebersihan">
                                    </span>
                                    Kebersihan
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-loket[]" value="kerapian">
                                    </span>
                                    Kerapian
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-loket[]" value="bau">
                                    </span>
                                    Bau
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" id="yourBox1" name="tidak-loket[]" value="lain lain">
                                    </span>
                                    <input type="text" id="yourText1" class="form-control" name="lain2loket" disabled>
                                </div>
                            </div>
                        </div>
                        <!-- End kuisioner tidak puasan Loket/Pendaftaran/Kasir -->
                    </div>
                    <!-- End Layanan Loket/Pendaftaran/Kasir -->
                    <!-- Layanan Poli Umum -->
                    <div class="form-group">
                        <div class="col-md-8">
                            <p>Layanan Poli Umum</p>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-4 col-sm-6">
                                <label class="radio-inline">
                                    <input type="radio" name="umum"
                                           onclick="document.getElementById('tidak-Umum').style.display='none'"
                                           value="puas"> Puas
                                </label>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="radio-inline">
                                    <input type="radio" name="umum"
                                           onclick="document.getElementById('tidak-Umum').style.display='block'"
                                           value="tidak puas"> Tidak
                                </label>
                            </div>
                        </div>
                        <!-- Kuisioner tidak puasan poli umum -->
                        <div class="col-md-12" id="tidak-Umum" style="display: none; border: 1px solid white; margin-bottom: 10px;">
                            <div class="col-sm-12">
                                <label>Pendalaman jenis ketidak puasan :</label>
                                <p>Pada hal apa anda tidak puas dengan layanan yang telah diberikan :</p>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-umum[]" value="keramahan" aria-label="...">
                                    </span>
                                    Keramahan
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-umum[]" value="kecepatan tindakan">
                                    </span>
                                    Kecepatan Tindakan
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-umum[]" value="keprofesionalismean">
                                    </span>
                                    Keprofesionalismean
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-umum[]" value="kebersihan">
                                    </span>
                                    Kebersihan
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-umum[]" value="kerapian">
                                    </span>
                                    Kerapian
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-umum[]" value="bau">
                                    </span>
                                    Bau
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" id="yourBox2" name="tidak-umum[]" value="lain lain">
                                    </span>
                                    <input type="text" id="yourText2" class="form-control" name="lain2umum" disabled>
                                </div>
                            </div>
                        </div>
                        <!-- End kuisioner tidak puasan poli Umum -->
                    </div>
                    <!-- End Layanan Poli Umum -->
                    <!-- Layanan Poli KIA -->
                    <div class="form-group">
                        <div class="col-md-8">
                            <p>Layanan Poli KIA</p>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-4 col-sm-6">
                                <label class="radio-inline">
                                    <input type="radio" name="kia"
                                           onclick="document.getElementById('tidak-Kia').style.display='none'"
                                           value="puas"> Puas
                                </label>
                            </div>
                            <div class="col-md-4 col-sm-6">
                               <label class="radio-inline">
                                    <input type="radio" name="kia"
                                           onclick="document.getElementById('tidak-Kia').style.display='block'"
                                           value="tidak puas"> Tidak
                               </label>
                            </div>
                        </div>
                        <!-- Kuisioner tidak puasan poli kia -->
                        <div class="col-md-12" id="tidak-Kia" style="display: none; border: 1px solid white; margin-bottom: 10px;">
                            <div class="col-sm-12">
                                <label>Pendalaman jenis ketidak puasan :</label>
                                <p>Pada hal apa anda tidak puas dengan layanan yang telah diberikan :</p>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-kia[]" value="keramahan" aria-label="...">
                                    </span>
                                    Keramahan
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-kia[]" value="kecepatan tindakan">
                                    </span>
                                    Kecepatan Tindakan
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-kia[]" value="keprofesionalismean">
                                    </span>
                                    Keprofesionalismean
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-kia[]" value="kebersihan">
                                    </span>
                                    Kebersihan
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-kia[]" value="kerapian">
                                    </span>
                                    Kerapian
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-kia[]" value="bau">
                                    </span>
                                    Bau
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" id="yourBox3" name="tidak-kia[]" value="lain lain">
                                    </span>
                                    <input type="text" id="yourText3" class="form-control" name="lain2kia" disabled>
                                </div>
                            </div>
                        </div>
                        <!-- End kuisioner tidak puasan poli kia -->
                    </div>
                    <!-- End Layanan Poli KIA -->
                    <!-- Layanan Poli Gigi -->
                    <div class="form-group">
                        <div class="col-md-8">
                            <p>Layanan Poli Gigi</p>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-4 col-sm-6">
                                <label class="radio-inline">
                                    <input type="radio" name="gigi"
                                           onclick="document.getElementById('tidak-Gigi').style.display='none'"
                                           value="puas"> Puas
                                </label>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="radio-inline">
                                    <input type="radio" name="gigi"
                                           onclick="document.getElementById('tidak-Gigi').style.display='block'"
                                           value="tidak puas"> Tidak
                                </label>
                            </div>
                        </div>
                        <!-- Kuisioner tidak puasan poli gigi -->
                        <div class="col-md-12" id="tidak-Gigi" style="display: none; border: 1px solid white; margin-bottom: 10px;">
                            <div class="col-sm-12">
                                <label>Pendalaman jenis ketidak puasan :</label>
                                <p>Pada hal apa anda tidak puas dengan layanan yang telah diberikan :</p>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-gigi[]" value="keramahan" aria-label="...">
                                    </span>
                                    Keramahan
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-gigi[]" value="kecepatan tindakan">
                                    </span>
                                    Kecepatan Tindakan
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-gigi[]" value="keprofesionalismean">
                                    </span>
                                    Keprofesionalismean
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-gigi[]" value="kebersihan">
                                    </span>
                                    Kebersihan
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-gigi[]" value="kerapian">
                                    </span>
                                    Kerapian
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-gigi[]" value="bau">
                                    </span>
                                    Bau
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" id="yourBox4" name="tidak-gigi[]" value="lain lain">
                                    </span>
                                    <input type="text" id="yourText4" class="form-control" name="lain2gigi" disabled>
                                </div>
                            </div>
                        </div>
                        <!-- End kuisioner tidak puasan poli gigi -->
                    </div>
                    <!-- End Layanan Poli Gigi -->
                    <!-- Layanan Poli Konsultasi GIZI/KRR/Sanitasi -->
                    <div class="form-group">
                        <div class="col-md-8">
                            <p>Layanan Poli Konsultasi GIZI/KRR/Sanitasi</p>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-4 col-sm-6">
                                <label class="radio-inline">
                                    <input type="radio" name="konsultasi"
                                           onclick="document.getElementById('tidak-Konsultasi').style.display='none'"
                                           value="puas"> Puas
                                </label>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="radio-inline">
                                    <input type="radio" name="konsultasi"
                                           onclick="document.getElementById('tidak-Konsultasi').style.display='block'"
                                           value="tidak puas"> Tidak
                                </label>
                            </div>
                        </div>
                        <!-- Kuisioner tidak puasan poli Konsultasi GIZI/KRR/Sanitasi -->
                        <div class="col-md-12" id="tidak-Konsultasi" style="display: none; border: 1px solid white; margin-bottom: 10px;">
                            <div class="col-sm-12">
                                <label>Pendalaman jenis ketidak puasan :</label>
                                <p>Pada hal apa anda tidak puas dengan layanan yang telah diberikan :</p>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-konsultasi[]" value="keramahan" aria-label="...">
                                    </span>
                                    Keramahan
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-konsultasi[]" value="kecepatan tindakan">
                                    </span>
                                    Kecepatan Tindakan
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-konsultasi[]" value="keprofesionalismean">
                                    </span>
                                    Keprofesionalismean
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-konsultasi[]" value="kebersihan">
                                    </span>
                                    Kebersihan
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-konsultasi[]" value="kerapian">
                                    </span>
                                    Kerapian
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-konsultasi[]" value="bau">
                                    </span>
                                    Bau
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" id="yourBox5" name="tidak-konsultasi[]" value="lain lain">
                                    </span>
                                    <input type="text" id="yourText5" class="form-control" name="lain2konsultasi" disabled>
                                </div>
                            </div>
                        </div>
                        <!-- End kuisioner tidak puasan poli Konsultasi GIZI/KRR/Sanitasi -->
                    </div>
                    <!-- End Layanan Poli Konsultasi GIZI/KRR/Sanitasi -->
                    <!-- Layanan Laboratorium -->
                    <div class="form-group">
                        <div class="col-md-8">
                            <p>Layanan Laboratorium</p>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-4 col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="laboratorium"
                                           onclick="document.getElementById('tidak-Laboratorium').style.display='none'"
                                           value="puas"> Puas
                                </label>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="laboratorium"
                                           onclick="document.getElementById('tidak-Laboratorium').style.display='block'"
                                           value="tidak puas"> Tidak
                                </label>
                            </div>
                        </div>
                        <!-- Kuisioner tidak puasan Laboratorium -->
                        <div class="col-md-12" id="tidak-Laboratorium" style="display: none; border: 1px solid white; margin-bottom: 10px;">
                            <div class="col-sm-12">
                                <label>Pendalaman jenis ketidak puasan :</label>
                                <p>Pada hal apa anda tidak puas dengan layanan yang telah diberikan :</p>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-laboratorium[]" value="keramahan" aria-label="...">
                                    </span>
                                    Keramahan
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-laboratorium[]" value="kecepatan tindakan">
                                    </span>
                                    Kecepatan Tindakan
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-laboratorium[]" value="keprofesionalismean">
                                    </span>
                                    Keprofesionalismean
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-laboratorium[]" value="kebersihan">
                                    </span>
                                    Kebersihan
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-laboratorium[]" value="kerapian">
                                    </span>
                                    Kerapian
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-laboratorium[]" value="bau">
                                    </span>
                                    Bau
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" id="yourBox6" name="tidak-laboratorium[]" value="lain lain">
                                    </span>
                                    <input type="text" id="yourText6" class="form-control" name="lain2laboratorium" disabled>
                                </div>
                            </div>
                        </div>
                        <!-- End kuisioner tidak puasan Laboratorium -->
                    </div>
                    <!-- End Layanan Laboratorium -->
                    <!-- Layanan Kamar Obat -->
                    <div class="form-group">
                        <div class="col-md-8">
                            <p>Layanan Kamar Obat</p>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-4 col-sm-6">
                                <label class="radio-inline">
                                    <input type="radio" name="kamarObat"
                                           onclick="document.getElementById('tidak-kamarObat').style.display='none'"
                                           value="puas"> Puas
                                </label>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="radio-inline">
                                    <input type="radio" name="kamarObat"
                                           onclick="document.getElementById('tidak-kamarObat').style.display='block'"
                                           value="tidak puas"> Tidak
                                </label>
                            </div>
                        </div>
                        <!-- Kuisioner tidak puasan Kamar Obat -->
                        <div class="col-md-12" id="tidak-kamarObat" style="display: none; border: 1px solid white; margin-bottom: 10px;">
                            <div class="col-sm-12">
                                <label>Pendalaman jenis ketidak puasan :</label>
                                <p>Pada hal apa anda tidak puas dengan layanan yang telah diberikan :</p>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-kamarObat[]" value="keramahan" aria-label="...">
                                    </span>
                                    Keramahan
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-kamarObat[]" value="kecepatan tindakan">
                                    </span>
                                    Kecepatan Tindakan
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-kamarObat[]" value="keprofesionalismean">
                                    </span>
                                    Keprofesionalismean
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-kamarObat[]" value="kebersihan">
                                    </span>
                                    Kebersihan
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-kamarObat[]" value="kerapian">
                                    </span>
                                    Kerapian
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-kamarObat[]" value="bau">
                                    </span>
                                    Bau
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" id="yourBox7" name="tidak-kamarObat[]" value="lain lain">
                                    </span>
                                    <input type="text" id="yourText7" class="form-control" name="lain2kamarObat" disabled>
                                </div>
                            </div>
                        </div>
                        <!-- End kuisioner tidak puasan Kamar Obat -->
                    </div>
                    <!-- End Layanan Kamar Obat -->
                    <!-- Layanan UGD -->
                    <div class="form-group">
                        <div class="col-md-8">
                            <p>Layanan UGD</p>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-4 col-sm-6">
                                <label class="radio-inline">
                                    <input type="radio" name="ugd"
                                           onclick="document.getElementById('tidak-Ugd').style.display='none'"
                                           value="puas"> Puas
                                </label>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="radio-inline">
                                    <input type="radio" name="ugd"
                                           onclick="document.getElementById('tidak-Ugd').style.display='block'"
                                           value="tidak puas"> Tidak
                                </label>
                            </div>
                        </div>
                        <!-- Kuisioner tidak puasan UGD -->
                        <div class="col-md-12" id="tidak-Ugd" style="display: none; border: 1px solid white; margin-bottom: 10px;">
                            <div class="col-sm-12">
                                <label>Pendalaman jenis ketidak puasan :</label>
                                <p>Pada hal apa anda tidak puas dengan layanan yang telah diberikan :</p>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-ugd[]" value="keramahan" aria-label="...">
                                    </span>
                                    Keramahan
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-ugd[]" value="kecepatan tindakan">
                                    </span>
                                    Kecepatan Tindakan
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-ugd[]" value="keprofesionalismean">
                                    </span>
                                    Keprofesionalismean
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-ugd[]" value="kebersihan">
                                    </span>
                                    Kebersihan
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-ugd[]" value="kerapian">
                                    </span>
                                    Kerapian
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-ugd[]" value="bau">
                                    </span>
                                    Bau
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" id="yourBox8" name="tidak-ugd[]" value="lain lain">
                                    </span>
                                    <input type="text" id="yourText8" class="form-control" name="lain2ugd" disabled>
                                </div>
                            </div>
                        </div>
                        <!-- End kuisioner tidak puasan ugd -->
                    </div>
                    <!-- End Layanan UGD -->
                    <!-- Layanan Rawat Inap -->
                    <div class="form-group">
                        <div class="col-md-8">
                            <p>Layanan Rawat Inap</p>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-4 col-sm-6">
                                <label class="radio-inline">
                                    <input type="radio" name="rawatInap"
                                           onclick="document.getElementById('tidak-rawatInap').style.display='none'"
                                           value="puas"> Puas
                                </label>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="radio-inline">
                                    <input type="radio" name="rawatInap"
                                           onclick="document.getElementById('tidak-rawatInap').style.display='block'"
                                           value="tidak puas"> Tidak
                                </label>
                            </div>
                        </div>
                        <!-- Kuisioner tidak puasan UGD -->
                        <div class="col-md-12" id="tidak-rawatInap" style="display: none; border: 1px solid white; margin-bottom: 10px;">
                            <div class="col-sm-12">
                                <label>Pendalaman jenis ketidak puasan :</label>
                                <p>Pada hal apa anda tidak puas dengan layanan yang telah diberikan :</p>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-rawatInap[]" value="keramahan" aria-label="...">
                                    </span>
                                    Keramahan
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-rawatInap[]" value="kecepatan tindakan">
                                    </span>
                                    Kecepatan Tindakan
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-rawatInap[]" value="keprofesionalismean">
                                    </span>
                                    Keprofesionalismean
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-rawatInap[]" value="kebersihan">
                                    </span>
                                    Kebersihan
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-rawatInap[]" value="kerapian">
                                    </span>
                                    Kerapian
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-rawatInap[]" value="bau">
                                    </span>
                                    Bau
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" id="yourBox9" name="tidak-rawatInap[]" value="lain lain">
                                    </span>
                                    <input type="text" id="yourText9" class="form-control" name="lain2rawatInap" disabled>
                                </div>
                            </div>
                        </div>
                        <!-- End kuisioner tidak puasan rawat inap -->
                    </div>
                    <!-- End Layanan Rawat Inap -->
                    <!-- Layanan Pakir -->
                    <div class="form-group">
                        <div class="col-md-8">
                            <p>Layanan Pakir</p>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-4 col-sm-6">
                                <label class="radio-inline">
                                    <input type="radio" name="parkir"
                                           onclick="document.getElementById('tidak-parkir').style.display='none'"
                                           value="puas"> Puas
                                </label>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="radio-inline">
                                    <input type="radio" name="parkir"
                                           onclick="document.getElementById('tidak-parkir').style.display='block'"
                                           value="tidak puas"> Tidak
                                </label>
                            </div>
                        </div>
                        <!-- Kuisioner tidak puasan parkir -->
                        <div class="col-md-12" id="tidak-parkir" style="display: none; border: 1px solid white; margin-bottom: 10px;">
                            <div class="col-sm-12">
                                <label>Pendalaman jenis ketidak puasan :</label>
                                <p>Pada hal apa anda tidak puas dengan layanan yang telah diberikan :</p>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-parkir[]" value="keramahan" aria-label="...">
                                    </span>
                                    Keramahan
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-parkir[]" value="kecepatan tindakan">
                                    </span>
                                    Kecepatan Tindakan
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-parkir[]" value="keprofesionalismean">
                                    </span>
                                    Keprofesionalismean
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-parkir[]" value="kebersihan">
                                    </span>
                                    Kebersihan
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-parkir[]" value="kerapian">
                                    </span>
                                    Kerapian
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-parkir[]" value="bau">
                                    </span>
                                    Bau
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" id="yourBox10" name="tidak-parkir[]" value="lain lain">
                                    </span>
                                    <input type="text" id="yourText10" class="form-control" name="lain2parkir" disabled>
                                </div>
                            </div>
                        </div>
                        <!-- End kuisioner tidak puasan parkir -->
                    </div>
                    <!-- End Layanan Pakir -->
                    <!-- Layanan Ruang Tunggu -->
                    <div class="form-group">
                        <div class="col-md-8">
                            <p>Layanan Ruang Tunggu</p>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-4 col-sm-6">
                                <label class="radio-inline">
                                    <input type="radio" name="ruangTunggu"
                                           onclick="document.getElementById('tidak-ruangTunggu').style.display='none'"
                                           value="puas"> Puas
                                </label>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="radio-inline">
                                    <input type="radio" name="ruangTunggu"
                                           onclick="document.getElementById('tidak-ruangTunggu').style.display='block'"
                                           value="tidak puas"> Tidak
                                </label>
                            </div>
                        </div>
                        <!-- Kuisioner tidak Ruang Tunggu -->
                        <div class="col-md-12" id="tidak-ruangTunggu" style="display: none; border: 1px solid white; margin-bottom: 10px;">
                            <div class="col-sm-12">
                                <label>Pendalaman jenis ketidak puasan :</label>
                                <p>Pada hal apa anda tidak puas dengan layanan yang telah diberikan :</p>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-ruangTunggu[]" value="keramahan" aria-label="...">
                                    </span>
                                    Keramahan
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-ruangTunggu[]" value="kecepatan tindakan">
                                    </span>
                                    Kecepatan Tindakan
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-ruangTunggu[]" value="keprofesionalismean">
                                    </span>
                                    Keprofesionalismean
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-RuangTunggu[]" value="kebersihan">
                                    </span>
                                    Kebersihan
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-ruangTunggu[]" value="kerapian">
                                    </span>
                                    Kerapian
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-ruangTunggu[]" value="bau">
                                    </span>
                                    Bau
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" id="yourBox11" name="tidak-ruangTunggu[]" value="lain lain">
                                    </span>
                                    <input type="text" id="yourText11" class="form-control" name="lain2ruangTunggu" disabled>
                                </div>
                            </div>
                        </div>
                        <!-- End kuisioner tidak Ruang Tunggu -->
                    </div>
                    <!-- End Layanan Ruang Tunggu -->
                    <!-- Layanan Kamar Mandi/Kamar Keci -->
                    <div class="form-group">
                        <div class="col-md-8">
                            <p>Layanan Kamar Mandi/Kamar Keci</p>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-4 col-md-6">
                                <label class="radio-inline">
                                    <input type="radio" name="kamarMandi"
                                           onclick="document.getElementById('tidak-kamarMandi').style.display='none'"
                                           value="puas"> Puas
                                </label>
                            </div>
                            <div class="col-md-4 col-md-6">
                                <label class="radio-inline">
                                    <input type="radio" name="kamarMandi"
                                           onclick="document.getElementById('tidak-kamarMandi').style.display='block'"
                                           value="tidak puas"> Tidak
                                </label>
                            </div>
                        </div>
                        <!-- Kuisioner tidak Kamar Mandi/Kamar Keci -->
                        <div class="col-md-12" id="tidak-kamarMandi" style="display: none; border: 1px solid white; margin-bottom: 10px;">
                            <div class="col-sm-12">
                                <label>Pendalaman jenis ketidak puasan :</label>
                                <p>Pada hal apa anda tidak puas dengan layanan yang telah diberikan :</p>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-kamarMandi[]" value="keramahan" aria-label="...">
                                    </span>
                                    Keramahan
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-kamarMandi[]" value="kecepatan tindakan">
                                    </span>
                                    Kecepatan Tindakan
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-kamarMandi[]" value="keprofesionalismean">
                                    </span>
                                    Keprofesionalismean
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-kamarMandi[]" value="kebersihan">
                                    </span>
                                    Kebersihan
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-kamarMandi[]" value="kerapian">
                                    </span>
                                    Kerapian
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" name="tidak-kamarMandi[]" value="bau">
                                    </span>
                                    Bau
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <input type="checkbox" id="yourBox12" name="tidak-kamarMandi[]" value="lain lain">
                                    </span>
                                    <input type="text" id="yourText12" class="form-control" name="lain2kamarMandi" disabled>
                                </div>
                            </div>
                        </div>
                        <!-- End kuisioner tidak Kamar Mandi -->
                    </div>
                </div>
                <!-- End Layanan Kamar Mandi -->
                <input type="submit" class="btn  btn-theme-2" title="Submit" value="Simpan">
                <input type="button" class="btn btn-theme-2" onclick="history.go(0)" value="Batal">
            </div>
        </form>
    </div>
</section>
<!-- end kuisioner tempalate -->