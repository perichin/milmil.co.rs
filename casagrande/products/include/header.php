<!-- Header -->
<header id="js-header" class="u-header u-header--sticky-top u-header--change-appearance"
	data-header-fix-moment="300">
	<!-- Top Bar -->
	<div class="u-header__section u-header__section--hidden u-header__section--dark g-bg-black g-transition-0_3 g-py-10">
		<div class="container">
			<div class="row flex-column flex-sm-row justify-content-between align-items-center text-uppercase g-font-weight-600 g-color-white g-font-size-12 g-mx-0--lg">
				<div class="col-auto">
					<a href="/" class="g-color-primary">Mil &amp; Mil Co</a>
				</div>
				<div class="col-auto">
					<a href="tel:+381113475206" class="g-color-primary"><i class="fa fa-phone g-font-size-18 g-valign-middle g-color-primary g-mr-10 g-mt-minus-2"></i> 011 347 5206</a>
				</div>
				<div class="col-auto">
					<i class="fa fa-clock-o g-font-size-18 g-valign-middle g-color-primary g-mr-10 g-mt-minus-2"></i> Pon-Pet: 8 AM - 4 PM
				</div>
			</div>
		</div>
	</div>
	<!-- End Top Bar -->
	<div class="u-header__section u-header__section--dark g-transition-0_3 g-bg-black-opacity-0_4 g-transition-0_3 g-py-14"
		data-header-fix-moment-exclude="g-bg-black-opacity-0_4 g-py-14"
		data-header-fix-moment-classes="g-bg-black-opacity-0_7 g-py-10">
		<nav class="js-mega-menu navbar navbar-toggleable-md">
			<div class="container">
				<!-- Responsive Toggle Button -->
				<button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-right-0" type="button"
					aria-label="Toggle navigation"
					aria-expanded="false"
					aria-controls="navBar"
					data-toggle="collapse"
					data-target="#navBar">
				<span class="hamburger hamburger--slider">
				<span class="hamburger-box">
				<span class="hamburger-inner"></span>
				</span>
				</span>
				</button>
				<!-- End Responsive Toggle Button -->
				<!-- Logo -->
				<a href="/casagrande" class="navbar-brand">
				<img src="../assets/img/logo-casagrande.png" alt="">
				</a>
				<!-- End Logo -->
				<!-- Navigation -->
				<div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg g-mr-40--lg" id="navBar">
					<ul class="navbar-nav text-uppercase g-pos-rel g-font-weight-600 ml-auto">
						<!-- Features -->
						<li class="nav-item hs-has-sub-menu g-mx-10--lg g-mx-15--xl"
							data-animation-in="fadeIn"
							data-animation-out="fadeOut">
							<a id="nav-link--features" class="nav-link g-py-7 g-px-0" href="/casagrande/products"
								aria-haspopup="true"
								aria-expanded="false"
								aria-controls="nav-submenu--features"
								>Proizvodi</a>
							<ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-18 g-mt-10--lg--scrolling" id="nav-submenu--features"
								aria-labelledby="nav-link--features">
								<?php foreach ($categories as $key => $value): ?>
								<li class="dropdown-item hs-has-sub-menu">
									<a id="nav-link--features--sliders" class="nav-link" href="javascript:void(0)"
										aria-haspopup="true"
										aria-expanded="false"
										aria-controls="nav-submenu--features--sliders"
										><?php echo $key; ?></a>
									<ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2" id="nav-submenu--features--sliders"
										aria-labelledby="nav-link--features--sliders">
										<?php foreach ($value['products'] as $k => $v): ?>
										<li class="dropdown-item">
											<a class="nav-link" href="details.php?category=<?php echo urlencode($key);?>&product=<?php echo urldecode($v['title']);?>"><?php echo $v['title']; ?></a>
										</li>
										<?php endforeach; ?>
									</ul>
								</li>
								<?php endforeach; ?>
							</ul>
						</li>
					</ul>
				</div>
				<!-- End Navigation -->
				<div class="d-inline-block hidden-xs-down g-pos-rel g-valign-middle g-pl-30 g-pl-0--lg">
					<a class="btn u-btn-outline-primary g-font-size-13 g-py-10 g-px-15 rounded-0" href="https://www.facebook.com/Mil-Mil-Co-225234914474/">Facebook</a>
				</div>
			</div>
		</nav>
	</div>
</header>
<!-- End Header -->
