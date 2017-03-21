<section class="page-title">
  <div class="container">
    <h1 class="text-center">Kuisioner</h1>
  </div>
</section>
<!-- kuisioner tempalate -->
<section id="section-contact" class="section-contact section bg-contact" style="background: #FFF; color: #000;">
    <div class="container">
        <!-- menu kuisioner -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#kepuasan" aria-controls="kepuasan" role="tab" data-toggle="tab">Form Survey Kepuasan Pelanggan</a></li>
            <li role="presentation"><a href="#keramahan" aria-controls="keramahan" role="tab" data-toggle="tab">Form Survey Keramahan Petugas :</a></li>
        </ul>
        <!-- end menu kusioner -->
    
        <!-- Tanggapan  -->
        <div class="tab-content">
        <!-- tab layanan -->
        <div role="tabpanel" class="tab-pane active" id="kepuasan">
            <div class="container" style="font-size: 20px;">
                <p>Mohon pengisian kepuasan anda dalam unit layanan kami yang telah anda ikuti :</p> 
                <?php if (isset($error_kuisioner)) echo $error_kuisioner; ?>
                <form role="form" class="contact-form" action="<?php echo base_url(); ?>index.php/page/tanggapan/simpanKuisioner" method="post">
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
                                    <p>Layanan Loket/Kasir</p>
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
                                <!-- Kuisioner tidak puasan Loket -->
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
                                <!-- End kuisioner tidak puasan Pendaftaran -->
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
                                                <input type="checkbox" id="yourBox3" name="tidak-gigi[]" value="lain lain">
                                            </span>
                                            <input type="text" id="yourText3" class="form-control" name="lain2gigi" disabled>
                                        </div>
                                    </div>
                                </div>
                                <!-- End kuisioner tidak puasan poli gigi -->
                            </div>
                            <!-- End Layanan Poli Gigi -->
                            <!-- Layanan Poli Kespro -->
                            <div class="form-group">
                                <div class="col-md-8">
                                    <p>Layanan Poli Kesehatan Perorang</p>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-4 col-sm-6">
                                        <label class="radio-inline">
                                            <input type="radio" name="kespro"
                                                   onclick="document.getElementById('tidak-Kespro').style.display='none'"
                                                   value="puas"> Puas
                                        </label>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <label class="radio-inline">
                                            <input type="radio" name="kespro"
                                                   onclick="document.getElementById('tidak-Kespro').style.display='block'"
                                                   value="tidak puas"> Tidak
                                        </label>
                                    </div>
                                </div>
                                <!-- Kuisioner tidak puasan poli kespro -->
                                <div class="col-md-12" id="tidak-Kespro" style="display: none; border: 1px solid white; margin-bottom: 10px;">
                                    <div class="col-sm-12">
                                        <label>Pendalaman jenis ketidak puasan :</label>
                                        <p>Pada hal apa anda tidak puas dengan layanan yang telah diberikan :</p>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <input type="checkbox" name="tidak-kespro[]" value="keramahan" aria-label="...">
                                            </span>
                                            Keramahan
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <input type="checkbox" name="tidak-kespro[]" value="kecepatan tindakan">
                                            </span>
                                            Kecepatan Tindakan
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <input type="checkbox" name="tidak-kespro[]" value="keprofesionalismean">
                                            </span>
                                            Keprofesionalismean
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <input type="checkbox" name="tidak-kespro[]" value="kebersihan">
                                            </span>
                                            Kebersihan
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <input type="checkbox" name="tidak-kespro[]" value="kerapian">
                                            </span>
                                            Kerapian
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <input type="checkbox" name="tidak-kespro[]" value="bau">
                                            </span>
                                            Bau
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <input type="checkbox" id="yourBox4" name="tidak-kespro[]" value="lain lain">
                                            </span>
                                            <input type="text" id="yourText4" class="form-control" name="lain2gigi" disabled>
                                        </div>
                                    </div>
                                </div>
                                <!-- End kuisioner tidak puasan poli kespro -->
                            </div>
                            <!-- End Layanan Poli kespro -->
                            <!-- Layanan Ruang KIA -->
                            <div class="form-group">
                                <div class="col-md-8">
                                    <p>Layanan Ruang KIA</p>
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
                                <!-- Kuisioner tidak puasan ruang kia -->
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
                                                <input type="checkbox" id="yourBox5" name="tidak-kia[]" value="lain lain">
                                            </span>
                                            <input type="text" id="yourText5" class="form-control" name="lain2kia" disabled>
                                        </div>
                                    </div>
                                </div>
                                <!-- End kuisioner tidak puasan ruang kia -->
                            </div>
                            <!-- End Layanan Poli KIA -->
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
                            <!-- Layanan Poli Konsultasi GIZI/KRR/Sanitasi -->
                            <div class="form-group">
                                <div class="col-md-8">
                                    <p>Layanan Poli Konsultasi GIZI</p>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-4 col-sm-6">
                                        <label class="radio-inline">
                                            <input type="radio" name="gizi"
                                                   onclick="document.getElementById('tidak-Gizi').style.display='none'"
                                                   value="puas"> Puas
                                        </label>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <label class="radio-inline">
                                            <input type="radio" name="gizi"
                                                   onclick="document.getElementById('tidak-Gizi').style.display='block'"
                                                   value="tidak puas"> Tidak
                                        </label>
                                    </div>
                                </div>
                                <!-- Kuisioner tidak puasan poli Konsultasi GIZI -->
                                <div class="col-md-12" id="tidak-Gizi" style="display: none; border: 1px solid white; margin-bottom: 10px;">
                                    <div class="col-sm-12">
                                        <label>Pendalaman jenis ketidak puasan :</label>
                                        <p>Pada hal apa anda tidak puas dengan layanan yang telah diberikan :</p>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <input type="checkbox" name="tidak-gizi[]" value="keramahan" aria-label="...">
                                            </span>
                                            Keramahan
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <input type="checkbox" name="tidak-gizi[]" value="kecepatan tindakan">
                                            </span>
                                            Kecepatan Tindakan
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <input type="checkbox" name="tidak-gizi[]" value="keprofesionalismean">
                                            </span>
                                            Keprofesionalismean
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <input type="checkbox" name="tidak-gizi[]" value="kebersihan">
                                            </span>
                                            Kebersihan
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <input type="checkbox" name="tidak-gizi[]" value="kerapian">
                                            </span>
                                            Kerapian
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <input type="checkbox" name="tidak-gizi[]" value="bau">
                                            </span>
                                            Bau
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <input type="checkbox" id="yourBox7" name="tidak-gizi[]" value="lain lain">
                                            </span>
                                            <input type="text" id="yourText7" class="form-control" name="lain2gizi" disabled>
                                        </div>
                                    </div>
                                </div>
                                <!-- End kuisioner tidak puasan poli Konsultasi GIZI -->
                            </div>
                            <div class="form-group">
                                <div class="col-md-8">
                                    <p>Layanan Poli Konsultasi Sanitasi</p>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-4 col-sm-6">
                                        <label class="radio-inline">
                                            <input type="radio" name="sanitasi"
                                                   onclick="document.getElementById('tidak-Sanitasi').style.display='none'"
                                                   value="puas"> Puas
                                        </label>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <label class="radio-inline">
                                            <input type="radio" name="sanitasi"
                                                   onclick="document.getElementById('tidak-Sanitasi').style.display='block'"
                                                   value="tidak puas"> Tidak
                                        </label>
                                    </div>
                                </div>
                                <!-- Kuisioner tidak puasan poli Konsultasi Sanitasi -->
                                <div class="col-md-12" id="tidak-Sanitasi" style="display: none; border: 1px solid white; margin-bottom: 10px;">
                                    <div class="col-sm-12">
                                        <label>Pendalaman jenis ketidak puasan :</label>
                                        <p>Pada hal apa anda tidak puas dengan layanan yang telah diberikan :</p>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <input type="checkbox" name="tidak-sanitasi[]" value="keramahan" aria-label="...">
                                            </span>
                                            Keramahan
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <input type="checkbox" name="tidak-sanitasi[]" value="kecepatan tindakan">
                                            </span>
                                            Kecepatan Tindakan
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <input type="checkbox" name="tidak-sanitasi[]" value="keprofesionalismean">
                                            </span>
                                            Keprofesionalismean
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <input type="checkbox" name="tidak-sanitasi[]" value="kebersihan">
                                            </span>
                                            Kebersihan
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <input type="checkbox" name="tidak-sanitasi[]" value="kerapian">
                                            </span>
                                            Kerapian
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <input type="checkbox" name="tidak-sanitasi[]" value="bau">
                                            </span>
                                            Bau
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <input type="checkbox" id="yourBox8" name="tidak-sanitasi[]" value="lain lain">
                                            </span>
                                            <input type="text" id="yourText8" class="form-control" name="lain2sanitasi" disabled>
                                        </div>
                                    </div>
                                </div>
                                <!-- End kuisioner tidak puasan poli Konsultasi Sanitasi -->
                            </div>
                            <div class="form-group">
                                <div class="col-md-8">
                                    <p>Layanan Poli Konsultasi KRR</p>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-4 col-sm-6">
                                        <label class="radio-inline">
                                            <input type="radio" name="krr"
                                                   onclick="document.getElementById('tidak-Krr').style.display='none'"
                                                   value="puas"> Puas
                                        </label>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <label class="radio-inline">
                                            <input type="radio" name="krr"
                                                   onclick="document.getElementById('tidak-Krr').style.display='block'"
                                                   value="tidak puas"> Tidak
                                        </label>
                                    </div>
                                </div>
                                <!-- Kuisioner tidak puasan poli Konsultasi KRR -->
                                <div class="col-md-12" id="tidak-Krr" style="display: none; border: 1px solid white; margin-bottom: 10px;">
                                    <div class="col-sm-12">
                                        <label>Pendalaman jenis ketidak puasan :</label>
                                        <p>Pada hal apa anda tidak puas dengan layanan yang telah diberikan :</p>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <input type="checkbox" name="tidak-krr[]" value="keramahan" aria-label="...">
                                            </span>
                                            Keramahan
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <input type="checkbox" name="tidak-krr[]" value="kecepatan tindakan">
                                            </span>
                                            Kecepatan Tindakan
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <input type="checkbox" name="tidak-krr[]" value="keprofesionalismean">
                                            </span>
                                            Keprofesionalismean
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <input type="checkbox" name="tidak-krr[]" value="kebersihan">
                                            </span>
                                            Kebersihan
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <input type="checkbox" name="tidak-krr[]" value="kerapian">
                                            </span>
                                            Kerapian
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <input type="checkbox" name="tidak-krr[]" value="bau">
                                            </span>
                                            Bau
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <input type="checkbox" id="yourBox9" name="tidak-krr[]" value="lain lain">
                                            </span>
                                            <input type="text" id="yourText9" class="form-control" name="lain2krr" disabled>
                                        </div>
                                    </div>
                                </div>
                                <!-- End kuisioner tidak puasan poli Konsultasi KRR -->
                            </div>
                            <!-- End Layanan Poli Konsultasi GIZI/KRR/Sanitasi -->
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
                                                <input type="checkbox" id="yourBox10" name="tidak-kamarObat[]" value="lain lain">
                                            </span>
                                            <input type="text" id="yourText10" class="form-control" name="lain2kamarObat" disabled>
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
                                                <input type="checkbox" id="yourBox11" name="tidak-ugd[]" value="lain lain">
                                            </span>
                                            <input type="text" id="yourText11" class="form-control" name="lain2ugd" disabled>
                                        </div>
                                    </div>
                                </div>
                                <!-- End kuisioner tidak puasan ugd -->
                            </div>
                            <!-- End Layanan UGD -->
                            <!-- Layanan Kamar Bersalin -->
                            <div class="form-group">
                                <div class="col-md-8">
                                    <p>Layanan Kamar Bersalin</p>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-4 col-sm-6">
                                        <label class="radio-inline">
                                            <input type="radio" name="kaber"
                                                   onclick="document.getElementById('tidak-Kaber').style.display='none'"
                                                   value="puas"> Puas
                                        </label>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <label class="radio-inline">
                                            <input type="radio" name="kaber"
                                                   onclick="document.getElementById('tidak-Kaber').style.display='block'"
                                                   value="tidak puas"> Tidak
                                        </label>
                                    </div>
                                </div>
                                <!-- Kuisioner tidak puasan kamar bersalin -->
                                <div class="col-md-12" id="tidak-Kaber" style="display: none; border: 1px solid white; margin-bottom: 10px;">
                                    <div class="col-sm-12">
                                        <label>Pendalaman jenis ketidak puasan :</label>
                                        <p>Pada hal apa anda tidak puas dengan layanan yang telah diberikan :</p>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <input type="checkbox" name="tidak-kaber[]" value="keramahan" aria-label="...">
                                            </span>
                                            Keramahan
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <input type="checkbox" name="tidak-kaber[]" value="kecepatan tindakan">
                                            </span>
                                            Kecepatan Tindakan
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <input type="checkbox" name="tidak-kaber[]" value="keprofesionalismean">
                                            </span>
                                            Keprofesionalismean
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <input type="checkbox" name="tidak-kaber[]" value="kebersihan">
                                            </span>
                                            Kebersihan
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <input type="checkbox" name="tidak-kaber[]" value="kerapian">
                                            </span>
                                            Kerapian
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <input type="checkbox" name="tidak-kaber[]" value="bau">
                                            </span>
                                            Bau
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <input type="checkbox" id="yourBox12" name="tidak-kaber[]" value="lain lain">
                                            </span>
                                            <input type="text" id="yourText12" class="form-control" name="lain2ugd" disabled>
                                        </div>
                                    </div>
                                </div>
                                <!-- End kuisioner tidak puasan kamar bersalin -->
                            </div>
                            <!-- End Layanan Kamar Bersalin -->
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
                                                <input type="checkbox" id="yourBox13" name="tidak-rawatInap[]" value="lain lain">
                                            </span>
                                            <input type="text" id="yourText13" class="form-control" name="lain2rawatInap" disabled>
                                        </div>
                                    </div>
                                </div>
                                <!-- End kuisioner tidak puasan rawat inap -->
                            </div>
                            <!-- End Layanan Rawat Inap -->
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
                                                <input type="checkbox" id="yourBox14" name="tidak-kamarMandi[]" value="lain lain">
                                            </span>
                                            <input type="text" id="yourText14" class="form-control" name="lain2kamarMandi" disabled>
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
        </div>
        <!-- tab layanan -->
        <!-- yuhu -->
        <div role="tabpanel" class="tab-pane" id="keramahan">
            <div class="container" style="font-size: 20px;">
                <p>Mohon pengisian survey keramahan petugas kami dalam unit layanan yang telah anda ikuti :</p>
                <?php if (isset($error_kuisioner)) echo $error_kuisioner; ?>
                <form role="form" class="contact-form" action="<?php echo base_url(); ?>index.php/page/tanggapan/simpanKeramahan" method="post">
                    <div class="col-md-12">
                        <div class="row">
                    <!-- Layanan Resepsionis -->
                    <?php 

                        for ($i=0; $i < count($namaVariabel); $i++) { 
                            
                            ?>
                            <div class="form-group">
                                <div class="col-md-8">
                                    <p>Pelayanan petugas <?php echo $pelayanan[$i]; ?></p>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-4 col-sm-6">
                                        <label class="radio-inline">
                                            <input type="radio" name="<?php echo $pelayanan[$i]; ?>" value="puas"> Ramah
                                        </label>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <label class="radio-inline">
                                            <input type="radio" name="<?php echo $pelayanan[$i]; ?>" value="tidak puas"> Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }

                     ?>
                    <!-- end layanan resepsionis -->
                        </div>
                        <input type="submit" class="btn  btn-theme-2" title="Simpan" value="Simpan">
                        <input type="button" class="btn btn-theme-2" onclick="history.go(0)" value="Batal">    
                </form>
            </div>
        </div>
        <!-- end yuhu -->
        </div>
    </div>
    <!-- end tanggapan -->
</section>
<!-- end kuisioner tempalate -->