<?php

/**
 * Picture / Text Repeater Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'pic-text-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = '';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
} ?>



<?php if( have_rows('rows') ): ?>

	<div class="pic-text-wrap <?php if(get_field('start_with_image_on_the_right')) { ?>pic-text-wrap-switch<?php } ?>">

		<?php while ( have_rows('rows') ) : the_row(); ?>

		    <div class="pic-text">
		    
		    	<div class="pic-text-pic">
		    	
		    		<?php if(get_sub_field('image')) { ?>
		    			        			    	
		    			<?php $attachment_id = get_sub_field('image');
		    			$size = "largeSquare";
		    			$image = wp_get_attachment_image_src( $attachment_id, $size ); ?>
		    			<img src="<?php echo $image[0]; ?>" />
		    		
		    		<?php } ?>
		    		
		    	</div><!-- .pic-text-pic -->

		    	<div class="pic-text-text">
		    	
		    		<h3><?php the_sub_field('title'); ?></h3>

		    		<?php the_sub_field('text'); ?>
		    		
		    	</div><!-- .pic-text-text -->
		    	
		    </div><!-- .pic-text -->

		<?php endwhile; ?>
		
	</div><!-- .pic-text-wrap -->

<?php else : endif; ?>