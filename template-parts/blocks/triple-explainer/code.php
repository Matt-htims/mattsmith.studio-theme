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

	<div class="te-wrap">
        <?php if(get_field('title')) { ?>
            
            <h2><?php the_field('title'); ?></h2>

        <?php } ?>
        
        <div class="te-text">
		    
            <?php while ( have_rows('rows') ) : the_row(); ?>

                <div class="te-text-outer">
		    
                    <div class="te-text-image">
                    
                        <?php if(get_sub_field('image')) { ?>
                                                        
                            <?php $attachment_id = get_sub_field('image');
                            $size = "largeSquare";
                            $image = wp_get_attachment_image_src( $attachment_id, $size ); ?>
                            <img src="<?php echo $image[0]; ?>" />
                        
                        <?php } ?>
                        
                    </div>

                    <div class="te-text-text">
                    
                        <h3><?php the_sub_field('row_title'); ?></h3>

                        <p class="te-text-main"><?php the_sub_field('row_copy'); ?></p>
                        <div class="">

                            <p class="te-text-sub"><?php the_sub_field('row_bottom') ?></p>
                        
                            <p class="te-text-sub-2"><?php the_sub_field('row_bottom_2') ?></p>
                        
                        </div>
                    </div><!-- .pic-text-text -->
		    	
		        </div>

		    <?php endwhile; ?>
		
        </div><!-- .pic-text -->

	</div><!-- .pic-text-wrap -->

<?php else : endif; ?>