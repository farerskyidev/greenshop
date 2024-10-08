<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WooCommerce
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.8.1/dist/css/foundation.min.css" crossorigin="anonymous">
	<!-- <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.8.1/dist/js/foundation.min.js" crossorigin="anonymous"></script> -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/style.css"> 
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'woocommerce' ); ?></a>

	<header id="masthead" class="header relative">
		<div class="grid-x grid-margin-x">
			<div class="cell small-12 medium-6 large-6">
				<div class="site-branding">
					<?php the_custom_logo(); ?>
						<?php
					
					$woocommerce_description = get_bloginfo( 'description', 'display' );
					if ( $woocommerce_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $woocommerce_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif; ?>
				</div>
			</div>
			<div class="cell small-12 medium-6 large-6">
				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'woocommerce' ); ?></button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1', 
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</nav>
			</div>
		</div>
		
	</header>
