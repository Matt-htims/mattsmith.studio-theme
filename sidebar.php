<!-- begin sidebar -->

<div id="sidebar">
							
	<div class="widgetarea">
	
	<ul id="sidebarwidgeted">
	
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
	
		<li id="recent-posts">
		<h2>Recent Posts</h2>
			<ul>
				<?php get_archives('postbypost', 5); ?>
			</ul>
		</li>
		
	<?php endif; ?>
	
	</ul>
	
	</div>
	
</div>

<!-- end sidebar -->
