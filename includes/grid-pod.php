<div class="grid-pod grid-pod-<?php echo $gridPodColor; ?> <?php /*inner-fader-<?php echo $g; ?>*/ ?> fader from-bottom">

	<div class="grid-pod-image">

			        			    	
		<?php $attachment_id = get_sub_field('grid_item_image');
		$size = "full";
		$image = wp_get_attachment_image_src( $attachment_id, $size ); ?>

		<img src="<?php echo $image[0]; ?>" />
		
	</div><!-- .grid-pod-image -->

	<div class="grid-pod-text">

		<h3><?php the_sub_field('grid_item_title'); ?></h3>

		<p><?php the_sub_field('grid_item_text'); ?></p>
		
	</div><!-- .grid-pod-text -->
	
</div><!-- .grid-pod -->