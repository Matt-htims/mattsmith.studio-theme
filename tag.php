<?php get_header(); ?>

<div class="container">

    <div class="main-content">


		<div class="main-text">
		
			<h1><?php echo single_tag_title(); ?></h1>
		
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
				<?php include(TEMPLATEPATH."/includes/loop-post.php");?>
		 			
			<?php endwhile; else: ?>
			
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
			<p><?php posts_nav_link(' &#8212; ', __('&laquo; Previous Page'), __('Next Page &raquo;')); ?></p>

		</div><!-- .main-text -->


	</div><!-- .main-content -->

</div><!-- .container -->

<!-- The main column ends  -->

<?php get_footer(); ?>