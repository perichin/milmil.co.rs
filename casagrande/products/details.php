<?php

$categories = json_decode(file_get_contents('../assets/js/casagrande.json'), true);
$category = str_replace('+', ' ', $_GET['category']);
$productTitle = $_GET['product'];

$products = $categories[$category]['products'];
foreach ($products as $product) {
	if ($product['title'] == str_replace('+', ' ', $productTitle)) {
		$details = $product;
		$spec = $details['spec'];
	}
}

$base_carrier = $category == 'multi function rig' && $details['title'] !== 'BASE CARRIER' ? $categories['multi function rig']['products'][0]['spec'] : false;

$spec_left = !$base_carrier ? $spec : $base_carrier;
$spec_right = !empty($base_carrier) ? $spec : false;

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Title -->
		<title>MilMil - Casagrande - <?php echo $details['title']; ?></title>
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
		<link rel="stylesheet" href="../../../assets/vendor/icon-line/css/simple-line-icons.css">
		<link rel="stylesheet" href="../../../assets/vendor/icon-line-pro/style.css">
		<link rel="stylesheet" href="../../../assets/vendor/icon-hs/style.css">
		<link rel="stylesheet" href="../../../assets/vendor/animate.css">
		<link rel="stylesheet" href="../../../assets/vendor/hs-megamenu/src/hs.megamenu.css">
		<link rel="stylesheet" href="../../../assets/vendor/hamburgers/hamburgers.min.css">
		<link rel="stylesheet" href="../../../assets/vendor/fancybox/jquery.fancybox.min.css">
		<link rel="stylesheet" href="../../../assets/vendor/slick-carousel/slick/slick.css">
		<!-- CSS Unify -->
		<link rel="stylesheet" href="../../../assets/css/unify.css">
		<!-- CSS Customization -->
		<link rel="stylesheet" href="../../../assets/css/custom.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/details.css">
	</head>
	<body>
		<main>
			<?php include('include/header.php'); ?>
			<!-- Section Content -->
			<section class="g-pt-170 g-pb-100">
				<div class="container">
					<div class="u-heading-v2-3--bottom g-mb-30">
						<h2 class="u-heading-v2__title g-mb-10"><?php echo $details['title']; ?></h2>
						<h4 class="g-font-weight-200 g-mb-10"><?php echo $category; ?></h4>
					</div>
					<div class="row">
						<div class="col-lg-4">
							<img class="img-fluid g-mb-30" src="../assets/img/<?php echo $details['img']; ?>">
						</div>
						<div class="col-lg-4">
							<!-- Default Outline Panel-->
							<div class="card rounded-0 g-mb-30">
								<h3 class="card-header h5 rounded-0">
									<i class="fa fa-tasks g-font-size-default g-mr-5"></i> <?php echo !$spec_right ? 'Technical data' : 'Base carrier - Technical data'; ?>
								</h3>
								<div class="card-block">
									<ul class="list-unstyled g-color-gray-dark-v4">
									<?php foreach ($spec_left as $key => $value): ?>
										<?php if (is_array($value)): ?>
											<li class="d-flex g-mb-10">
												<h5 class="table-title g-color-primary"><?php echo ($key); ?></h5>
											</li>
											<?php foreach ($value as $k => $v): ?>
											<li class="d-flex g-mb-10">
												<i class="icon-arrow-right-circle g-color-primary g-mt-5 g-mr-10"></i>
												<span class="g-width-50x"><?php echo $k; ?></span>
												<span class="g-width-50x text-right"><?php echo $v; ?></span>
											</li>
											<?php endforeach; ?>
										<?php else: ?>
											<li class="d-flex g-mb-10">
												<i class="icon-arrow-right-circle g-color-primary g-mt-5 g-mr-10"></i>
												<span class="g-width-50x"><?php echo $key; ?></span>
												<span class="g-width-50x text-right"><?php echo $value; ?></span>
											</li>
										<?php endif; ?>
									<?php endforeach; ?>
									</ul>
								</div>
							</div>
							<!-- End Default Outline Panel-->
						</div>
						<div class="col-lg-4">
							<!-- Default Outline Panel-->
							<?php if(!empty($spec_right)): ?>
							<div class="card rounded-0 g-mb-30">
								<h3 class="card-header h5 rounded-0">
									<i class="fa fa-tasks g-font-size-default g-mr-5"></i> <?php echo ucfirst(strtolower($details['title'])); ?> - Technical data
								</h3>
								<div class="card-block">
									<ul class="list-unstyled g-color-gray-dark-v4">
									<?php foreach ($spec_right as $key => $value): ?>
										<?php if (is_array($value)): ?>
											<li class="d-flex g-mb-10">
												<h5 class="table-title g-color-primary"><?php echo ($key); ?></h5>
											</li>
											<?php foreach ($value as $k => $v): ?>
											<li class="d-flex g-mb-10">
												<i class="icon-arrow-right-circle g-color-primary g-mt-5 g-mr-10"></i>
												<span class="g-width-50x"><?php echo $k; ?></span>
												<span class="g-width-50x text-right"><?php echo $v; ?></span>
											</li>
											<?php endforeach; ?>
										<?php else: ?>
											<li class="d-flex g-mb-10">
												<i class="icon-arrow-right-circle g-color-primary g-mt-5 g-mr-10"></i>
												<span class="g-width-50x"><?php echo $key; ?></span>
												<span class="g-width-50x text-right"><?php echo $value; ?></span>
											</li>
										<?php endif; ?>
									<?php endforeach; ?>
									</ul>
								</div>
							</div>
							<?php endif; ?>
							<!-- End Default Outline Panel-->
							<?php if(!empty($details['gallery'])): ?>
							<!-- Default Outline Panel-->
							<div id="gallery-section" class="card rounded-0 g-mb-30">
								<h3 class="card-header h5 rounded-0">
									<i class="fa fa-tasks g-font-size-default g-mr-5"></i> Photo gallery
								</h3>
								<div class="card-block">
									<div class="row">
										<?php $count = count($details['gallery']); ?>
										<?php foreach ($details['gallery'] as $key => $value): ?>
											<?php if ($key == 0): ?>
											<div class="align-middle g-mx-15">
												<a class="js-fancybox d-block u-bg-overlay g-bg-black-opacity-0_5--after" href="../assets/gallery/<?php echo $value; ?>" data-fancybox-hidden-gallery="lightbox-gallery-hidden" data-fancybox-speed="500" data-fancybox-slide-speed="1000">
												<img class="img-fluid g-mb-0" src="../assets/gallery-thumbs/<?php echo $details['gallery-thumbs'][$key]; ?>" alt="">
												<?php if ($count > 1): ?>
												<span class="g-line-height-1_2 u-bg-overlay__inner g-absolute-centered g-color-white">
												<span class="g-font-size-36"><?php echo $count - 1; ?>+</span><br />view photos
												</span>
												<?php endif; ?>
												</a>
											</div>
											<?php else: ?>
												<img class="hidden-xs-up" src="../assets/gallery/<?php echo $value; ?>" alt="" data-fancybox-hidden-gallery="lightbox-gallery-hidden" data-fancybox-speed="500" data-fancybox-slide-speed="1000">
											<?php endif; ?>
										<?php endforeach; ?>
									</div>
								</div>
							</div>
							<!-- End Default Outline Panel-->
							<?php endif; ?>
							<?php if(!empty($details['video'])): ?>
							<!-- Default Outline Panel-->
							<div id="video-section" class="card rounded-0 g-mb-30">
								<h3 class="card-header h5 rounded-0">
									<i class="fa fa-tasks g-font-size-default g-mr-5"></i> Video gallery
								</h3>
								<div class="card-block">
									<div class="row">
										<?php foreach ($details['video'] as $key => $value): ?>
										<div class="col-md-6">
											<a class="js-fancybox d-block u-block-hover g-pos-rel" href="../assets/video/<?php echo $value; ?>" title="">
											<img class="img-fluid" src="../assets/video-thumbs/<?php echo $details['video-thumbs'][$key]; ?>" alt="">
											<span class="u-icon-v3 u-icon-size--sm g-bg-white-opacity-0_7 g-bg-primary--hover g-color-primary g-color-white--hover g-font-size-12 g-rounded-50x g-cursor-pointer g-absolute-centered">
											<i class="fa fa-play g-left-2"></i>
											</span>
											</a>
											<p class="g-mt-10 g-font-size-90x g-mb-0"><?php echo $details['video-text'][$key]; ?></p>
										</div>
										<?php endforeach; ?>
									</div>
								</div>
							</div>
							<!-- End Default Outline Panel-->
							<?php endif; ?>
							<?php if(!empty($details['docs'])): ?>
							<!-- Default Outline Panel-->
							<div class="card rounded-0">
								<h3 class="card-header h5 rounded-0">
									<i class="fa fa-tasks g-font-size-default g-mr-5"></i> Documentation
								</h3>
								<div class="card-block">
									<a href="../assets/docs/<?php print_r($details['docs']); ?>" class="btn btn-md btn-block rounded-0 g-bg-primary text-left">
										<i class="fa fa-file-pdf-o g-mr-3"></i>
										<?php echo ucfirst(strtolower($details['title'])); ?><br /><span class="g-font-size-80x">product catalogue</span>
									</a>
								</div>
							</div>
							<!-- End Default Outline Panel-->
							<?php endif; ?>
						</div>
					</div>
				</div>
			</section>
			<!-- End Section Content -->
			<?php include('include/footer.php'); ?>
		</main>
		<?php include('include/scripts-details.php'); ?>
	</body>
</html>
