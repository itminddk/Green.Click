<?php
/**
 * Green Click functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Green_Click
 */

if ( ! function_exists( 'greenclick_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function greenclick_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Green Click, use a find and replace
	 * to change 'greenclick' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'greenclick', get_template_directory() . '/languages' );

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
		'main' => esc_html__( 'Main', 'greenclick' ),
		'primary' => esc_html__( 'Primary', 'greenclick' ),
		'secondary' => esc_html__( 'Secondary', 'greenclick' ),
		'text-secondary' => esc_html__( 'Text Secondary', 'greenclick' ),
		'footer-primary' => esc_html__( 'Footer Primary', 'greenclick' ),
		'footer-secondary' => esc_html__( 'Footer Secondary', 'greenclick' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );


}
endif; // greenclick_setup
add_action( 'after_setup_theme', 'greenclick_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function greenclick_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'greenclick_content_width', 640 );
}
add_action( 'after_setup_theme', 'greenclick_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function greenclick_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'greenclick' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'greenclick_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function greenclick_scripts() {
	wp_enqueue_style( 'greenclick-style', get_stylesheet_uri() );
	wp_enqueue_script( 'greenclick-fitvids', get_template_directory_uri() . '/build/assets/js/jquery.fitvids.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'greenclick-scripts', get_template_directory_uri() . '/build/assets/js/app.js', array( 'jquery' ), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'greenclick_scripts' );

// Add SVG support
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

// Add Options Page to ACF
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();

	acf_add_options_sub_page('General');
	acf_add_options_sub_page('Flexible Content');

}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
