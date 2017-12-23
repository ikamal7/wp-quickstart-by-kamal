<?php
/**
 * kamal functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kamal
 */

if ( ! function_exists( 'kamal_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function kamal_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on kamal, use a find and replace
		 * to change 'kamal' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'kamal', get_template_directory() . '/languages' );

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
		add_theme_support( 'post-formats', ['video','audio','gallery','quote'] );
		add_theme_support( 'menus' );
		add_theme_support( 'widgets' );
		add_theme_support( 'custom-header' );
		add_theme_support( 'custom-background' );
		add_theme_support( 'woocommerce' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'mmain-menu' =>  'Main Menu',
		) );

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

		

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
	
	}
endif;
add_action( 'after_setup_theme', 'kamal_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kamal_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'kamal' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'kamal' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'kamal_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function kamal_scripts() {
	
	wp_enqueue_style( 'kamal-theme-bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '3.3.7' );
    wp_enqueue_style( 'kamal-theme-fontawesome', 'maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0' );
    wp_enqueue_style( 'kamal-theme-style', get_stylesheet_uri() );
    
    wp_enqueue_style( 'kamal-theme-responsive', get_template_directory_uri() . '/css/responsive.css', array(), '1.0' );
    
    wp_enqueue_script( 'kamal-bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), '20120206', true );
    wp_enqueue_script( 'kamal-main-js', get_template_directory_uri() . '/js/main.js', array(), '20120206', true );


}
add_action( 'wp_enqueue_scripts', 'kamal_scripts' );



/**
 * TGM plugin activation
 */
require get_template_directory() . '/inc/tgm/example.php';


/**
 * CodeStar Framework
 */
require get_template_directory() . '/inc/codestar/cs-framework.php';
require get_template_directory() . '/inc/cs-metabox.php';
require get_template_directory() . '/inc/cs-theme-options.php';





