<?php
  $categories = json_decode(file_get_contents('./assets/js/casagrande.json'), true);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Title -->
    <title>MilMil - Casagrande</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../favicon.ico">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C500%2C600%2C700">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="../../assets/vendor/bootstrap/bootstrap.min.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="../../assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="../../assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="../../assets/vendor/animate.css">
    <link rel="stylesheet" href="../../assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="../../assets/vendor/hamburgers/hamburgers.min.css">

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="../../assets/vendor/revolution-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="../../assets/vendor/revolution-slider/revolution/css/settings.css">
    <link rel="stylesheet" href="../../assets/vendor/revolution-slider/revolution/css/layers.css">
    <link rel="stylesheet" href="../../assets/vendor/revolution-slider/revolution/css/navigation.css">

    <!-- CSS Unify -->
    <link rel="stylesheet" href="../../assets/css/unify.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="../../assets/css/custom.css">
    <style type="text/css">
      #js-header {
        background-color: #212121;
      }
      .navbar-brand > img {
        width: 200px;
      }
      .u-btn-outline-primary {
        color: #0d8a9e;
        border-color: #0d8a9e;
      }
      .u-btn-outline-primary:hover,
      .u-btn-outline-primary:focus,
      .u-btn-outline-primary.active {
        color: #fff !important;
        background-color: #0d8a9e !important;
      }
      .g-brd-primary {
        border-color: #0d8a9e !important;
      }
      .g-bg-primary,
      .u-go-to-v1:hover,
      .u-go-to-v1:focus:hover,
      .u-btn-outline-primary:hover {
        background-color: #0d8a9e !important;
      }
      .g-color-primary {
        color: #0d8a9e !important;
      }
      .g-mt-20 {
        margin-top: 1.7rem !important;
      }
      .img-responsive {
        width: 100%;
      }
      .g-pb-50 {
        max-height: 442px;
      }
      .img-float {
        position: relative;
        left: 10%;
        height: 115%;
        bottom: 12%;
      }
      .info-v5-3:hover .info-v5-3__info-price {
        position: relative;
        bottom: 5px;
      }
      ::-webkit-scrollbar {
        width: 6px;
        background-color: #000000;
      }
      ::-webkit-scrollbar-thumb {
        background-color: #0d8a9e;
      }
      ::selection {
        color: #fff;
        background-color: #0d8a9e;
      }
      .navbar {
        padding: 0;
      }
      .hs-sub-menu,
      .hs-mega-menu {
        background-color: #212121;
      }
      .text-decoration-none:hover {
        text-decoration: none;
      }
      @media (max-width: 575px) {
        .nav-item {
          padding-left: 20px;
        }
        .navbar-brand > img {
          margin-left: 20px;
        }
      }
    </style>
  </head>

  <body>
    <main>
      <?php include('include/header.php'); ?>

      <!-- Revolution Slider -->
      <?php include('include/slider.php'); ?>
      <!-- End Revolution Slider -->

      <!-- Team Blocks -->
      <section class="container g-pt-100 g-pb-70">
        <!-- Heading -->
        <div class="row justify-content-center text-center g-mb-50">
          <div class="col-lg-9">
            <h2 class="h3 g-color-black g-font-weight-600 text-uppercase mb-2">Meet our team</h2>
            <div class="d-inline-block g-width-35 g-height-2 g-bg-primary mb-2"></div>
            <p class="lead mb-0">We have an awesome team! The best!</p>
          </div>
        </div>
        <!-- End Heading -->

        <!-- Icon Blocks -->
        <div class="row no-gutters g-mb-50">
          <div class="col-sm-6 col-lg-3">
            <a class="text-decoration-none" href="products">
              <!-- Icon Blocks -->
              <div class="u-shadow-v21--hover g-brd-around g-brd-gray-light-v4 g-brd-transparent--hover g-bg-white--hover g-transition-0_3 g-cursor-pointer g-px-30 g-pt-30 g-pb-50">
                <img class="img-responsive" src="assets/img/logo-casagrande-transparent.png">
                <h3 class="h5 g-color-black g-font-weight-600 mb-3">Casagrande</h3>
                <p class="g-color-gray-dark-v4">Casagrande is a world-class manufacturer of foundation equipment. It designs and produces large diameter piling rigs, equipment for diaphragm walls, small diameter drilling rigs, machines for tunnels, grouting plants and hydraulic crawler cranes.</p>
              </div>
              <!-- End Icon Blocks -->
            </a>
          </div>

          <div class="col-sm-6 col-lg-3">
            <!-- Icon Blocks -->
            <div class="u-shadow-v21--hover g-brd-around g-brd-gray-light-v4 g-brd-transparent--hover g-bg-white--hover g-transition-0_3 g-cursor-pointer g-px-30 g-pt-30 g-pb-50  g-ml-minus-1">
              <img class="img-responsive" src="assets/img/logo-casagrande-blank-hutte.png">
              <h3 class="h5 g-color-black g-font-weight-600 mb-3">HÜTTE Bohrtechnik</h3>
              <p class="g-color-gray-dark-v4">HÜTTE Bohrtechnik produces and distributes drilling rigs up to a weight of 30 tons as well as accessories for civil engineering and geothermal applications including crawler attachment devices and customized machines.</p>
            </div>
            <!-- End Icon Blocks -->
          </div>

          <div class="col-sm-6 col-lg-3">
            <!-- Icon Blocks -->
            <div class="u-shadow-v21--hover g-brd-around g-brd-gray-light-v4 g-brd-transparent--hover g-bg-white--hover g-transition-0_3 g-cursor-pointer g-px-30 g-pt-30 g-pb-50  g-ml-minus-1">
              <img class="img-responsive" src="assets/img/logo-casagrande-blank-hd.png">
              <h3 class="h5 g-color-black g-font-weight-600 mb-3">HD Engineering</h3>
              <p class="g-color-gray-dark-v4">HD Engineering is a Hong Kong based company specialized in the manufacturing and supply of foundation equipment for hard rock excavation, down the hole (DTH) hammers, direct and reverse circulation and micro-drilling rigs for DTH.</p>
            </div>
            <!-- End Icon Blocks -->
          </div>

          <div class="col-sm-6 col-lg-3">
            <!-- Icon Blocks -->
            <div class="u-shadow-v21--hover g-brd-around g-brd-gray-light-v4 g-brd-transparent--hover g-bg-white--hover g-transition-0_3 g-cursor-pointer g-px-30 g-pt-30 g-pb-50  g-ml-minus-1">
              <img class="img-responsive" src="assets/img/logo-casagrande-blank-bfs.png">
              <h3 class="h5 g-color-black g-font-weight-600 mb-3">BFS</h3>
              <p class="g-color-gray-dark-v4">BFS Betonfertigteilesysteme GmbH company, plans, supplies and installs machinery to manufacture large concrete products designed for the water supply, utility poles, foundations poles, rail sleepers and civil surfaces.</p>
            </div>
            <!-- End Icon Blocks -->
          </div>
        </div>
        <!-- End Icon Blocks -->

      </section>
      <!-- End Team Blocks -->

      <?php include('include/footer.php'); ?>

    </main>

    <?php include('include/scripts.php'); ?>

  </body>
</html>
