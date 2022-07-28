<div class="mobile-menu">

	<div class="mobile-menu-cover">
	</div>
	
	<div class="container">

		<div class="mobile-menu-wrap">
		
			<div class="mobile-menu-header">
			
				<div class="mobile-menu-header-left">
				
					<a href="<?php echo get_settings('home'); ?>/"><img src="<?php bloginfo('template_url'); ?>/images/logo-white.png" width="244" height="50" /></a>
					
				</div><!-- .mobile-menu-header-left -->
			
				<div class="mobile-menu-header-right">
				
					<a class="white mm-close"><?php include(TEMPLATEPATH."/includes/svg/close-white.php");?></a>
					
				</div><!-- .mobile-menu-header-right -->
				
			</div><!-- .mobile-menu-header -->

			<div class="mobile-menu-body">

				<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
				
			</div><!-- .mobile-menu-body -->
			
		</div><!-- .mobile-menu-wrap -->
	
	</div><!-- .container -->

</div>