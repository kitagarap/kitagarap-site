<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>KITA GARAP - Percayakan pada kami</title>

  <!-- Website Icon -->
  <link rel="icon" href="<?php echo base_url(); ?>assets/img/icons/logo.png">

  <!-- Bootstrap Core CSS -->
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">

  <!-- Fonts -->
  <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet" />
  <!-- Squad theme CSS -->
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/color/default.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
  <!-- Preloader -->
  <div id="preloader">
    <div id="load"></div>
  </div>

  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
        <a class="navbar-brand" href="<?php echo base_url(); ?>">
          <h1>KITA GARAP</h1>
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#intro">Beranda</a></li>
          <li><a href="#about">Tentang Kami</a></li>
          <li><a href="#service">Layanan</a></li>
          <li><a href="#team">Tim</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#contact">Kontak</a></li>
          <!-- <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Example menu</a></li>
              <li><a href="#">Example menu</a></li>
              <li><a href="#">Example menu</a></li>
            </ul>
          </li> -->
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>

  <!-- Section: intro -->
  <section id="intro"  class="intro">

    <div class="slogan">
      <h2>SELAMAT DATANG DI <span class="text_color">KITA GARAP</span> </h2>
      <h4>Layanan pembangunan aplikasi berbasis desktop, web dan mobile</h4>
    </div>
    <div class="page-scroll">
      <a href="#service" class="btn btn-circle">
				<i class="fa fa-angle-double-down animated"></i>
			</a>
    </div>
  </section>
  <!-- /Section: intro -->

  <!-- Section: about -->
  <section id="about" class="home-section text-center">
    <div class="heading-about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow bounceInDown" data-wow-delay="0.4s">
              <div class="section-heading">
                <h2>Tentang Kami</h2>
                <i class="fa fa-2x fa-angle-down"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">

      <div class="row">
        <div class="col-lg-2 col-lg-offset-5">
          <hr class="marginbot-50">
        </div>
      </div>
      <div class="row centered">
        <div class="col-md-12">
          <div class="wow fadeInLeft" data-wow-delay="0.4s">
            <div class="service-desc text-center">
              <p>Kitagarap merupakan agensi profesional yang bergerak dibidang jasa pembangunan aplikasi berbasis desktop, website dan mobile. Kitagarap menyediakan pembangunan beragam jenis sistem mulai dari company profile, administratif dan mobile online booked/reservation. Aplikasi internal seperti administratif sangat diperlukan untuk automasi operasional administrasi bisnis Anda sehingga mengurangi paper based. Sedangkan website merupakan hal penting bagi Anda yang ingin mengembangkan pasar bisnis dengan cara yang efektif.</p>

              <p>Kami berfokus pada konsep efektif, efisien dan prosedural untuk aplikasi Anda, sehingga aplikasi Anda dapat berjalan dengan baik sangat membantu proses bisnis Anda dan mudah dalam maintenance. Selain itu, jika Anda masih kebingungan mengenai konsep aplikasi yang ingin Anda bangun, kami juga dapat menjadi konsultan untuk memudahkan Anda dalam merumuskan konsep aplikasi.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /Section: about -->


  <!-- Section: services -->
  <section id="service" class="home-section text-center bg-gray">

    <div class="heading-about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow bounceInDown" data-wow-delay="0.4s">
              <div class="section-heading">
                <h2>Our Services</h2>
                <i class="fa fa-2x fa-angle-down"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-lg-offset-5">
          <hr class="marginbot-50">
        </div>
      </div>

      <div class="row">
        <?php 
          $delay = 2;
          foreach($service as $row){ 
        ?>

        <div class="col-md-3">
          <div class="wow bounceInUp" data-wow-delay="0.<?php echo $delay++;?>s">
            <div class="service-box">
              <div class="service-icon">
                <img src="<?php echo base_url(); ?>assets/img/icons/<?php echo $row->icons;?>" alt="" />
              </div>
              <div class="service-desc">
                <h5><?php echo $row->name;?></h5>
                <p><?php echo $row->description;?></p>
              </div>
            </div>
          </div>
        </div>

        <?php } ?>
        
    </div>
  </section>
  <!-- /Section: services -->

  <!-- Section: squad -->
  <section id="team" class="home-section text-center">
    <div class="heading-about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow bounceInDown" data-wow-delay="0.4s">
              <div class="section-heading">
                <h2>Team</h2>
                <i class="fa fa-2x fa-angle-down"></i>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">

      <div class="row">
        <div class="col-lg-2 col-lg-offset-5">
          <hr class="marginbot-50">
        </div>
      </div>
      <div class="row centered">
        <?php 
          $delay = 2;
          foreach ($team as $row) {
        ?>
        <div class="col-md-3 col-sm-6">
          <div class="wow bounceInUp" data-wow-delay="0.<?php echo $delay++;?>s">
            <div class="team boxed-grey text-center">
              <div class="inner">
                <h5><?php echo $row->name;?></h5>
                <p class="subtitle"><?php echo $row->jobdesc;?></p>
                <div class="avatar">
                  <img src="<?php echo base_url(); ?>assets/img/team/<?php echo $row->avatar;?>" alt="" class="img-responsive img-circle" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
        
      </div>
    </div>
  </section>
  <!-- /Section: squad -->


  <!-- Section: portfolio -->
  <section id="portfolio" class="home-section text-center bg-gray">
    <div class="heading-about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow bounceInDown" data-wow-delay="0.4s">
              <div class="section-heading">
                <h2>Last Portfolio</h2>
                <i class="fa fa-2x fa-angle-down"></i>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">

      <div class="row">
        <div class="col-lg-2 col-lg-offset-5">
          <hr class="marginbot-50">
        </div>
      </div>
      <div class="row centered marginbot-50">
        <?php 
          $delay = 2;
          foreach ($portfolio as $row) {
        ?>
        <div class="col-md-3 col-sm-6">
          <div class="wow bounceInUp" data-wow-delay="0.<?php echo $delay++;?>s">
            <div class="team boxed-blank text-center">
              <div class="inner">
                <div class="avatar">
                  <img src="<?php echo base_url(); ?>assets/img/portfolio/<?php echo $row->featured_image;?>" alt="" class="img-responsive img-rounded" />
                </div>
                <h5><?php echo $row->name;?></h5>
                <p class="subtitle"><?php echo $row->type;?></p>
                <a href="#portfolio" class="btn btn-info btn-sm" role="button">Lihat</a>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>

      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="wow fadeInLeft" data-wow-delay="0.2s">
            <div class="section-heading">
              <a href="#portfolio" class="btn btn-success btn-lg" role="button">Lihat Lainya</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /Section: portfolio -->

  
  <!-- Section: contact -->
  <section id="contact" class="home-section text-center">
    <div class="heading-contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow bounceInDown" data-wow-delay="0.4s">
              <div class="section-heading">
                <h2>Kontak Kami</h2>
                <i class="fa fa-2x fa-angle-down"></i>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">

      <div class="row">
        <div class="col-lg-2 col-lg-offset-5">
          <hr class="marginbot-50">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <div class="wow fadeInLeft" data-wow-delay="0.2s">
            <div class="boxed-grey">

              <div id="sendmessage">Pesan Anda Telah Masuk Sistem. Terima Kasih!</div>
              <div id="errormessage"></div>
              <form id="contact-form" action="" method="post" role="form" class="contactForm">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name">
                                  Nama</label>
                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                      <div class="validation"></div>
                    </div>
                    <div class="form-group">
                      <label for="email">
                                  Email</label>
                      <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                        <div class="validation"></div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="subject">
                                  Subjek</label>
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name">
                                  Pesan</label>
                      <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
                              Kirim</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          
        </div>

        <div class="col-lg-4">
          <div class="wow fadeInRight" data-wow-delay="0.2s">
             <div class="widget-contact">
              <h5>Work Base</h5>

              <address>
                <strong>Kita Garap</strong><br>
                Jalan Gelatik 1 C/701<br>
                Bekasi Barat, 17135<br>
                <abbr title="Phone">P:</abbr> (+62) 82113539787 / (+62) 87736893446
              </address>

              <address>
                <strong>Email</strong><br>
                <a href="mailto:#">kitagarap@gmail.com</a>
              </address>
              <!-- <address>
                <strong>We're on social networks</strong><br>
                  <ul class="company-social">
                      <li class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                      <li class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                      <li class="social-dribble"><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                      <li class="social-google"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
              </address> -->
            </div>
          </div>
         
        </div>
      </div>

    </div>
  </section>
  <!-- /Section: contact -->

  <?php $this->load->view('public/partials/footer'); ?>
