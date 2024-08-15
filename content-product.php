<?php
/**
 * Template part for displaying products in the product loop.
 */

global $product;
?>

<li <?php wc_product_class( '', $product ); ?>>
    <a href="<?php the_permalink(); ?>">
        <?php
        if ( has_post_thumbnail() ) {
            echo get_the_post_thumbnail( $product->get_id(), 'shop_catalog' );
        }
        ?>
        <h2 class="woocommerce-loop-product__title"><?php the_title(); ?></h2>
        <?php
        echo $product->get_price_html();
        ?>
    </a>
</li>
