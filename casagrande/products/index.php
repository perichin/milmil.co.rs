<?php
	$categories = json_decode(file_get_contents('../assets/js/casagrande.json'), true);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Title -->
		<title>MilMil - Casagrande - Proizvodi</title>
		<!-- Required Meta Tags Always Come First -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<!-- Favicon -->
		<link rel="shortcut icon" href="../../../favicon.ico">
		<!-- Google Fonts -->
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C500%2C600%2C700">
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,700">
		<!-- CSS Global Compulsory -->
		<link rel="stylesheet" href="../../../assets/vendor/bootstrap/bootstrap.min.css">
		<!-- CSS Implementing Plugins -->
		<link rel="stylesheet" href="../../../assets/vendor/icon-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="../../../assets/vendor/icon-line-pro/style.css">
		<link rel="stylesheet" href="../../../assets/vendor/icon-hs/style.css">
		<link rel="stylesheet" href="../../../assets/vendor/cubeportfolio-full/cubeportfolio/css/cubeportfolio.min.css">
		<link rel="stylesheet" href="../../../assets/vendor/animate.css">
		<link rel="stylesheet" href="../../../assets/vendor/slick-carousel/slick/slick.css">
		<link rel="stylesheet" href="../../../assets/vendor/hs-megamenu/src/hs.megamenu.css">
		<link rel="stylesheet" href="../../../assets/vendor/hamburgers/hamburgers.min.css">
		<link  rel="stylesheet" href="../../../assets/vendor/custombox/custombox.min.css">
		<link  rel="stylesheet" href="../../../assets/vendor/fancybox/jquery.fancybox.min.css">
		<!-- CSS Unify -->
		<link rel="stylesheet" href="../../../assets/css/unify.css">
		<!-- CSS Customization -->
		<link rel="stylesheet" href="../../../assets/css/custom.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/index.css">
	</head>
	<body>
		<main>
			<?php include('include/header.php'); ?>
			<section class="container g-pt-170 g-pb-50">
				<ul id="filterControls" class="list-inline text-center g-width-70x--md mx-auto">
					<li class="list-inline-item cbp-filter-item cbp-filter-item-active g-brd-around g-brd-gray-light-v4 g-brd-primary--active g-color-gray-dark-v4 g-color-primary--hover g-color-primary--active g-font-size-13 g-transition-0_3 g-px-20 g-py-7 mb-2" role="button" data-filter="*">Svi proizvodi
					</li>
					<?php foreach ($categories as $key => $value): ?>
					<li class="list-inline-item cbp-filter-item cbp-filter-item-active g-brd-around g-brd-gray-light-v4 g-brd-primary--active g-color-gray-dark-v4 g-color-primary--hover g-color-primary--active g-font-size-13 rounded g-transition-0_3 g-px-20 g-py-7 mb-2" role="button" data-filter=".<?php echo str_replace(' ', '-', $key); ?>"><?php echo ucfirst($key); ?>
					</li>
					<?php endforeach; ?>
				</ul>
				<div class="cbp-search">
					<input id="js-search-products" type="text" placeholder="Pretraži po nazivu" autocomplete="off" data-search=".thumb-title" class="cbp-search-input">
					<div class="cbp-search-icon"></div>
					<div class="cbp-search-nothing">Nema rezultata za pojam <i>{{query}}</i></div>
				</div>
				<div class="cbp" data-controls="#filterControls" data-animation="bounceLeft" data-x-gap="30" data-y-gap="30" data-media-queries='[
					{"width": 1500, "cols": 4},
					{"width": 1100, "cols": 4},
					{"width": 800, "cols": 3},
					{"width": 480, "cols": 2},
					{"width": 300, "cols": 1},
					{"width": 0, "cols": 1}
					]'>
					<?php foreach ($categories as $key => $value): ?>
						<?php foreach ($value['products'] as $product): ?>
						<div class="cbp-item <?php echo str_replace(' ', '-', $key); ?>">
							<div class="u-block-hover g-parent max-height-350">
								<img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_2 g-transition--ease-in-out" src="../assets/img/<?php echo $product['img']; ?>" alt="" title="">
								<?php include('include/product-thumb.php'); ?>
							</div>
						</div>
						<?php endforeach; ?>
					<?php endforeach; ?>
				</div>
			</section>
			<?php include('include/footer.php'); ?>
		</main>
		<?php include('include/scripts-index.php'); ?>
	</body>
</html>
