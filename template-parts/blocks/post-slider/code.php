<?php

/**
 * Post Slider Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'post-slider-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'post-slider';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$rand = rand(1, 9999);

$bg = get_field('background');
$thumbnailStyle = get_field('thumbnail_style');

?>

<?php $posts = get_field('post_linker'); if( $posts ): $t = 1; ?>

    <section id="<?php echo $id; ?>" class="section-bg-<?php echo $bg; ?> full-width section-reduced-padding <?php echo esc_attr($classes); ?>">


        <div class="container">

            <div class="section-header">

                <div class="section-header-left">
                
                    <h2><?php the_field('title'); ?></h2>

                    <?php if(get_field('text')) { ?>
                    
                        <?php the_field('text'); ?>
                    
                    <?php } ?>
                    
                </div><!-- .section-header-left -->

                <div class="section-header-right">

                    <div class="slick-custom-arrows">
                    
                        <a class="slick-custom-prev"></a>
                        <a class="slick-custom-next"></a>
                        
                    </div><!-- .slick-custom-arrows -->

                    <?php 
                    $link = get_field('link');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                
                    <div class="button-wrapper">
                
                        <a class="button button-small button-black" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        
                    </div><!-- .line-link-wrapper -->

                    <?php endif; ?>
                    
                </div><!-- .section-header-right -->
                
            </div><!-- .section-header -->
            
        </div><!-- .container -->


        <div class="post-grid-container">

            <div class="post-slider-wrap post-slider-wrap-<?php echo $rand; ?> thumbnail-style-<?php echo $thumbnailStyle; ?> unloaded">

                <?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>

                    <div class="post-grid-pod">

                        <div class="post-grid-pod-inner">

                            <div class="post-grid-pod-image-wrap">
                            
                                <div class="post-grid-pod-image" style="background-image: url('<?php echo get_the_post_thumbnail_url($p->ID, 'large'); ?>');">
                                </div><!-- .post-grid-pod-image -->
                                
                            </div><!-- .post-grid-pod-image-wrap -->
                        
                            <div class="post-grid-pod-text">

                                <div class="post-grid-pod-text-top">
                                
                                    <div class="post-grid-pod-text-title">
                                        <?php echo get_the_title($p->ID); ?>
                                    </div>

                                    <div class="post-grid-pod-link-icon">
                                    </div><!-- .post-grid-pod-link-icon -->
                                    
                                </div><!-- .post-grid-pod-text-top -->

                                <?php if('post' == get_post_type($p->ID)) { ?>

                                    <div class="post-grid-pod-text-bottom">
                                    
                                        <?php the_time('F j, Y'); ?>
                                        
                                    </div><!-- .post-grid-pod-text-bottom -->

                                <?php } ?>
                            
                                
                                
                            </div><!-- .post-grid-pod-text -->

                            
                            
                        </div><!-- .post-grid-pod-inner -->

                        <a class="block-link" href="<?php the_permalink($p->ID); ?>"></a>
                        
                    </div><!-- .post-grid-pod -->
                
                <?php $t++; endforeach; ?>
                
            </div><!-- .post-grid-wrap -->
            
        </div><!-- .post-grid-container -->


    </section>

    <script type="text/javascript">
    
    jQuery( document ).ready(function($) {

        $('.post-slider-wrap-<?php echo $rand; ?>').removeClass('unloaded');

        var $slickElement = $('.post-slider-wrap-<?php echo $rand; ?>');

        $slickElement.slick({
            arrows: true,
            nextArrow: '.slick-custom-next',
            prevArrow: '.slick-custom-prev',
            dots: false,
            infinite: false,
            speed: 500,
            autoplay: false,
            //autoplaySpeed: 5000,
            adaptiveHeight: false,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [
            {
              breakpoint: 1250,
              settings: {
                slidesToShow: 2
              }
            },
            {
              breakpoint: 820,
              settings: {
                slidesToShow: 1
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
            ]
        });
    
    });
    
    </script>
    
<?php endif; ?>