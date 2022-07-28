<?php

/**
 * Stats Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'stats-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'stats';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

?>

<?php $count = count(get_field('stats')); ?>


<section class="full-width">
    
    <div class="container">

        <div class="main-content">

            <div class="stat-wrap stat-wrap-<?php echo $count; ?>">

                <?php if( have_rows('stats') ): while ( have_rows('stats') ) : the_row(); ?>
                
                    <div class="stat-pod">

                        <?php if(get_sub_field('icon')) { ?>

                            <div class="stat-icon">
                            
                                <?php $attachment_id = get_sub_field('icon');
                                $size = "full";
                                $image = wp_get_attachment_image_src( $attachment_id, $size ); ?>
                                <img src="<?php echo $image[0]; ?>" />
                                
                            </div><!-- .stat-icon -->
                        
                        <?php } ?>
                    
                        <?php if(!get_sub_field('label_below_stat')) { ?>

                            <div class="stat-label">
                            
                                <?php the_sub_field('label'); ?>
                                
                            </div><!-- .stat-label -->
                        
                        <?php } ?>
                    
                        <div class="stat-stat">
                        
                            <?php the_sub_field('stat'); ?>
                            
                        </div><!-- .stat-stat -->
                    
                        <?php if(get_sub_field('label_below_stat')) { ?>

                            <div class="stat-label stat-label-large">
                            
                                <?php the_sub_field('label'); ?>
                                
                            </div><!-- .stat-label -->
                        
                        <?php } ?>

                        <?php if(get_sub_field('text')) { ?>
                    
                            <div class="stat-text">
                            
                                <?php the_sub_field('text'); ?>
                                
                            </div><!-- .stat-text -->
                        
                        <?php } ?>

                        <?php if(get_sub_field('link')) { ?>
                        
                            <a href="<?php the_sub_field('link'); ?>" class="block-link"></a>
                        
                        <?php } ?>
                        
                    </div><!-- .stat-pod -->
                
                <?php endwhile; else : endif; ?>
                
            </div><!-- .stat-wrap -->

        </div><!-- .main-content -->

    </div><!-- .container -->

</section>