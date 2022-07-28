<div class="post-grid-pod">

    <div class="post-grid-pod-inner">

        <div class="post-grid-pod-image-wrap">

        	<?php if(get_field('image')) { ?>
        		        			    	
        		<?php $attachment_id = get_field('image');
        		$size = "full";
        		$image = wp_get_attachment_image_src( $attachment_id, $size ); ?>

        		<div class="post-grid-pod-image" style="background-image: url('<?php echo $image[0]; ?>');">
            	</div><!-- .post-grid-pod-image -->
        	
        	<?php } else { ?>
        		
        		<div class="post-grid-pod-image" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>');">
            	</div><!-- .post-grid-pod-image -->	
            
            <?php } ?>
            
        </div><!-- .post-grid-pod-image-wrap -->
    
        <div class="post-grid-pod-text">

            <div class="post-grid-pod-text-top">
            
                <div class="post-grid-pod-text-title">

                    <?php echo get_the_title(); ?>

                    <?php if(get_field('position')) { ?>
                    
                    	<span><?php the_field('position'); ?></span>
                    
                    <?php } ?>

                </div>

                <div class="post-grid-pod-link-icon">
                </div><!-- .post-grid-pod-link-icon -->
                
            </div><!-- .post-grid-pod-text-top -->

            <?php if('post' == get_post_type()) { ?>

                <div class="post-grid-pod-text-bottom">
                
                    <?php the_time('F j, Y'); ?>
                    
                </div><!-- .post-grid-pod-text-bottom -->

            <?php } ?>
        
            
            
        </div><!-- .post-grid-pod-text -->

    </div><!-- .post-grid-pod-inner -->

    <a class="block-link" href="<?php the_permalink(); ?>"></a>
    
</div><!-- .post-grid-pod -->