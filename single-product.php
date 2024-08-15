<?php
get_header(); ?>

<?php

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        wc_get_template_part( 'content', 'single-product' );
    endwhile;
endif;
?>

<?php
get_footer();
?>
