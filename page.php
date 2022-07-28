<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="container">

    <div class="main-content">


		<?php the_content(__('[Read more]'));?>


	</div><!-- .main-content -->

</div><!-- .container -->

<?php endwhile; else: endif; ?>

<!-- The main column ends  -->

<?php get_footer(); ?>