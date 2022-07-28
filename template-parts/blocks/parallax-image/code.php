<?php

/**
 * Parallax Image Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'parallax-image-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'parallax-image';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

?>


<?php $attachment_id = get_field('image');
$size = "full";
$image = wp_get_attachment_image_src( $attachment_id, $size ); ?>
                                
<section class="full-width parallax-image" style="background-image: url(<?php echo $image[0]; ?>);">
</section><!-- .parallax-image -->