<?php include(TEMPLATEPATH."/includes/google-map-helper.php");?>

<?php

/**
 * Google Map Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'google-map-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'google-map';
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


<section class="full-width google-map-wrap section-no-padding">

    <div class="acf-map">

        <?php $location = get_field('map'); ?>

        <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">

            <h4>
                Action Tutoring
            </h4>
            <span></span>

        </div>

    </div>

    <?php if(get_field('include_content_box')) { ?>

        <div class="container">

            <div class="map-content-box">

                <?php the_field('content'); ?>

            </div><!-- .map-content-box -->

        </div><!-- .container -->
    
    <?php } ?>

</section>