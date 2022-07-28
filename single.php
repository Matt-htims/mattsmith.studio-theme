<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="container">

    <div class="main-content">
		
		
		<h1><?php the_title(); ?></h1>

		<div class="date">
			<p><?php the_time('j F Y'); ?></p>
		</div>

		<?php the_content(__('[Read more]'));?>
		
		<div class="postmeta">
			<p>Filed Under <?php the_category(', ') ?><br />Tagged: <?php the_tags('') ?></p>
		</div>
		

	</div><!-- .main-content -->

</div><!-- .container -->

<?php endwhile; else: endif; ?>

<!-- The main column ends  -->

<?php get_footer(); ?>