<?php

/**
 * Client Logos Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'client-logos-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'client-logos';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$rand = rand(1, 9999);

?>


<section class="client-logos section-bg-white full-width">


    <div class="container">

        <div class="section-header">

            <div class="section-header-left">
            
                <h2><?php the_field('title'); ?></h2>

                <?php if(get_field('text')) { ?>
                
                    <?php the_field('text'); ?>
                
                <?php } ?>
                
            </div><!-- .section-header-left-->

            <?php 
            $link = get_field('link');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>

                <div class="section-header-right">
                
                    <div class="button-wrapper">
                
                        <a class="button button-small button-black" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        
                    </div><!-- .line-link-wrapper -->
                    
                </div><!-- .section-header-right -->

            <?php endif; ?>
            
        </div><!-- .section-header -->
        
    </div><!-- .container -->


    <div class="client-logo-wrap client-logos-<?php echo $rand; ?> unloaded">
    
        <?php $posts = get_field('partner_logos'); if( $posts ): ?>
        
        <?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>
            

            <div class="client-pod <?php if(get_field('link', $p->ID)) { ?>client-pod-hoverable<?php } ?>">

                <?php /* if(get_field('link', $p->ID)) { ?><a href="<?php the_field('link', $p->ID); ?>" target="_blank"><?php } */ ?>
                                                
                    <?php $attachment_id = get_field('logo', $p->ID);
                    $size = "full";
                    $image = wp_get_attachment_image_src( $attachment_id, $size ); ?>
                    <img src="<?php echo $image[0]; ?>" />

                <?php /* if(get_field('link', $p->ID)) { ?></a><?php } */ ?>

                <?php if(get_field('link', $p->ID)) { ?>
                
                    <a href="<?php the_field('link', $p->ID); ?>" target="_blank" class="block-link"></a>
                
                <?php } ?>
                
            </div><!-- .client-pod -->
                
            
        <?php endforeach; ?>
        
    <?php endif; ?>
        
    </div><!-- .client-logo-wrap -->

  
</section><!-- .client-logos -->


<script type="text/javascript">

jQuery( document ).ready(function($) {

    $('.client-logos-<?php echo $rand; ?>').removeClass('unloaded');

    var width = $( document ).width();
    var num = (width / 300);
    var numUse = Math.floor(num);
    if (numUse < 2) {
        numUse = 2;
    }
    //console.log(numUse);

    $('.client-logos-<?php echo $rand; ?>').slick({
        arrows: false,
        dots: false,
        infinite: true,
        speed: 10000,
        autoplay: true,
        autoplaySpeed: 0,
        slidesToShow: numUse,
        slidesToScroll: 1,
        cssEase: 'linear',
        centerMode: true
    });

});

</script>