<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WooCommerce
 */
$subscribe_title = get_field('subscribe_title', 'options'); 
$subscribe_text = get_field('subscribe_text', 'options'); 
$location = get_field('location', 'options'); 
$email = get_field('email', 'options'); 
$tell = get_field('tell', 'options'); 
$copyright = get_field('copyright', 'options'); 
$socials = get_field('socials', 'options'); 
$plants = get_field('plants', 'options'); 
$payments = get_field('payments', 'options'); 
?>

	<footer id="colophon" class="footer">
		<div class="site-info">

			
			<div class="grid-x">
				<div class="cell small-12 medium-8 large-8">
					<?php if (!empty($plants)) : ?>
						<div class="grid-x footer__plants">
							<?php foreach ($plants as $row): ?> 
								<?php $image = $row['image']; ?>
								<?php $title = $row['title']; ?>
								<?php $text = $row['text']; ?>
								<?php if ($image && $title && $text): ?>
									<div class="cell small-12 medium-4 large-4">
										<img src="<?php echo $row ['image']['url']; ?>" alt="image">
										<p><b><?php echo $title; ?></b></p>
										<p><?php echo $text; ?></p>
										
									</div>
								<?php endif; ?>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
				</div>
				<div class="cell small-12 medium-4 large-4"> 
					<?php if ( ! empty( $subscribe_title ) ) : ?>
						<p><b><?php echo $subscribe_title; ?></b></p>
					<?php endif ?>
					<?php if ( ! empty( $subscribe_text ) ) : ?>
						<p><?php echo $subscribe_text; ?></p>
					<?php endif ?>
				</div>
			</div>


			<div class="grid-x footer__contacts">
				<div class="cell small-12 medium-3 large-3"> 
					<?php the_custom_logo(); ?>
				</div>
				<div class="cell small-12 medium-3 large-3">  
					<?php if ( ! empty( $location ) ) : ?>
						<div class=""><?php echo $location; ?></div>
					<?php endif ?>
				</div>
				<div class="cell small-12 medium-3 large-3"> 
					<?php if ( ! empty( $email ) ) : ?>
						<div class=""><?php echo $email; ?></div>
					<?php endif ?>
				</div>
				<div class="cell small-12 medium-3 large-3">  
					<?php if ( ! empty( $tell ) ) : ?>
						<div class=""><?php echo $tell; ?></div>
					<?php endif ?>
				</div>
			</div>

			<div class="grid-x">
				<div class="cell small-12 medium-8 large-8"> 
						menu
				</div>
				<div class="cell small-12 medium-4 large-4"> 
					<p><b>Social Media</b></p>
					<?php if (!empty($socials)) : ?>
						<div class="footer__socials">
							<?php foreach ($socials as $row): ?> 
								<?php $icon = $row['icon']; ?>
								<?php $link = $row['link']; ?>
								<?php if ($icon && $link): ?>
									<div>
										<a href="<?php echo $link; ?>" target="_blank"><img src="<?php echo $row ['icon']['url']; ?>" alt="image"></a>
									</div>
								<?php endif; ?>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>

					<p><b>We accept</b></p>
					<?php if ( ! empty( $payments ) && isset( $payments['url'] ) ) : ?>
						<img src="<?php echo esc_url( $payments['url'] ); ?>" alt="icon">
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div>
			<?php if ( ! empty( $copyright ) ) : ?>
				<div class=""><?php echo $copyright; ?></div>
			<?php endif ?>
		</div>
	</footer>
</div>

<?php wp_footer(); ?> 


</body>
</html>
