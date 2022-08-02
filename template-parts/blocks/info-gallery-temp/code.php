<?php

/**
 * Picture / Text Repeater Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

 ?>

<?php if( have_rows('rows') ): ?>

	<div id="<?php echo esc_attr( $block['anchor'] ); ?>" class="igt-wrap">
        <?php if(get_field('title')) { ?>
            
            <h2><?php the_field('title'); ?></h2>

        <?php } ?>
        
        <div class="igt-content">
		    
            <?php while ( have_rows('rows') ) : the_row(); ?>

            <a target="_blank" href="<?php the_sub_field('row_link')?>">

                <div class="igt-indiv">
                    
                    <?php if(get_sub_field('image')) { ?>
                                                    
                        <?php $attachment_id = get_sub_field('image');
                        $size = "largeSquare";
                        $image = wp_get_attachment_image_src( $attachment_id, $size ); ?>
                        <img src="<?php echo $image[0]; ?>" />
                    
                    <?php } ?>
                        
                    <div class="igt-text">
                    
                        <h3><?php the_sub_field('row_title'); ?></h3>

                        <p><?php the_sub_field('row_copy'); ?></p>
                
                    </div><!-- .pic-text-text -->
		    	
                </div>

            </a>

		    <?php endwhile; ?>
		
        </div><!-- .pic-text -->

	</div><!-- .pic-text-wrap -->

<?php else : endif; ?>