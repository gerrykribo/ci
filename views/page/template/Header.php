<div id="page">
  <div id="change_skin_menu_wrapper" class="change-skin-menu-wrapper wrapper">
    <div class="container"> <a href="" id="change-skin" class="change-skin"> <i class="fa fa-cog"></i> </a>
      <div class="skin-color"> <strong>Skin</strong>
        <ul class="change-skin-menu">
          <li class="default"><a class="change-skin-button color-default skin-selector blue" data-skin="blue" href="#change-skin/default">Blue</a></li>
          <li class="red"><a class="change-skin-button color-red skin-selector red" href="#change-skin/red" data-skin="red">Default Style</a></li>
          <li class="green active"><a class="change-skin-button color-green skin-selector green" href="#change-skin/green" data-skin="green">Green</a></li>
          <li class="orange"><a class="change-skin-button color-orange skin-selector orange" data-skin="orange" href="#change-skin/orange">Orange</a></li>
          <li class="violet"><a class="change-skin-button color-violet skin-selector violet" data-skin="violet" href="#change-skin/violet">Violet</a></li>
        </ul>
      </div>
      <div class="layout"> <strong>Layout Boxed</strong>
        <label class="switch-btn"> <span class="btn btn-default change-layout-button" id="layout-default">No</span> <span class="btn btn-default change-layout-button" id="layout-boxed">Yes</span> </label>
      </div>
      <div class="background"> <strong>Background</strong>
        <ul class="change-background">
          <li class="bg-default"><a class="change-background-button" href="#change-background/bg-default">Default</a></li>
          <li class="bg-1"><a class="change-background-button" href="#change-background/bg-1">Background 1</a></li>
          <li class="bg-2"><a class="change-background-button" href="#change-background/bg-2">Background 2</a></li>
          <li class="bg-3"><a class="change-background-button" href="#change-background/bg-3">Background 3</a></li>
          <li class="bg-4"><a class="change-background-button" href="#change-background/bg-4">Background 4</a></li>
          <li class="bg-5 active"><a class="change-background-button" href="#change-background/bg-5">Background 5</a></li>
          <li class="bg-6"><a class="change-background-button" href="#change-background/bg-6">Background 6</a></li>
          <li class="bg-7"><a class="change-background-button" href="#change-background/bg-7">Background 7</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- header -->
  <header id="header" class="header">
    <div class="container"> <a id="logo" class="pull-left" title="Home" href="<?php echo base_url('index.php/home'); ?>"> <img width="50"  alt="Home" src="<?php echo base_url();?>assets/home/images/logo-puskesmas.png"/> Puskesmas Prigen </a>
      <button type="button" class="navbar-toggle secondary-menu-button navbar-right" data-toggle="collapse" data-target="#nav"> <span class="sr-only">Toggle navigation</span> <i class="fa fa-bars"></i> </button>
      <nav id="nav" class="collapse width navbar-collapse">
        <div class="region region-main-menu">
          <div class="tb-megamenu tb-megamenu-main-menu">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="<?php echo base_url('index.php/home'); ?>"  title="Home">Home</a></li>
              <li><a href="<?php echo base_url('index.php/page/profil'); ?>" title="Profil">Profil</a></li>
              <li><a href="<?php echo base_url('index.php/page/gallery'); ?>" title="Gallery">Gallery</a></li>
              <li><a href="<?php echo base_url('index.php/page/blog'); ?>" title="Artikel">Artikel</a></li>
              <li><a href="#" title="Layanan">Layanan</a></li>
              <li><a href="<?php echo base_url('index.php/page/Tanggapan'); ?>" title="Tanggapan Layanan">Tanggapan Layanan</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!-- end header -->