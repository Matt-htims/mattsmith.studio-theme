<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="distribution" content="global" />
<meta name="robots" content="follow, all" />
<meta name="language" content="en, sv" />
<meta name="viewport" content="width=device-width">

<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<!-- leave this for stats please -->

<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_get_archives('type=monthly&format=link'); ?>

<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>-->

<?php wp_head(); ?>

</head>

<?php if(get_field('light_header')/* || 'work' == get_post_type()*/) {

    $bodyClass = $bodyClass . " light-header";

} ?>

<?php if(get_field('no_header_rescue')) {

    $bodyClass = $bodyClass . " no-header-rescue";

} ?>

<?php if(get_field('no_footer_rescue')) {

    $bodyClass = $bodyClass . " no-footer-rescue";

} ?>

<?php /* if('work' == get_post_type()) { ?>
    <script type="text/javascript">
    
    jQuery( document ).ready(function($) {
    
        $('li.menu-item-370').addClass('current-menu-ancestor');
    
    });
    
    </script>
<?php } */ ?>

<?php
global $post;
$postType = $post->post_type;
$postSlug = $post->post_name;
?>

<body class="<?php echo $bodyClass; ?> post-type-<?php echo $postType; ?> <?php echo $postType . '-' . $postSlug; ?>">

<div id="header-fixer" class="header-fixer">
</div><!-- .header-fixer -->

<div id="fullheight-fixer" class="fullheight-fixer">
</div><!-- .header-fixer -->


<div class="body-area-wrap">


<div class="body-area">


<div id="header" class="header">

    <div class="header-main">

        <div class="container">

            <div class="header-wrap">
            
                <div class="header-left">

                    <div class="logo-dark">
                    
                        <a href="<?php echo get_settings('home'); ?>/"><p class='main-link'>Matt Smith</p></a>
                        
                    </div>

                    <div class="logo-light">
                    
                        <a href="<?php echo get_settings('home'); ?>/"><p class='main-link'>Matt Smith</p></a>
                        
                    </div><!-- .logo-light -->
                    
                </div><!-- .header-left -->

                <div class="header-right">

                    <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>

                    <button>Work with me</button>

                        <?php /*
                        <div class="hamburger">
                            <span class="hamburger__top-bun"></span>
                            <span class="hamburger__bottom-bun"></span>
                        </div>
                        */ ?>

                    </a>
                    
                </div><!-- .header-right -->

            </div><!-- .header-wrap -->
            
        </div><!-- .container -->
        
    </div><!-- .header-main -->

</div><!-- .header -->

<div class="header-rescue">
</div><!-- .header-rescue -->