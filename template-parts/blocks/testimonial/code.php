<?php

/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'testimonial-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'testimonial';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$rand = rand(1, 9999);

?>

<?php $posts = get_field('testimonials'); if( $posts ): $t = 1; ?>

    <section id="<?php echo $id; ?>" class="section-bg-offwhite full-width <?php echo esc_attr($classes); ?>">


        <div class="container">

            <div class="testimonial-wrap testimonial-wrap-<?php echo $rand; ?> unloaded">

                <?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>

                    <div class="testimonial-pod">

                        <div class="testimonial-text-inner">

                            <?php if(get_field('testimonial_image', $p->ID)) { ?>

                                <div class="testimonial-pod-image">
                                                            
                                    <?php $attachment_id = get_field('testimonial_image', $p->ID);
                                    $size = "thumbnail";
                                    $image = wp_get_attachment_image_src( $attachment_id, $size ); ?>
                                    <img src="<?php echo $image[0]; ?>" />

                                    <div class="image-circle image-circle-green">
                                        <?php include(TEMPLATEPATH."/includes/svg/image-circle.php");?>
                                    </div><!-- .image-circle image-circle-green -->

                            </div><!-- .testimonial-pod-image -->
                            
                            <?php } ?>
                        
                            <div class="testimonial-pod-text">

                                <div class="testimonial-pod-text-title">
                                
                                    <?php the_field('testimonial_title', $p->ID); ?>
                                    
                                </div><!-- .testimonial-pod-text-title -->

                                <div class="testimonial-pod-text-testimonial">
                                
                                    <?php the_field('testimonial', $p->ID); ?>
                                    
                                </div><!-- .testimonial-pod-text-testimonial -->
                            
                                

                                <div class="testimonial-pod-author">
                                
                                    <?php the_field('name', $p->ID); ?>

                                    <span class="testimonial-pod-author-position small-text"><?php the_field('position', $p->ID); ?></span>
                                    
                                </div><!-- .testimonial-pod-authoer -->
                                
                            </div><!-- .testimonial-pod-text -->
                            
                        </div><!-- .testimonial-text-inner -->
                        
                    </div><!-- .testimonial-pod -->
                
                <?php $t++; endforeach; ?>
                
            </div><!-- .testimonial-wrap -->
            
        </div><!-- .container -->


    </section>

    <script type="text/javascript">
    
    jQuery( document ).ready(function($) {

        $('.testimonial-wrap-<?php echo $rand; ?>').removeClass('unloaded');

        var $slickElement = $('.testimonial-wrap-<?php echo $rand; ?>');

        $slickElement.slick({
            fade: true,
            arrows: false,
            dots: true,
            infinite: false,
            speed: 500,
            autoplay: true,
            autoplaySpeed: 8000,
            adaptiveHeight: true,
            slidesToShow: 1,
            slidesToScroll: 1
        });
    
    });
    
    </script>
    
<?php endif; ?>