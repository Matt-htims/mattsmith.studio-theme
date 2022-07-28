<h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			
<div class="date">
	<p><?php the_time('j F Y'); ?></p>
</div>

<?php the_content(__('[Read more]'));?><div style="clear:both;"></div>

<div class="postmeta2">
	<p>Filed Under <?php the_category(', ') ?></p>
</div>