<?php get_header(); ?>

<div class="container">

    <div class="main-content">


		<div class="main-text">

			<?php if (have_posts()) : ?>
		
				<h1 class="search-title"><span class="pre-bit">Search: </span>"<?php the_search_query(); ?>"</h1>

				<p>The term "<?php the_search_query(); ?>" can be found on the following pages:</p>

				<?php while (have_posts()) : the_post(); ?>

					<div class="padder_30">
					</div>
			
					<?php include(TEMPLATEPATH."/includes/loop-post-excerpt.php");?>

					<div class="padder_30">
					</div>

					<a class="button" href="<?php the_permalink(); ?>">Read more</a>

					<div class="padder_30">
					</div>

					<hr />
			 			
				<?php endwhile; ?>

			<?php else: ?>

				<h1>No search results for "<?php the_search_query(); ?>"</h1>

				<p>Search again:</p>

				<?php get_search_form(); ?>

			<?php endif; ?>

			<p><?php posts_nav_link(' &#8212; ', __('&laquo; Previous Page'), __('Next Page &raquo;')); ?></p>

		</div><!-- .main-text -->


	</div><!-- .main-content -->

</div><!-- .container -->

<div class="padder_50">
</div>

<!-- The main column ends  -->

<?php get_footer(); ?>