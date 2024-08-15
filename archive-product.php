<?php
get_header(); ?>

<?php

if ( have_posts() ) :
    woocommerce_product_loop_start();
    while ( have_posts() ) : the_post();
        wc_get_template_part( 'content', 'product' );
    endwhile;
    woocommerce_product_loop_end();
else :
    wc_get_template_part( 'content', 'none' );
endif;
?>

<?php
get_footer();
?>
