<div class="excerpt-pod">

	<div class="single-meta">
		<?php if('post' == get_post_type()) { ?>
			<span class="single-meta-type">
				News & Insights
			</span>
			<span class="single-meta-date"><?php the_time('j F Y'); ?></span>
		<?php } elseif('story' == get_post_type()) { ?>
			<span class="single-meta-type">
				Success Story
			</span>
		<?php } elseif('team' == get_post_type()) { ?>
			<span class="single-meta-type">
				Team Member
			</span>
		<?php } elseif('job' == get_post_type()) { ?>
			<span class="single-meta-type">
				Job Opportunity
			</span>
		<?php } elseif('page' == get_post_type()) { ?>
			<span class="single-meta-type">
				Page
			</span>
		<?php } ?>
	</div>

	<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>

	<?php the_excerpt(__('[Read more]'));?>
	
</div><!-- .excerpt-pod -->