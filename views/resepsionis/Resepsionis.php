	<section class="page-title">
	    <div class="container">
	      <h1 class="text-center">Kuisioner</h1>
	    </div>
	</section>

	<!-- kuisioner tempalate -->
	<section id="section-contact" class="section-contact">
	    <div class="container" style="font-size: 20px;">
	    	<div class="row">
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
	                </div>
	                <!-- End Layanan Kamar Mandi -->
	                <input type="submit" class="btn  btn-theme-2" title="Submit" value="Simpan">
	                <input type="button" class="btn btn-theme-2" onclick="history.go(0)" value="Batal">
	            </div>
	        </form>
	        </div>
	    </div>
	</section>
	<!-- end kuisioner tempalate -->