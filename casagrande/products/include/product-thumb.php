<div class="w-100 g-color-white g-pos-abs g-z-index-1 g-top-0 g-px-20 g-pt-20 text-center thumb-inner">
	<h3 class="thumb-title <?php echo $key == 'multi function rig' ? 'thumb-title-center' : ''; ?>"><?php echo ucwords($product['title']); ?></h3>
	<?php
		switch ($key) {
			case 'piling rigs':
				$k1 = 'Torque';
				$v1 = $product['spec']['Rotary head'][$k1];
				$k2 = 'Max diameter';
				$v2 = $product['spec'][$k2];
				$k3 = 'Weight';
				$v3 = $product['spec'][$k3]['Weight in working condition'];
				break;
			case 'cfa piling rigs':
				$k1 = 'Torque';
				$v1 = $product['spec']['Rotary head'][$k1];
				$k2 = 'Max diameter C.F.A.';
				$v2 = $product['spec'][$k2];
				$k3 = 'Max depth C.F.A.';
				$v3 = $product['spec'][$k3];
				break;
			case 'diaphragm wall':
				if ($product['title'] == 'G-SERIES HYDRAULIC GRAB') {
					$k1 = 'Jaws width';
					$v1 = '480 &divide; 1480 mm';
					$k2 = 'Jaws opening';
					$v2 = '2500 &divide; 3200 mm';
					$k3 = 'Weight of grab';
					$v3 = '13600 &divide; 21200 kg';
				} elseif ($product['title'] == 'PM MECHANICAL GRAB') {
					$k1 = 'Jaws width';
					$v1 = '600 &divide; 1200 mm';
					$k2 = 'Jaws opening';
					$v2 = '2500 &divide; 3000 mm';
					$k3 = 'Weight of grab';
					$v3 = '8150 &divide; 11200 kg';
				} else {
					$k1 = 'Width of trench';
					$v1 = $product['spec'][$k1];
					$k2 = 'Lenght of trench';
					$v2 = $product['spec'][$k2];
					$k3 = 'Depth of excavation';
					$v3 = $product['spec'][$k3];
				}
				break;
			case 'hydromills':
					$k1 = 'Width of trench';
					$v1 = $product['spec'][$k1];
					$k2 = 'Lenght of trench';
					$v2 = $product['spec'][$k2];
					$k3 = 'Depth of excavation';
					$v3 = $product['spec'][$k3];
				break;
			case 'crawler drills':
			case 'tunneling':
					$k1 = 'Weighth';
					$v1 = $product['spec']['Weight in working condition'];
					$k2 = 'Width of crawler';
					$v2 = $product['spec'][$k2];
					$k3 = 'Engine power';
					$v3 = $product['spec'][$k3];
				break;
			case 'cranes':
					$k1 = 'Lifting capacity';
					$v1 = $product['spec'][$k1];
					$k2 = 'Main winch';
					$v2 = $product['spec'][$k2];
					$k3 = 'Engine power';
					$v3 = $product['spec'][$k3];
				break;
			case 'stone columns':
					$k1 = 'Max. depth';
					$v1 = $product['spec'][$k1];
					$k2 = 'Torque of rotary head';
					$v2 = $product['spec'][$k2];
					$k3 = 'Diesel engine – power';
					$v3 = $product['spec'][$k3];
				break;
			default:
				break;
		}
		if ($key !== 'multi function rig') {
			echo('<span class="g-font-weight-600">'.strtoupper($k1).'</span>');
			echo '<br />';
			echo($v1);
			echo '<span class="thumb-divider"></span>';
			echo('<span class="g-font-weight-600">'.strtoupper($k2).'</span>');
			echo '<br />';
			echo($v2);
			echo '<span class="thumb-divider"></span>';
			echo('<span class="g-font-weight-600">'.strtoupper($k3).'</span>');
			echo '<br />';
			echo($v3);
		}
	?>
</div>
<div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20 max-height-350">
	<ul class="w-100 d-flex flex-row list-inline mt-auto ml-auto mr-auto mb-0 justify-content-around g-px-15">
		<li>
			<a class="u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle" href="details.php?category=<?php echo urlencode($key); ?>&product=<?php echo urlencode($product['title']); ?>">
				<i class="icon-communication-095 u-line-icon-pro"></i>
			</a>
		</li>
		<?php if(!empty($product['gallery'])): ?>
		<li>
			<a class="js-fancybox u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle" data-fancybox-gallery="lightbox-gallery-products-<?php echo str_replace(' ', '-', $product['title']); ?>" href="../assets/gallery/<?php echo $product['gallery'][0]; ?>" title="<?php echo $product['title']; ?> Product Gallery"
				data-open-effect="bounceInDown"
				data-close-effect="bounceOutDown"
				data-open-speed="1000"
				data-close-speed="1000"
				data-blur-bg="true">
				<i class="icon-communication-017 u-line-icon-pro"></i>
			</a>
			<?php foreach(array_slice($product['gallery'], 0) as $k => $v): ?>
				<?php if ($k !== 0): ?>
				<a class="js-fancybox" data-fancybox-gallery="lightbox-gallery-products-<?php echo str_replace(' ', '-', $product['title']); ?>" href="../assets/gallery/<?php echo $product['gallery'][$k]; ?>" title="<?php echo $product['title']; ?> Product Gallery"
					data-open-effect="bounceInDown"
					data-close-effect="bounceOutDown"
					data-open-speed="1000"
					data-close-speed="1000"
					data-blur-bg="true">
				</a>
				<?php endif; ?>
			<?php endforeach; ?>
		</li>
		<?php endif; ?>
		<?php if(!empty($product['video'])): ?>
		<li>
			<a class="js-fancybox u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle" href="../assets/video/<?php echo $product['video'][0]; ?>" data-fancybox-speed="350">
				<i class="icon-communication-100 u-line-icon-pro"></i>
			</a>
		</li>
		<?php endif; ?>
		<li>
			<a class="u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle" href="../assets/docs/<?php echo $product['docs']; ?>" target="_blank">
				<i class="icon-communication-007 u-line-icon-pro"></i>
			</a>
		</li>		
	</ul>
</div>
