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



<?php if(get_field('page_intro_style') == 'background-image') { ?>

    <?php if(get_field('image')) { ?>
                                
        <?php $attachment_id = get_field('image');
        $size = "full";
        $image = wp_get_attachment_image_src( $attachment_id, $size );
        $imageUse = $image[0]; ?>

    <?php } else { ?>

        <?php $imageUse = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>

    <?php } ?>

    <section class="page-intro full-width page-intro-style-<?php the_field('page_intro_style'); ?> <?php echo $className; ?>" style="background-image: url('<?php echo $imageUse; ?>');">

        <div class="page-intro-background-image-overlay">
        </div><!-- .page-intro-background-image-overlay -->

<?php } else { ?>

    <section class="page-intro full-width page-intro-style-<?php the_field('page_intro_style'); ?> <?php echo $className; ?>">

        <div class="page-intro-background-pattern">
        </div><!-- .page-intro-background-pattern -->

        <div class="page-intro-background-pattern-overlay">
        </div><!-- .page-intro-background-pattern-overlay -->

<?php } ?>

    <div class="container">

        <div class="page-intro-wrap">

            <?php if(get_field('page_intro_style') != 'background-image') { ?>

                <div class="page-intro-image">
                              
                    <?php if(get_field('image')) { ?>
                                
                        <?php $attachment_id = get_field('image');
                        $size = "page-thumb";
                        $image = wp_get_attachment_image_src( $attachment_id, $size );
                        $imageUse = $image[0]; ?>

                    <?php } else { ?>

                        <?php $imageUse = get_the_post_thumbnail_url(get_the_ID(), 'page-thumb'); ?>

                    <?php } ?>

                    <img src="<?php echo $imageUse; ?>" />
                
                </div><!-- .page-intro-image -->
                
            <?php } ?>

            <div class="page-intro-text">

                <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?>

                <h1>
            
                <?php if(get_field('overwrite_title')) { ?>
                
                    <?php the_field('overwrite_title'); ?>
                
                <?php } else { ?>

                    <?php the_title(); ?>

                <?php } ?>

                </h1>

                <?php if(get_field('intro_text')) { ?>
                
                    <?php the_field('intro_text'); ?>
                
                <?php } ?>

                <?php if( have_rows('intro_buttons') ): while ( have_rows('intro_buttons') ) : the_row(); ?>
                
                    <?php 
                    $link = get_sub_field('link');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        
                        <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        
                    <?php endif; ?>
                
                <?php endwhile; else : endif; ?>
                
            </div><!-- .page-intro-text -->

        </div><!-- .page-intro-wrap -->

    </div><!-- .container -->
  
</section><!-- .page-intro -->