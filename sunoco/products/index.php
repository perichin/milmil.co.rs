<?php
  $products = json_decode(file_get_contents('../assets/js/sunoco.json'), true)['products'];
  $categories = json_decode(file_get_contents('../assets/js/sunoco.json'), true)['categories'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Title -->
    <title>MilMil - Sunoco - Proizvodi</title>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../../../favicon.ico">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C500%2C600%2C700">
    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="../../../assets/vendor/bootstrap/bootstrap.min.css">
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="../../../assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../assets/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="../../../assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="../../../assets/vendor/cubeportfolio-full/cubeportfolio/css/cubeportfolio.min.css">
    <link rel="stylesheet" href="../../../assets/vendor/hamburgers/hamburgers.min.css">
    <link  rel="stylesheet" href="../../../assets/vendor/custombox/custombox.min.css">
    <!-- CSS Unify -->
    <link rel="stylesheet" href="../../../assets/css/unify.css">
    <!-- CSS Customization -->
    <link rel="stylesheet" href="../../../assets/css/custom.css">
    <style type="text/css">
      .g-pa-30 {
        min-height: 132px;
      }
      [class*="u-block-hover"],
      [class*="u-block-hover"]::before,
      [class*="u-block-hover"]::after {
        transition: all .1s ease;
      }
      .modal-list {
        padding-left: 30px;
      }
			.g-bg-yella {
				background-color: #f2cf33;
			}
      .navbar-brand > img {
        width: 80px;
      }
      .navbar-brand {
        padding: 0;
      }
      @media(max-width: 620px) {
        .navbar-brand > img {
          width: 70px;
        }
        .custombox-content > * {
          overflow: scroll;
        }
      }
    </style>
  </head>
  <body>
    <main>

      <?php include('include/header.php'); ?>

      <!-- Products -->
      <section class="container g-pt-170 g-pb-100">
        <!-- Cube Portfolio Blocks - Filter -->
        <ul id="filterControls" class="d-block list-inline text-center g-mb-50">
          <?php foreach ($categories as $category): ?>
          <li class="list-inline-item cbp-filter-item cbp-filter-item-active g-brd-around g-brd-gray-light-v4 g-brd-primary--active g-color-gray-dark-v4 g-color-primary--hover g-color-primary--active g-font-size-13 rounded g-transition-0_3 g-px-20 g-py-7 mb-2" role="button" data-filter="<?php echo $category['class']; ?>"><?php echo $category['title']; ?>
          </li>
          <?php endforeach; ?>
        </ul>
        <!-- End Cube Portfolio Blocks - Filter -->
        <div class="cbp-search">
          <input id="js-search-products" type="text" placeholder="Pretraži po nazivu" autocomplete="off" data-search=".products-title" class="cbp-search-input">
          <div class="cbp-search-icon"></div>
          <div class="cbp-search-nothing">Nema rezultata za pojam <i>{{query}}</i></div>
        </div>
        <!-- Cube Portfolio Blocks - Content -->
        <div class="cbp" data-controls="#filterControls" data-animation="bounceLeft" data-x-gap="30" data-y-gap="30" data-media-queries='[
          {"width": 1500, "cols": 3},
          {"width": 1100, "cols": 3},
          {"width": 800, "cols": 3},
          {"width": 480, "cols": 2},
          {"width": 300, "cols": 1},
          {"width": 0, "cols": 1}
          ]'>
          <?php foreach ($products as $key => $value): ?>
          <div class="cbp-item <?php echo $value['class']; ?>">
            <a href="#products-modal" data-modal-target="#products-modal" data-modal-effect="door" data-product-key="<?php echo $key; ?>">
              <div class="u-block-hover g-parent">
                <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_2 g-transition--ease-in-out" src="img/<?php echo $value['img']; ?>" alt="" title="">
                <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
                  <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                    <li class="list-inline-item">
                      <span class="u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle">
                      <i class="icon-communication-095 u-line-icon-pro"></i>
                      </span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="u-shadow-v19 g-bg-white text-center g-pa-30 mb-1">
                <h3 class="h5 g-color-black g-font-weight-700 mb-1 products-title"><?php echo $value['title']; ?></h3>
                <p class="mb-0"><?php echo $value['category']; ?></p>
              </div>
            </a>
          </div>
          <?php endforeach; ?>
        </div>
      </section>

      <?php include('include/footer.php'); ?>

    </main>
    <!-- Demo modal window -->
    <div id="products-modal" class="text-left g-max-width-600 g-bg-white g-pa-20" style="display: none;">
      <button type="button" class="close" onclick="Custombox.modal.close();">
        <i class="hs-icon hs-icon-close"></i>
      </button>
      <h4 class="g-mb-20 modal-title"></h4>
      <hr />
      <div class="row">
        <div class="col-sm-6">
          <img class="modal-img img-fluid g-mb-20" src="" />
        </div>
        <div class="col-sm-6">
          <p class="modal-description text-justify"></p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <ul class="modal-list g-list-style-circle"></ul>
        </div>
      </div>
    </div>
    <!-- End Demo modal window -->
    <?php include('include/scripts.php'); ?>
  </body>
</html>
