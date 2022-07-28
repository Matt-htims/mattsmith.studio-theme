<?php

/**
 * Sticky Side Title Repeater Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'sticky-side-title-' . $block['id'];
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

$rand = rand(1,9999);

?>


<?php if( have_rows('content_repeater') ): $n = 1; ?>

	<div class="sticky-side-title-outer sticky-side-title-<?php echo $rand; ?> full-width <?php if(get_field('large_subtitles')) { ?>sticky-side-large-titles<?php } ?> <?php if(get_field('remove_top_padding_on_text')) { ?>sticky-side-text-no-pad<?php } ?> <?php if(get_field('narrow_left_column')) { ?>sticky-side-narrow-left<?php } ?> <?php if(get_field('prevent_stickiness')) { ?>no-stickiness<?php } ?>">

		<?php while ( have_rows('content_repeater') ) : the_row(); ?>

			<div class="sticky-side-title-wrap sticky-side-title-<?php echo $rand; ?>-<?php echo $n; ?>">

				<div class="container">

					<div class="sticky-side-title-inner">
				
						<div class="side-title">

							<div class="side-title-inner">
							
								<span class="above-text"><?php the_sub_field('pre-title'); ?></span>

								<h2 class="no-mar"><?php the_sub_field('subtitle'); ?></h2>
								
							</div><!-- .side-title-inner -->
							
						</div><!-- .side-title -->

						<div class="side-title-text">

							<?php the_sub_field('text'); ?>
							
						</div><!-- .side-title-text -->
						
					</div><!-- .sticky-side-title-inner -->

				</div><!-- .container -->

				<script type="text/javascript">
				
				jQuery( document ).ready(function($) {
				
					
				
				});
				
				</script>

				<div class="sticky-side-title-release sticky-side-title-<?php echo $rand; ?>-<?php echo $n; ?>-release">
				</div><!-- .sticky-side-title-release -->
					
			</div><!-- .sticky-side-title-wrap -->

		<?php $n++; endwhile; ?>
		
	</div><!-- .sticky-side-title-outer  -->

<?php else : endif; ?>
