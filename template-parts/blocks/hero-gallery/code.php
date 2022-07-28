<?php

/**
 * Hero Gallery Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'hero-gallery-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'hero-gallery';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

?>

<?php

if(get_field('reduced_height') == 1) {
    $rh = 1;
} else {
    $rh = 0;
}

if(get_field('include_text_over_images') == 1) {
    $toi = 1;
} else {
    $toi = 0;
}

if(get_field('subtitle_per_slide') == 1) {
    $sps = 1;
} else {
    $sps = 0;
}

if(get_field('link_per_slide') == 1) {
    $lps = 1;
} else {
    $lps = 0;
} ?>


<div class="hero-image-wrap full-width <?php if($rh == 1) { ?>hero-image-reduced<?php } ?>">

    <?php if($toi == 0) { ?>

        <div class="hero-image-gallery">

            <?php while ( have_rows('gallery') ) : the_row(); ?>
                                                
                <?php $attachment_id = get_sub_field('gallery_image');
                $size = "full";
                $image = wp_get_attachment_image_src( $attachment_id, $size ); ?>

                <div class="hero-image" style="background-image:url(<?php echo $image[0]; ?>); background-position: center <?php the_sub_field('background_vertical_position'); ?>%;">
                </div>

            <?php endwhile; ?>
            
        </div><!-- .hero-image-gallery -->

    <?php } else { ?>

        <?php if($lps == 0) { ?>
        
            <?php 
            $link = get_field('link');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                endif; ?>
        
        <?php } ?>

        <div class="hero-image-gallery">

            <?php while ( have_rows('gallery') ) : the_row(); ?>
                                                
                <?php $attachment_id = get_sub_field('gallery_image');
                $size = "full";
                $image = wp_get_attachment_image_src( $attachment_id, $size ); ?>

                <div class="hero-image" style="background-image:url(<?php echo $image[0]; ?>); background-position: center <?php the_sub_field('background_vertical_position'); ?>%;">

                    <div class="hero-image-cover">
                    </div><!-- .hero-image-cover -->

                    <?php if($lps == 1) { ?>

                        <?php 
                        $link = get_sub_field('link');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            endif; ?>

                    <?php } ?>

                    <?php if($sps == 1) { ?>

                        <div class="hero-image-subtitle-wrap">
        
                            <div class="container">
                            
                                <div class="hero-image-subtitle fader from-bottom">
                        
                                    <span class="as-h1 swipe swipe-black"><?php the_sub_field('subtitle'); ?></span>

                                    <?php if($lps == 1) { ?>

                                        <?php if(get_sub_field('link')) { ?>
                                        
                                            <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                        
                                        <?php } ?>
                        
                                    <?php } elseif($lps == 0) { ?>

                                        <?php if(get_field('link')) { ?>

                                            <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>

                                        <?php } ?>

                                    <?php } ?>
                                    
                                </div><!-- .hero-image-subtitle -->
                                
                            </div><!-- .container -->
                            
                        </div><!-- .hero-image-subtitle-wrap -->

                    <?php } ?>

                </div>

            <?php endwhile; ?>
            
        </div><!-- .hero-image-gallery -->

        <?php if($sps == 0) { ?>

            <div class="hero-image-subtitle-wrap">

                <div class="hero-image-text">
                
                    <span class="as-h1 swipe swipe-black"><?php the_field('subtitle'); ?></span>

                    <?php if(get_field('link')) { ?>
                    
                        <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    
                    <?php } ?>
                    
                </div><!-- .hero-image-text -->
                
            </div><!-- .hero-image-subtitle-wrap -->

        <?php } ?>
    
    <?php } ?>

    <script type="text/javascript">
    
    jQuery( document ).ready(function($) {
    
        $('.hero-image-gallery').slick({
          arrows: false,
          dots: true,
          infinite: true,
          speed: 2000,
          fade: true,
          autoplay: true,
          autoplaySpeed: 5500
        });
    
    });
    
    </script>

</div><!-- .hero-image-wrap -->

