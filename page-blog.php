<?php
/*
Template Name: Blog Page
*/
?>

<?php get_header(); ?>

<div class="container">

    <div class="main-content">
		

		<div class="main-text">
		
			<?php $page = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts("showposts=5&paged=$page"); while ( have_posts() ) : the_post() ?>
		
				<?php include(TEMPLATEPATH."/includes/loop-post.php");?>
			
			<?php endwhile; ?>
		
			<p><?php posts_nav_link(); ?></p>

		</div><!-- .main-text -->
		

	</div><!-- .main-content -->

</div><!-- .container -->

<!-- The main column ends  -->

<?php get_footer(); ?>