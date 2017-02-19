 <!-- begin:header -->
    <div class="header header-small" data-parallax="scroll" data-image-src="assets/img/img-header-home.jpg">
      <!-- begin:topbar -->
      <div id="topbar" class="topbar" style="background: #27ae60;">
        <div class="container">
          <div class="row">
            <div class="col-sm-8">
              <div class="nav-utility">
                <span class="nav-item">Jl. Medika, Sekip Utara, YK</span>
                <span class="nav-item">+62 274 552577</span>
                <span class="nav-item">lab-biopaleo.fk@ugm.ac.id</span>
              </div><!-- .nav-utility -->
            </div><!-- .col-sm-8 -->
            <div class="col-sm-4 hidden-xs">
              <div class="nav-utility nav-right">
                <a class="nav-item btn btn-default" href="?page=login"><i class="fa fa-lock"></i> Masuk</a>
              </div><!-- .nav-utility -->
            </div><!-- .col-sm-4 -->
          </div><!-- .row -->
        </div><!-- .container -->
      </div><!-- .topbar -->
      <!-- end:topbar -->

      <!-- begin:site-navigation -->
      <div class="site-header-affix-wrapper">
        <header id="masthead" class="site-header" role="banner">
          <div class="container">
            <div class="row">
              <div class="col-sm-3">
                <div class="site-branding">
                  <h1 class="site-title"><a href="index.php" rel="home">Antro.</a></h1>
                </div><!-- .site-branding -->
              </div><!-- .col-sm-3 -->

              <div class="col-sm-9">
                <nav id="site-navigation" class="main-navigation" role="navigation">
                  <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span class="pe-7s-menu"></span><span class="sr-only">Primary Menu</span></button>

                  <div class="menu-testing-menu-container">
                    <ul id="primary-menu" class="menu nav-menu" aria-expanded="false">
                      <li class="menu-item current-menu-item"><a href="index.php">Beranda</a></li>
                      <li class="menu-item"><a href="?page=about">Tentang</a></li>
                      <li class="menu-item"><a href="?page=contact">Kontak</a></li>
                    </ul>
                  </div>
                </nav><!-- #site-navigation -->
              </div><!-- .col-sm-9 -->
            </div><!-- .row -->
          </div><!-- .container -->
        </header><!-- #masthead -->
      </div><!-- .site-header-affix-wrapper -->
      <!-- end:site-navigation -->
      <!-- start oke -->
      <?php
      if(strlen($_GET['page'])==0){
      ?>
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div class="header-caption marg-40-top text-center">
              <span class="caption-subtitle">Antropologi Learning.</span>
              <h2 class="caption-title">Kursus antropologi forensik dimanapun kamu berada sekarang juga!</h2>
              <div class="header-action-button">
                <a class="btn btn-danger btn-md" href="?page=daftar">Daftar Sekarang</a>
              </div><!-- header-action-button -->
            </div><!-- .header-caption -->
          </div><!-- .col-## -->
        </div><!-- .row -->
      </div><!-- .container -->
      <?php
    }else{

    }
      ?>

      <!-- end ok -->
    </div><!-- #header -->
    <!-- end:header -->