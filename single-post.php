<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="container">

    <div class="main-content">

    	<div class="single-hero full-width <?php if('post' == get_post_type()) { ?>single-hero-blue<?php } ?>">

    		<div class="single-hero-image" style="background-image: url('<?php echo get_the_post_thumbnail_url($p->ID, 'full'); ?>'); background-position: center <?php the_field('background_vertical_position'); ?>%;">
    		</div><!-- .single-hero-image -->
    	
    		<div class="container">

    			<div class="main-content">

    				<div class="single-hero-text">

						<div class="single-meta">
							<?php if('post' == get_post_type()) { ?>
								<span class="single-meta-type">
									News & Insights
								</span>
								<span class="single-meta-date"><?php the_time('j F Y'); ?></span>
							<?php } elseif('story' == get_post_type()) { ?>
								<span class="single-meta-type">
									Success Stories
								</span>
							<?php } ?>
						</div>
    				
						<h1 class="as-h2"><?php the_title(); ?></h1>
    					
    				</div><!-- .single-hero-text -->
		
				</div><!-- .main-content -->

			</div><!-- .container -->
    		
    	</div><!-- .single-hero -->

		<?php the_content(__('[Read more]'));?>
		
	</div><!-- .main-content -->

</div><!-- .container -->

<?php endwhile; else: endif; ?>

<!-- The main column ends  -->

<?php get_footer(); ?>