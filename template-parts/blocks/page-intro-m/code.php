<?php

/**
 * Page Intro Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'page-intro-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'page-intro';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$rand = rand(1, 9999);


?>

<section>

    <div class="container">

        <div class="m-wrap">

                <div class="m-image">
                              
                    <?php if(get_field('image')) { ?>
                                
                        <?php $attachment_id = get_field('image');
                        $size = "page-thumb";
                        $image = wp_get_attachment_image_src( $attachment_id, $size );
                        $imageUse = $image[0]; ?>

                    <?php } else { ?>

                        <?php $imageUse = get_the_post_thumbnail_url(get_the_ID(), 'page-thumb'); ?>

                    <?php } ?>

                    <img class="blob" src="<?php bloginfo('template_url'); ?>/images/blob.png" alt="">
                   
                    <img class="matt"src="<?php echo $imageUse; ?>" />
                
                </div><!-- .page-intro-image -->

            <div class="m-text">

                <div class="m-text-container">
                
                    <?php if(get_field('title')) { ?>
                    
                        <p class='as-h1'><?php the_field('title'); ?></p>
                    
                    <?php } else { ?>

                        <?php the_title(); ?>

                    <?php } ?>

                    </p>

                    <?php if(get_field('subtitle')) { ?>
                    
                        <h1><?php the_field('subtitle'); ?></h1>
                    
                    <?php } ?>
            
                </div>
                
            </div><!-- .page-intro-text -->

        </div><!-- .page-intro-wrap -->

    </div><!-- .container -->
  
</section><!-- .page-intro -->