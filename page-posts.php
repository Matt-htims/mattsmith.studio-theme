<?php /* Template Name: Posts Page */ ?>

<?php get_header(); ?>

<div class="container">

    <div class="main-content">


    	<?php include(TEMPLATEPATH."/template-parts/blocks/page-intro/code.php");?>


    	<div class="filter-bar full-width">
    	
    		<div class="container">

		        <div class="main-content">

		        	<div class="filter-wrap">

		        		<?php /*<span class="facet-all" onclick="FWP.reset()">All</span>*/ ?>
		        	
		        		<?php if(get_field('post_type') == 'post') {

		        			echo do_shortcode('[facetwp facet="post_categories"]');

		        		} elseif(get_field('post_type') == 'story') {

		        			echo do_shortcode('[facetwp facet="story_categories"]');

		        		} elseif(get_field('post_type') == 'team') {

		        			echo do_shortcode('[facetwp facet="team_categories"]');

		        		} ?>
		        		
		        	</div><!-- .filter-wrap -->

		        </div><!-- .main-content -->

		    </div><!-- .container -->
    		
    	</div><!-- .filter-bar -->


	    <section class="section-bg-white full-width section-reduced-padding ">

	    	<div class="spacer spacer-small">
	    	</div><!-- .spacer spacer-small -->

	        <div class="post-grid-container">

	            <div class="container">

	                <div class="post-grid-wrap post-grid-wrap-<?php echo $rand; ?> post-grid-wrap-<?php the_field('post_type'); ?> thumbnail-style-<?php echo $thumbnailStyle; ?>">

	                	<?php /* if(get_field('post_type') == 'post') { ?>

		        			<?php echo do_shortcode( '[facetwp template="post_template"]' ); ?>

		        		<?php } else { ?>

		                	<?php
		                	$type = get_field('post_type');
		                	$args=array(
		                		'post_type' => $type,
		                		'post_status' => 'publish',
		                		'paged' => $paged,
		                		'posts_per_page' => 12,
	    						'facetwp' => true
		                		);
		                	query_posts( $args );
		                	if ( have_posts() ): $num = 0;  while ( have_posts() ) : the_post(); ?>
		                	
		                		<?php include(TEMPLATEPATH."/includes/post-grid-pod.php");?>
		                	    
		                	<?php endwhile; $num++; else : endif; ?>

		                <?php } */ ?>

		                	<?php
		                	$type = get_field('post_type');
		                	$postNum = get_field('posts_per_page');
		                	$args=array(
		                		'post_type' => $type,
		                		'post_status' => 'publish',
		                		'paged' => $paged,
		                		'posts_per_page' => $postNum,
	    						'facetwp' => true
		                		);
		                	query_posts( $args );
		                	if ( have_posts() ): $num = 0;  while ( have_posts() ) : the_post(); ?>
		                	
		                		<?php include(TEMPLATEPATH."/includes/post-grid-pod.php");?>
		                	    
		                	<?php endwhile; $num++; else : endif; ?>




	                    
	                </div><!-- .post-grid-wrap -->


		            <div class="section-footer">

		                <div class="section-footer-left">
		                
		                    <span class="paging-info paging-info-<?php echo $rand; ?>">

		                    	<?php global $wp_query;
								$totPages = $wp_query->max_num_pages;
								$current_page = get_query_var( 'paged' );
								if($current_page == 0) {
									$current_page = 1;
								}

								if($totPages > 1) { ?>

			                    	<span class="paging-current"><?php echo $current_page; ?></span><span class="paging-split"></span><span class="paging-total"><?php echo $totPages; ?></span>

			                    <?php } ?>

		                    </span>
		                    
		                </div><!-- .section-footer-left -->

		                <div class="section-footer-right">

		                    <div class="slick-custom-arrows">

		                    	<?php if( get_previous_posts_link() ) {
								    previous_posts_link( '« Newer Entries' );
								} else { ?>
									<a class="no-link slick-custom-prev"></a>
								<?php } ?>

								<?php if( get_next_posts_link() ) {
								    next_posts_link( '« Newer Entries' );
								} else { ?>
									<a class="no-link slick-custom-next"></a>
								<?php } ?>
		                        
		                    </div><!-- .slick-custom-arrows -->
		                    
		                </div><!-- .section-footer-right -->
		                
		            </div><!-- .section-footer -->


		            <?php wp_reset_query(); ?>


	            </div><!-- .container -->
	            
	        </div><!-- .post-grid-container -->


	    </section>
		

	</div><!-- .main-content -->

</div><!-- .container -->

<!-- The main column ends  -->

<?php get_footer(); ?>