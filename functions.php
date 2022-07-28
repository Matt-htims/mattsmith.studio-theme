<?php

function register_my_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_my_menu' );

add_theme_support( 'post-thumbnails' ); 


	add_shortcode('padder_0', 'padder_0');
	function padder_0() {  
    return '<div class="padder_0"></div>';  
}  
	add_shortcode('padder_10', 'padder_10');
	function padder_10() {  
    return '<div class="padder_10"></div>';  
}  
	add_shortcode('padder_20', 'padder_20');
	function padder_20() {  
    return '<div class="padder_20"></div>';  
}  
	add_shortcode('padder_30', 'padder_30');
	function padder_30() {  
    return '<div class="padder_30"></div>';  
}  
	add_shortcode('padder_40', 'padder_40');
	function padder_40() {  
    return '<div class="padder_40"></div>';  
}  
	add_shortcode('padder_50', 'padder_50');
	function padder_50() {  
    return '<div class="padder_50"></div>';  
}  
	add_shortcode('padder_60', 'padder_60');
	function padder_60() {  
    return '<div class="padder_60"></div>';  
}  
	add_shortcode('padder_70', 'padder_70');
	function padder_70() {  
    return '<div class="padder_70"></div>';  
}  
	add_shortcode('padder_80', 'padder_80');
	function padder_80() {  
    return '<div class="padder_80"></div>';  
}  
	add_shortcode('padder_90', 'padder_90');
	function padder_90() {  
    return '<div class="padder_90"></div>';  
}  
	add_shortcode('padder_100', 'padder_100');
	function padder_100() {  
    return '<div class="padder_100"></div>';  
}  



// ENQUEUE CSS

function sw_enqueue_css() {
	
	wp_enqueue_style( 'sw-open', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700', false );
	
	wp_enqueue_style( 'sw_slick-css', get_template_directory_uri() . '/javascript/slick/slick.css' );
	wp_enqueue_style( 'sw_fancybox-css', get_template_directory_uri() . '/javascript/fancybox3/jquery.fancybox.min.css' );
	wp_enqueue_style( 'foundation-css', get_template_directory_uri() . '/sass/app.css' );
        
}

add_action( 'wp_enqueue_scripts', 'sw_enqueue_css' );


// ENQUEUE JAVASCRIPT PLUGINS

add_action( 'wp_enqueue_scripts', 'sw_load_javascript_files' );
function sw_load_javascript_files() {
 
  wp_register_script( 'sw-modernizr', get_template_directory_uri().'/javascript/modernizr.js', array('jquery'), '1.7.2', false );
  wp_register_script( 'sw-fancybox', get_template_directory_uri().'/javascript/fancybox3/jquery.fancybox.min.js', array('jquery'), '1.7.2', false );
  wp_register_script( 'sw-easing', get_template_directory_uri().'/javascript/easing.js', array('jquery'), '1.7.2', false );
  wp_register_script( 'sw-skrollr', get_template_directory_uri().'/javascript/skrollr.js', array('jquery'), '1.7.2', false );
  wp_register_script( 'sw-waypoints', get_template_directory_uri().'/javascript/jquery.waypoints.min.js', array('jquery'), '1.7.2', false );
    wp_register_script( 'sw-cookie', get_template_directory_uri().'/javascript/js.cookie.js', array('jquery'), '1.7.2', true );
  wp_register_script( 'sw-slick', get_template_directory_uri().'/javascript/slick/slick.min.js', array('jquery'), '1.7.2', true );
  wp_register_script( 'sw-gsap', get_template_directory_uri().'/javascript/gsap/gsap.min.js', array('jquery'), '1.7.2', false );
  wp_register_script( 'sw-scrollTrigger', get_template_directory_uri().'/javascript/gsap/ScrollTrigger.min.js', array('jquery'), '1.7.2', false );
  //wp_register_script( 'sw-gsap-splitText', get_template_directory_uri().'/javascript/gsap/SplitText.min.js', array('jquery'), '1.7.2', false );
  //wp_register_script( 'sw-gsap-textPlugin', get_template_directory_uri().'/javascript/gsap/TextPlugin.min.js', array('jquery'), '1.7.2', false );
  
	wp_register_script('sw-custom', get_stylesheet_directory_uri() . '/javascript/site-custom.js', false, null, true);
  
  wp_enqueue_script( 'sw-modernizr' );
  wp_enqueue_script( 'sw-fancybox' );
  wp_enqueue_script( 'sw-easing' );
  wp_enqueue_script( 'sw-skrollr' );
  wp_enqueue_script( 'sw-waypoints' );
  wp_enqueue_script( 'sw-cookie' );
  wp_enqueue_script( 'sw-slick' );
  wp_enqueue_script( 'sw-gsap' );
  wp_enqueue_script( 'sw-scrollTrigger' );
  //wp_enqueue_script( 'sw-gsap-splitText' );
  //wp_enqueue_script( 'sw-gsap-textPlugin' );
    
  wp_enqueue_script('sw-custom'); 
 
}


// ADD CUSTOM IMAGE SIZES

if ( function_exists( 'add_image_size' ) ) { 
	//add_image_size( 'hero', 2200, 1400, true ); //(cropped)
	//add_image_size( 'portraitLarge', 1200, 1800, true ); //(cropped)
}



// CUSOMT OPTIONS PAGES

if( function_exists('acf_add_options_sub_page') )
{
    acf_add_options_sub_page( 'Site Options' );
    acf_add_options_sub_page( 'Social Media' );
    acf_add_options_sub_page( 'Contact Details' );
    acf_add_options_sub_page( 'Notice Banner' );
}



// Disable WordPress Admin Bar for all users but admins
  show_admin_bar(false);
  
  

// Tree

function is_tree($pid) {      // $pid = The ID of the page we're looking for pages underneath
	global $post;         // load details about this page
	if(is_page()&&($post->post_parent==$pid||is_page($pid))) 
               return true;   // we're at the page or at a sub page
	else 
               return false;  // we're elsewhere
};



// Excerpt Read More

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
	return '... <a class="moretag" href="'. get_permalink($post->ID) . '">Read More</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');



// Excerpt Length custom

/*

function custom_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

*/



// Add Video Responsive

	add_shortcode("video", "video");

	function video( $atts, $content = null ) {
		return '<figure class="wp-block-embed-youtube alignwide wp-block-embed is-type-video is-provider-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio" style="transform: translate(0px, 0px); opacity: 1;"><div class="wp-block-embed__wrapper">'. do_shortcode($content) .'</div></figure>';
	}
	


// Login Logo

function my_login_logo() { ?>
    <style type="text/css">
    	body.login {
	    	background: #eeeeee;
	    }
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png);
			width: 230px;
			height: 50px;
			background-size: 230px 50px;
			background-repeat: no-repeat;
        	padding-bottom: 10px;
        }
        body.login .button.button-large {
        	background: red !important;
        	border-color: red !important;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );



function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );



// Remove dashboard widgets
function remove_dashboard_meta() {
	remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_primary', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
	remove_meta_box( 'rg_forms_dashboard', 'dashboard', 'normal');
}
add_action( 'admin_init', 'remove_dashboard_meta' ); 



/**
 * Add a widget to the dashboard.
 *
 * This function is hooked into the 'wp_dashboard_setup' action below.
 */
function wpexplorer_add_dashboard_widgets() {
	wp_add_dashboard_widget(
		'wpexplorer_dashboard_widget', // Widget slug.
		'My Custom Dashboard Widget', // Title.
		'wpexplorer_dashboard_widget_function' // Display function.
	);
}
add_action( 'wp_dashboard_setup', 'wpexplorer_add_dashboard_widgets' );




// Gutenberg Block Style

function my_gutenberg_setup() {
// Support Featured Images
add_theme_support( 'post-thumbnails' );

//Gutenberg
add_theme_support( 'align-wide' );
add_theme_support( 'editor-styles' );
add_theme_support( 'wp-block-styles' );
//add_theme_support( 'dark-editor-style' );
add_theme_support( 'responsive-embeds' );

add_theme_support( 'editor-color-palette', array(
	array(
		'name'  => __( 'Navy', 'duet' ),
		'slug'  => 'navy',
		'color'	=> '#0A1F51',
	),
	array(
		'name'  => __( 'Blue', 'duet' ),
		'slug'  => 'blue',
		'color'	=> '#002C96',
	),
	array(
		'name'  => __( 'Orange', 'duet' ),
		'slug'  => 'orange',
		'color' => '#DB5708',
	),
	array(
		'name'  => __( 'Off-white', 'duet' ),
		'slug'  => 'offwhite',
		'color' => '#EEF0F5',
	),
	array(
		'name'  => __( 'White', 'duet' ),
		'slug'  => 'white',
		'color' => '#ffffff',
	),
) );

}
add_action( 'after_setup_theme', 'my_gutenberg_setup' );




// ACF Blocks

function register_acf_block_types() {

	// register a section block.
	acf_register_block_type(array(
	    'name'              => 'section',
	    'title'             => __('Section'),
	    'description'       => __('A custom section block.'),
	    'render_template'   => '/template-parts/blocks/section/code.php',
	    //'enqueue_style'		=> get_template_directory_uri() . '/template-parts/blocks/section/style.css',
	    'category'          => 'formatting',
	    'icon'              => 'star-filled',
	    'mode'              => 'preview',
	    'keywords'          => array( 'section', 'quote' ),
		'supports'		=> [
			'mode'			=> false,
			'align'			=> true,
			'jsx' 			=> true,
		]
	));

    // register a padding block.
    acf_register_block_type(array(
        'name'              => 'padding',
        'title'             => __('Padding'),
        'description'       => __('A custom padding block.'),
	    	'render_template'   => '/template-parts/blocks/padding/code.php',
	    	//'enqueue_style'		=> get_template_directory_uri() . '/template-parts/blocks/padding/style.css',
        'category'          => 'formatting',
        'icon'              => 'star-filled',
	    	'mode'				=> 'edit',
        'keywords'          => array( 'padding', 'quote' ),
    ));

    // register a line-link block.
    acf_register_block_type(array(
        'name'              => 'line-link',
        'title'             => __('Line Link'),
        'description'       => __('A custom line-link block.'),
        'render_template'   => 'template-parts/blocks/line-link/code.php',
        //'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/line-link/style.css',
        'category'          => 'formatting',
        'icon'              => 'star-filled',
        'mode'              => 'edit',
        'keywords'          => array( 'line-link', 'quote' ),
    ));

    // register a testimonial block.
    acf_register_block_type(array(
        'name'              => 'testimonial',
        'title'             => __('Testimonial'),
        'description'       => __('A custom testimonial block.'),
        'render_template'   => 'template-parts/blocks/testimonial/code.php',
	    //'enqueue_style'		=> get_template_directory_uri() . '/template-parts/blocks/testimonial/style.css',
        'category'          => 'formatting',
        'icon'              => 'star-filled',
        'mode'              => 'edit',
        'keywords'          => array( 'testimonial', 'quote' ),
    ));

    // register a hero-gallery block.
    acf_register_block_type(array(
        'name'              => 'hero-gallery',
        'title'             => __('Hero Gallery'),
        'description'       => __('A custom hero-gallery block.'),
	    'render_template'   => '/template-parts/blocks/hero-gallery/code.php',
	    //'enqueue_style'		=> get_template_directory_uri() . '/template-parts/blocks/hero-gallery/style.css',
        'category'          => 'formatting',
        'icon'              => 'star-filled',
        'mode'              => 'edit',
        'keywords'          => array( 'hero-gallery' ),
    ));

    // register a large-text block.
    acf_register_block_type(array(
        'name'              => 'large-text',
        'title'             => __('Large Text'),
        'description'       => __('A custom large-text block.'),
        'render_template'   => 'template-parts/blocks/large-text/code.php',
	    //'enqueue_style'		=> get_template_directory_uri() . '/template-parts/blocks/large-text/style.css',
        'category'          => 'formatting',
        'icon'              => 'star-filled',
        'mode'              => 'edit',
        'keywords'          => array( 'large-text', 'quote' ),
    ));

    // register a pic-text block.
    acf_register_block_type(array(
        'name'              => 'pic-text',
        'title'             => __('Picture / Text Repeater'),
        'description'       => __('A custom pic-text block.'),
        'render_template'   => 'template-parts/blocks/pic-text/code.php',
	    //'enqueue_style'		=> get_template_directory_uri() . '/template-parts/blocks/pic-text/style.css',
        'category'          => 'formatting',
        'icon'              => 'star-filled',
        'mode'              => 'edit',
        'keywords'          => array( 'pic-text', 'quote' ),
    ));

    // register a client-logos block.
    acf_register_block_type(array(
        'name'              => 'client-logos',
        'title'             => __('Partner Logos'),
        'description'       => __('A custom client-logos block.'),
        'render_template'   => 'template-parts/blocks/client-logos/code.php',
        //'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/client-logos/style.css',
        'category'          => 'formatting',
        'icon'              => 'star-filled',
        'mode'              => 'edit',
        'keywords'          => array( 'client-logos', 'quote' ),
    ));

    // register a faqs block.
    acf_register_block_type(array(
        'name'              => 'faqs',
        'title'             => __('FAQs'),
        'description'       => __('A custom faqs block.'),
        'render_template'   => 'template-parts/blocks/faqs/code.php',
	    //'enqueue_style'		=> get_template_directory_uri() . '/template-parts/blocks/faqs/style.css',
        'category'          => 'formatting',
        'icon'              => 'star-filled',
        'mode'              => 'edit',
        'keywords'          => array( 'faqs', 'quote' ),
    ));

    // register a sticky-side-title block.
    acf_register_block_type(array(
        'name'              => 'sticky-side-title',
        'title'             => __('Sticky Side Title'),
        'description'       => __('A custom sticky-side-title block.'),
        'render_template'   => 'template-parts/blocks/sticky-side-title/code.php',
	    //'enqueue_style'		=> get_template_directory_uri() . '/template-parts/blocks/sticky-side-title/style.css',
        'category'          => 'formatting',
        'icon'              => 'star-filled',
        'mode'              => 'edit',
        'keywords'          => array( 'sticky-side-title', 'quote' ),
    ));

   // register a post-grid block.
   acf_register_block_type(array(
       'name'              => 'post-grid',
       'title'             => __('Post Grid'),
       'description'       => __('A custom post-grid block.'),
       'render_template'   => 'template-parts/blocks/post-grid/code.php',
       //'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/post-grid/style.css',
       'category'          => 'formatting',
       'icon'              => 'star-filled',
       'mode'              => 'edit',
       'keywords'          => array( 'post-grid', 'quote' ),
   ));

   // register a post-slider block.
   acf_register_block_type(array(
       'name'              => 'post-slider',
       'title'             => __('Post Slider'),
       'description'       => __('A custom post-slider block.'),
       'render_template'   => 'template-parts/blocks/post-slider/code.php',
       //'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/post-slider/style.css',
       'category'          => 'formatting',
       'icon'              => 'star-filled',
       'mode'              => 'edit',
       'keywords'          => array( 'post-slider', 'quote' ),
   ));

   // register a stats block.
   acf_register_block_type(array(
       'name'              => 'stats',
       'title'             => __('Stats'),
       'description'       => __('A custom stats block.'),
       'render_template'   => 'template-parts/blocks/stats/code.php',
       //'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/stats/style.css',
       'category'          => 'formatting',
       'icon'              => 'star-filled',
       'mode'              => 'edit',
       'keywords'          => array( 'stats', 'quote' ),
   ));

   // register a parallax-image block.
   acf_register_block_type(array(
       'name'              => 'parallax-image',
       'title'             => __('Parallax Image'),
       'description'       => __('A custom parallax-image block.'),
       'render_template'   => 'template-parts/blocks/parallax-image/code.php',
       //'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/parallax-image/style.css',
       'category'          => 'formatting',
       'icon'              => 'star-filled',
       'mode'              => 'edit',
       'keywords'          => array( 'parallax-image', 'quote' ),
   ));

   // register a featured-pic-text block.
   acf_register_block_type(array(
       'name'              => 'featured-pic-text',
       'title'             => __('Featured Pic & Text'),
       'description'       => __('A custom featured-pic-text block.'),
       'render_template'   => 'template-parts/blocks/featured-pic-text/code.php',
       //'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/featured-pic-text/style.css',
       'category'          => 'formatting',
       'icon'              => 'star-filled',
       'mode'              => 'edit',
       'keywords'          => array( 'featured-pic-text', 'quote' ),
   ));

   // register a page-intro block.
   acf_register_block_type(array(
       'name'              => 'page-intro',
       'title'             => __('Page Intro'),
       'description'       => __('A custom page-intro block.'),
       'render_template'   => 'template-parts/blocks/page-intro/code.php',
       //'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/page-intro/style.css',
       'category'          => 'formatting',
       'icon'              => 'star-filled',
       'mode'              => 'edit',
       'keywords'          => array( 'page-intro', 'quote' ),
   ));

   // register a page-intro M block.
   acf_register_block_type(array(
       'name'              => 'page-intro-m',
       'title'             => __('Page Intro M'),
       'description'       => __('A custom page-intro-m block.'),
       'render_template'   => 'template-parts/blocks/page-intro-m/code.php',
       //'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/page-intro-m/style.css',
       'category'          => 'formatting',
       'icon'              => 'star-filled',
       'mode'              => 'edit',
       'keywords'          => array( 'page-intro-m', 'quote' ),
   ));

   // register a video-link block.
   acf_register_block_type(array(
       'name'              => 'video-link',
       'title'             => __('Video Link'),
       'description'       => __('A custom video-link block.'),
       'render_template'   => 'template-parts/blocks/video-link/code.php',
       //'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/video-link/style.css',
       'category'          => 'formatting',
       'icon'              => 'star-filled',
       'mode'              => 'edit',
       'keywords'          => array( 'video-link', 'quote' ),
   ));

   // register a job-list block.
   acf_register_block_type(array(
       'name'              => 'job-list',
       'title'             => __('Job List'),
       'description'       => __('A custom job-list block.'),
       'render_template'   => 'template-parts/blocks/job-list/code.php',
       //'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/job-list/style.css',
       'category'          => 'formatting',
       'icon'              => 'star-filled',
       'mode'              => 'edit',
       'keywords'          => array( 'job-list', 'quote' ),
   ));

   // register a tab-buttons block.
   acf_register_block_type(array(
       'name'              => 'tab-buttons',
       'title'             => __('Tab Buttons'),
       'description'       => __('A custom tab-buttons block.'),
       'render_template'   => 'template-parts/blocks/tab-buttons/code.php',
       //'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/tab-buttons/style.css',
       'category'          => 'formatting',
       'icon'              => 'star-filled',
       'mode'              => 'edit',
       'keywords'          => array( 'tab-buttons', 'quote' ),
   ));

   // register a visual-submenu block.
   acf_register_block_type(array(
       'name'              => 'visual-submenu',
       'title'             => __('Visual Submenu'),
       'description'       => __('A custom visual-submenu block.'),
       'render_template'   => 'template-parts/blocks/visual-submenu/code.php',
       //'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/visual-submenu/style.css',
       'category'          => 'formatting',
       'icon'              => 'star-filled',
       'mode'              => 'edit',
       'keywords'          => array( 'visual-submenu', 'quote' ),
   ));

   // register a google-map block.
   acf_register_block_type(array(
       'name'              => 'google-map',
       'title'             => __('Google Map'),
       'description'       => __('A custom google-map block.'),
       'render_template'   => 'template-parts/blocks/google-map/code.php',
       //'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/google-map/style.css',
       'category'          => 'formatting',
       'icon'              => 'star-filled',
       'mode'              => 'edit',
       'keywords'          => array( 'google-map', 'quote' ),
   ));

   // register a logo-grid block.
   acf_register_block_type(array(
       'name'              => 'logo-grid',
       'title'             => __('Logo Grid'),
       'description'       => __('A custom logo-grid block.'),
       'render_template'   => 'template-parts/blocks/logo-grid/code.php',
       //'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/logo-grid/style.css',
       'category'          => 'formatting',
       'icon'              => 'star-filled',
       'mode'              => 'edit',
       'keywords'          => array( 'logo-grid', 'quote' ),
   ));

   // register a social-icons block.
   acf_register_block_type(array(
       'name'              => 'social-icons',
       'title'             => __('Social Media Icons'),
       'description'       => __('A custom social-icons block.'),
       'render_template'   => 'template-parts/blocks/social-icons/code.php',
       //'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/social-icons/style.css',
       'category'          => 'formatting',
       'icon'              => 'star-filled',
       'mode'              => 'edit',
       'keywords'          => array( 'social-icons', 'quote' ),
   ));
    
}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}


// Restrict Menu Access

/*

function wpexplorer_remove_menus() {
	if ( ! current_user_can( 'manage_options' ) ) {
		remove_menu_page( 'themes.php' );          // Appearance
		remove_menu_page( 'plugins.php' );         // Plugins
		remove_menu_page( 'users.php' );           // Users
		remove_menu_page( 'tools.php' );           // Tools
		remove_menu_page( 'options-general.php' ); // Settings
	}
}
add_action( 'admin_menu', 'wpexplorer_remove_menus' );

function wpexplorer_adjust_the_wp_menu() {
	$page = remove_submenu_page( 'themes.php', 'widgets.php' );
}
add_action( 'admin_menu', 'wpexplorer_adjust_the_wp_menu', 999 );

*/


// Move YOAST settings panel in editor to bottom 
add_filter( 'wpseo_metabox_prio', function() { return 'low'; } );


?>