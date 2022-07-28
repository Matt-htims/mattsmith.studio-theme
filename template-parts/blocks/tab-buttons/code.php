<?php

/**
 * Tab Buttons Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'tab-buttons-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'tab-buttons';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$rand = rand(1, 9999);

?>


<div class="tab-buttons contained">

    <?php if( have_rows('tab_buttons') ): while ( have_rows('tab_buttons') ) : the_row(); ?>

        <a href="#<?php the_sub_field('section_id'); ?>" class="tab-link button"><?php the_sub_field('button_text'); ?></a>

    <?php endwhile; else : endif; ?>
    
</div><!-- .tab-buttons -->

<script type="text/javascript">

jQuery( document ).ready(function($) {

    $('.tab-buttons a').first().addClass('tab-link-active');

});

</script>