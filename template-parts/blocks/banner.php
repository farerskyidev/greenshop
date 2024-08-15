<?php
/*
 * Block Name: banner
 * Slug:
 * Description:
 * Keywords:
 * Dependency:
 * Align: false
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
$slider_banner = get_field('slider_banner'); 
$subtitle_banner = get_field('subtitle_banner'); 
$title_banner = get_field('title_banner'); 
$text_banner = get_field('text_banner'); 
$button = get_field('button'); 

// Define the block name
$block_name = 'banner';

// Create id attribute allowing for custom "anchor" value.
$id = $block_name . '-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}
// Create class attribute allowing for custom "className" and "align" values.
$className   = array( $block_name );
$className[] = 'banner'; 
?>
<section class="<?php echo implode( ' ', $className ); ?>" id="<?php echo esc_attr( $id ); ?>">
    

    <div class="grid-x grid-margin-x">
        <div class="cell small-12 medium-6 large-6">
            <?php if ( ! empty( $subtitle_banner ) ) : ?>
                <div class=""><?php echo $subtitle_banner; ?></div>
            <?php endif ?>

            <?php if ( ! empty( $title_banner ) ) : ?>
                <h1 class=""><?php echo $title_banner; ?></h1>
            <?php endif ?>

            <?php if ( ! empty( $text_banner ) ) : ?>
                <div class=""><?php echo $text_banner; ?></div>
            <?php endif ?>
        </div>

        <div class="cell small-12 medium-6 large-6 banner__slides">

            <?php if (!empty($slider_banner)) : ?>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php foreach ($slider_banner as $row): ?> 
                            <?php $image = $row['image']; ?>
                            <?php if ($image): ?>
                                <div class="swiper-slide flex justify-center">
                                    <img src="<?php echo $row ['image']['url']; ?>" alt="image">
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-pagination banner__swiper"></div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

