<?php

/**
 * Section Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'section-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'section';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$rand = rand(1, 9999);
$bg = get_field('background');

if(get_field('reduced_padding')) {
    $sectionPadding = " section-reduced-padding";
} else {
    $sectionPadding = "";
}

if(get_field('indent_left')) {
    $sectionIndent = " section-indent-left";
} else {
    $sectionIndent = "";
}

?>


<section id="<?php the_field('section_id'); ?>" class="section-bg-<?php echo $bg; ?> full-width <?php echo $sectionPadding . $sectionIndent . esc_attr($classes); ?> <?php if(get_field('tabbed_section')) { ?>tabbed-section<?php } ?>">

    <?php if(get_field('include_header_rescue')) { ?>
    
        <div class="header-rescue-inner">
        </div><!-- .header-rescue-inner -->
    
    <?php } ?>
    
    <div class="container">

        <div class="main-content">

            <InnerBlocks />

        </div><!-- .main-content -->

    </div><!-- .container -->

</section>