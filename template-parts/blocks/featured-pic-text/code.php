<?php

/**
 * Featured Picture / Text Repeater Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'featured-pic-text-' . $block['id'];
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
}

$picSide = get_field('picture_side');
$bg = get_field('background');

?>



<section id="<?php echo $id; ?>" class="section-bg-<?php echo $bg; ?> full-width section-reduced-padding featured-pic-text pic-side-<?php echo $picSide; ?>">

	<?php $attachment_id = get_field('image');
	$size = "largeSquare";
	$image = wp_get_attachment_image_src( $attachment_id, $size ); ?>

	<div class="pic-text-pic" style="background-image: url('<?php echo $image[0]; ?>');">
	</div><!-- .pic-text-pic -->
    
    <div class="container">

        <div class="main-content">

			<div class="pic-text-wrap <?php if(get_field('image_on_the_right')) { ?>pic-text-wrap-switch<?php } ?>">

			    <div class="pic-text">

			    	<div class="pic-text-text">
			    	
			    		<h2><?php the_field('title'); ?></h2>

			    		<?php the_field('text'); ?>

						<div class="button-wrapper">

				    		<?php 
							$link = get_field('apply_link');
							if( $link ): 
							    $link_url = $link['url'];
							    $link_title = $link['title'];
							    $link_target = $link['target'] ? $link['target'] : '_self';
							    ?>
						    
						        <a class="button button-black" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						    
							<?php endif; ?>

				    		<?php 
							$link = get_field('find_out_more_link');
							if( $link ): 
							    $link_url = $link['url'];
							    $link_title = $link['title'];
							    $link_target = $link['target'] ? $link['target'] : '_self';
							    ?>
						    
						        <a class="button button-white-outline" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						    
							<?php endif; ?>
						        
						</div><!-- .button-wrapper -->
			    		
			    	</div><!-- .pic-text-text -->
			    	
			    </div><!-- .pic-text -->
				
			</div><!-- .pic-text-wrap -->

        </div><!-- .main-content -->

    </div><!-- .container -->

</section>