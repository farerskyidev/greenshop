<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WooCommerce
 */
$slider_banner = get_field('slider_banner');
$text_banner = get_field('text_banner');
$title_banner = get_field('title_banner');
$button_banner = get_field('button_banner');
?>

<?php if (!empty($slider_banner)) : ?>
	<div class="eco-projects-slider__wrap">
		<div class="swiper swiper-custom">
			<div class="swiper-wrapper">
				<?php foreach ($_banner as $row): ?>
					<?php $image = $row['image']; ?>
					<?php if ($image): ?>
						<div class="swiper-slide">
							<div class="container">
								<div class="eco-projects-slider__item">
									<div class="eco-projects-slider__item-line"></div>
									<div class="row">
										<div class="col-lg-6">
											<div class="eco-projects-slider__item-image">
												<img src="<?php echo $row ['image']['url']; ?>" alt="image">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endif; ?>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
<?php endif; ?>
