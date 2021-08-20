
<?php
//if (!isset($_SESSION["USUARIO"])) {
//  header("Location: index.php");
//  exit();
//}
require_once 'data/conexion.php';
require_once 'api/adm_index.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>COLLECTO</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <link rel="stylesheet" href="lib/alertify/css/alertify.min.css">
  <!--<link rel="stylesheet" href="../../lib/alertify/css/alertify.rtl.min.css">-->
  <link rel="stylesheet" href="lib/alertify/css/themes/default.min.css">
  <!--<link rel="stylesheet" href="../../lib/alertify/css/themes/default.rtl.min.css">-->
  <link rel="stylesheet" href="lib/alertify/css/themes/semantic.min.css">
  <!--<link rel="stylesheet" href="../../lib/alertify/css/themes/semantic.rtl.min.css">-->

  <link rel="stylesheet" type="text/css" href="lib/jquery_upload/css/uploadfile-v3.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>
<?php require_once 'api/adm_indexAJAX.php'; ?>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><img src="assets/img/logo.jpg" alt="" class="img-fluid">  COLLECTO</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#hero">Inicio</a></li>
          <li><a href="#about">Acerca de</a></li>
          <li><a href="#services">Servicios</a></li>
          <li><a href="#portfolio">Portafolio</a></li>
          <li><a href="#pricing">Trabajo</a></li>
          <li><a href="#team">Equipo</a></li>
          <li><a href="#contact">Contacto</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= IMPORT PHP ======= -->
  <?php include 'data/conexion.php'; ?>
  <?php include 'api/adm_index.php'; ?>
  <!-- ======= END IMPORT PHP ======= -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <?php
      if (is_array($arrHome) && (count($arrHome) > 0)) {
        reset($arrHome);
        foreach ($arrHome as $rTMP['key'] => $rTMP['value']) { ?>
          <div class="carousel-item <?php echo  $rTMP["value"]['coment']; ?>">
            <div class="carousel-container">
              <h2 class="animate__animated animate__fadeInDown"><?php echo  $rTMP["value"]['title']; ?></h2>
              <p class="animate__animated fanimate__adeInUp"><?php echo  $rTMP["value"]['content']; ?></p>
            </div>
          </div>
      <?PHP
        }
      }

      ?>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(43,97,102, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(18,48,63, .1)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="rgba(255,255,255, .1)">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2></h2>
          <p>Acerca de</p>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-12">
            <p>
              <?php echo  $inf_general; ?>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <div class="container">

      <ul class="nav nav-tabs row d-flex">
        <li class="nav-item col-3" data-aos="zoom-in">
          <a class="nav-link active show" data-toggle="tab" href="#tab-1">
            <?php echo  $ico_mision; ?>
            <h4 class="d-none d-lg-block"><?php echo  $title_mision; ?></h4>
          </a>
        </li>
        <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100">
          <a class="nav-link" data-toggle="tab" href="#tab-2">
            <?php echo  $ico_plan; ?>
            <h4 class="d-none d-lg-block"><?php echo  $title_plan; ?></h4>
          </a>
        </li>
        <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="200">
          <a class="nav-link" data-toggle="tab" href="#tab-3">
            <?php echo  $ico_vision; ?>
            <h4 class="d-none d-lg-block"><?php echo  $title_vision; ?></h4>
          </a>
        </li>
      </ul>

      <div class="tab-content" data-aos="fade-up">
        <div class="tab-pane active show" id="tab-1">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
              <p class="font-italic">
                <?php echo  $content_mision; ?>
              </p>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="assets/img/<?php echo  $img_mision; ?>" alt="" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="tab-pane" id="tab-2">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
              <p>
                <?php echo  $content_plan; ?>
              </p>

            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="assets/img/<?php echo  $img_plan; ?>" alt="" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="tab-pane" id="tab-3">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
              <p>
                <?php echo  $content_vision; ?>
              </p>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="assets/img/<?php echo  $img_vision; ?>" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row" data-aos="zoom-out">
          <div class="col-lg-9 text-center text-lg-left">
            <h3><?php echo  $title; ?></h3>
            <p> <?php echo  $content; ?></p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="<?php echo  $url; ?>"><?php echo  $boton; ?></a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2></h2>
          <p>Servicios</p>
        </div>

        <div class="row">
          <?php
          if (is_array($arrService) && (count($arrService) > 0)) {
            reset($arrService);
            foreach ($arrService as $rTMP['key'] => $rTMP['value']) {
          ?>
              <div class="col-lg-4 col-md-6">
                <div class="icon-box" data-aos="zoom-in-left">
                  <div class="icon"><?php echo  $rTMP["value"]['ico']; ?></div>
                  <h4 class="title"><a href=""><?php echo  $rTMP["value"]['titulo']; ?></a></h4>
                  <p class="description"><?php echo  $rTMP["value"]['content']; ?></p>
                </div>
              </div>
          <?php
            }
          }
          ?>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2></h2>
          <p>Portafolio</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-end" data-aos="fade-up">
          <?php
          if (is_array($arrMenuPorfolio) && (count($arrMenuPorfolio) > 0)) {
            reset($arrMenuPorfolio);
            foreach ($arrMenuPorfolio as $rTMP['key'] => $rTMP['value']) {

              if ($rTMP["value"]['abreviatura'] == '*') {
          ?>
                <li data-filter="<?php echo  $rTMP["value"]['abreviatura']; ?>" class="<?php echo  $rTMP["value"]['clase']; ?>"><?php echo  $rTMP["value"]['title']; ?></li>
              <?php
              } else {
              ?>
                <li data-filter=".<?php echo  $rTMP["value"]['abreviatura']; ?>" class="<?php echo  $rTMP["value"]['clase']; ?>"><?php echo  $rTMP["value"]['title']; ?></li>
          <?php
              }
            }
          }
          ?>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up">

          <?php
          if (is_array($arrPorfolio) && (count($arrPorfolio) > 0)) {
            reset($arrPorfolio);
            foreach ($arrPorfolio as $rTMP['key'] => $rTMP['value']) {
          ?>
              <div class="col-lg-4 col-md-6 portfolio-item <?php echo  $rTMP["value"]['abreviatura']; ?>">
                <div class="portfolio-img"><img src="<?php echo  $rTMP["value"]['img']; ?>" class="img-fluid" alt=""></div>
                <div class="portfolio-info">
                  <h4 href="<?php echo  $rTMP["value"]['url']; ?>"><?php echo  $rTMP["value"]['tittle']; ?></h4>
                  <p><?php echo  $rTMP["value"]['content']; ?></p>
                  <a href="<?php echo  $rTMP["value"]['img']; ?>" data-gall="portfolioGallery" class="venobox preview-link" title="<?php echo  $rTMP["value"]['tittle']; ?>"><i class="bx bx-plus"></i></a>
                  <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
          <?php
            }
          }
          ?>
        </div>

      </div>
    </section><!-- End Portfolio Section -->


    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
        <h2></h2>
          <p>Trabajo</p>
        </div>

        <div class="row">


          <div class="col-lg-6 col-md-6 mt-4 mt-md-0">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="100">
              <h4>TRABAJOS</h4>
              <ul>
                <?php
                if (is_array($arrMenuWork) && (count($arrMenuWork) > 0)) {
                  reset($arrMenuWork);
                  foreach ($arrMenuWork as $rTMP['key'] => $rTMP['value']) {
                ?>
                    <li><?php echo  $rTMP["value"]['parametro']; ?></li>
                <?php
                  }
                }
                ?>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">ENTER WORK</a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 mt-4 mt-md-0">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="100">
              <h4>CURRICULUM VIATE</h4>
              <ul>
                <?php
                if (is_array($arrMenuCv) && (count($arrMenuCv) > 0)) {
                  reset($arrMenuCv);
                  foreach ($arrMenuCv as $rTMP['key'] => $rTMP['value']) {
                ?>
                    <li><?php echo  $rTMP["value"]['parametro']; ?></li>
                <?php
                  }
                }
                ?>
              </ul>
              <div class="btn-wrap">
                <a href="cv.php" class="btn-buy">ENTER CV</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2></h2>
          <p>Preguntas Frecuentes</p>
        </div>

        <ul class="faq-list">
        <?php
          if (is_array($arrQuest) && (count($arrQuest) > 0)) {
            reset($arrQuest);
            foreach ($arrQuest as $rTMP['key'] => $rTMP['value']) {
          ?>
              <li data-aos="fade-up" data-aos-delay="<?php echo  $rTMP["value"]['id']; ?>00">
                <a data-toggle="collapse" class="" href="#faq<?php echo  $rTMP["value"]['id']; ?>"><?php echo  $rTMP["value"]['question']; ?> <i class="icofont-simple-up"></i></a>
                <div id="faq<?php echo  $rTMP["value"]['id']; ?>" class="collapse" data-parent=".faq-list">
                  <p>
                    <?php echo  $rTMP["value"]['answer']; ?> </p>
                </div>
              </li>
          <?php
            }
          }
          ?>
        </ul>

      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2></h2>
          <p>EQUIPO</p>
        </div>

        <div class="row">
          <?php
          if (is_array($arrTeam) && (count($arrTeam) > 0)) {
            reset($arrTeam);
            foreach ($arrTeam as $rTMP['key'] => $rTMP['value']) {
          ?>
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up">
                  <div class="member-img">
                    <img src="<?php echo  $rTMP["value"]['img']; ?>" class="img-fluid" alt="">
                    <div class="social">
                      <?php if ($rTMP["value"]['twitter']) { ?>

                        <a href="<?php echo  $rTMP["value"]['twitter']; ?>"><i class="icofont-twitter"></i></a>
                      <?php } ?>

                      <?php if ($rTMP["value"]['facebook']) { ?>
                        <a href="<?php echo  $rTMP["value"]['facebook']; ?>"><i class="icofont-facebook"></i></a>
                      <?php } ?>

                      <?php if ($rTMP["value"]['google']) { ?>
                        <a href="<?php echo  $rTMP["value"]['google']; ?>"><i class="icofont-instagram"></i></a>
                      <?php } ?>

                      <?php if ($rTMP["value"]['link']) { ?>
                        <a href="<?php echo  $rTMP["value"]['link']; ?>"><i class="icofont-linkedin"></i></a>
                      <?php } ?>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4><?php echo  $rTMP["value"]['title']; ?></h4>
                    <span><?php echo  $rTMP["value"]['descrip']; ?></span>
                  </div>
                </div>
              </div>
          <?php
            }
          }
          ?>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2></h2>
          <p>CONTACTO</p><br>
          <h2><?php echo  $descrip; ?></h2><br>

          <div class="map-responsive">
            <?php echo  $ubi; ?>
          </div>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>DIRECCION:</h4>
                <p><?php echo  $dress; ?></p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>CORREO:</h4>
                <p><?php echo  $mail; ?></p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>TELEFONO:</h4>
                <p><?php echo  $telefono; ?></p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

            <form action="phpmailer/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" id="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>COLLECTO</h3>
      <p>SLOGAN.</p>

      <div class="copyright">
        &copy; Copyright <strong><span>SPI</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="">Servicios Profesionales De Informatica</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

  <style>
    .map-responsive {
      overflow: hidden !important;
      padding-bottom: 56.25% !important;
      position: relative !important;
      height: 0 !important;
    }

    .map-responsive iframe {
      left: 0 !important;
      top: 0 !important;
      height: 100% !important;
      width: 100% !important;
      position: absolute !important;
    }
  </style>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

 
  <!-- Font Osome -->
  <script src="https://kit.fontawesome.com/ed422f1332.js" crossorigin="anonymous"></script>

  <!-- ALERTS MODAL JS -->
  <script src="lib/alertify/alertify.js"></script>
  <script src="lib/alertify/alertify.min.js"></script>
  <!-- SEC  JS -->
  <!-- UPLOAD -->
  <script type="text/javascript" src="lib/jquery_upload/js/jquery.form.js"></script>
  <script type="text/javascript" src="lib/jquery_upload/js/jquery.uploadfile.js"></script>

</body>

</html>