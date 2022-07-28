<?php

/**
 * FAQs Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'faqs-' . $block['id'];
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



<?php if( have_rows('faqs') ): $f = 1; ?>

	<div class="faqs-wrap">

		<?php while ( have_rows('faqs') ) : the_row(); ?>

		    <div class="faq f-<?php echo $f; ?>">
		    
		    	<div class="faq-header">

		    		<div class="fh-name as-h3">
		    		
		    			<?php the_sub_field('question'); ?>
		    			
		    		</div><!-- .fh-name -->
		    	
		    		<div class="fh-arrow">
		    		
		    			<img class="circle-plus" src="<?php bloginfo('template_url'); ?>/images/circle-plus.png" width="20" height="20" />
		    			<img class="circle-minus" src="<?php bloginfo('template_url'); ?>/images/circle-minus.png" width="20" height="20" />
		    			
		    		</div><!-- .fh-arrow -->
		    		
		    	</div><!-- .faq-header -->

		    	<div class="faq-body">
		    	
		    		<?php the_sub_field('answer'); ?>
		    		
		    	</div><!-- .faq-body -->

		    	<script type="text/javascript">
		    	
		    	jQuery( document ).ready(function($) {
		    	
		    		$( '.f-<?php echo $f; ?>' ).click(function() {
		    		
		    		    $( '.faq' ).not( this ).find( '.faq-body' ).slideUp(200);
		    		    $( this ).find( '.faq-body' ).slideToggle(200);

		    		    $( '.faq' ).not( this ).removeClass('faq-on');
		    		    $( this ).toggleClass('faq-on');
		    		
		    		});
		    	
		    	});
		    	
		    	</script>
		    	
		    </div><!-- .faq -->

		<?php $f++; endwhile; ?>
		
	</div><!-- .pic-text-wrap -->

<?php else : endif; ?>