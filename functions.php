<?php
/**
 * Gemini functions and definitions
 *
 * @package Gemini
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 750; /* pixels */

if ( ! function_exists( 'gemini_setup' ) ) :
/**
 * Set up theme defaults and register support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function gemini_setup() {
	global $cap, $content_width;

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	if ( function_exists( 'add_theme_support' ) ) {

		/**
		 * Add default posts and comments RSS feed links to head
		*/
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Enable support for Post Thumbnails on posts and pages
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		*/
		add_theme_support( 'post-thumbnails' );
                add_image_size( 'homepage-thumb', 100, 100, true );
                add_image_size( 'feature-thumb', 555, 220, true );
                add_image_size('featured-images',1400,200,true);
                add_image_size('blog-thumb',200,150,true);
		/**
		 * Enable support for Post Formats
		*/
		add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

		/**
		 * Setup the WordPress core custom background feature.
		*/
		add_theme_support( 'custom-background', apply_filters( 'gemini_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

	}

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on Gemini, use a find and replace
	 * to change 'gemini' to the name of your theme in all the template files
	*/
	load_theme_textdomain( 'gemini', get_template_directory() . '/languages' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	*/
	register_nav_menus( array(
		'primary'  => __( 'Header bottom menu', 'gemini' ),
	) );

}
endif; // gemini_setup
add_action( 'after_setup_theme', 'gemini_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function gemini_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'gemini' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
        register_sidebar( array(
		'name'          => __( 'Footer Widget 1', 'gemini' ),
		'id'            => 'footer-sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
        register_sidebar( array(
		'name'          => __( 'Footer Widget 2', 'gemini' ),
		'id'            => 'footer-sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
        register_sidebar( array(
		'name'          => __( 'Footer Widget 3', 'gemini' ),
		'id'            => 'footer-sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'gemini_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function gemini_scripts() {

	// load bootstrap css
	wp_enqueue_style( 'gemini-bootstrap', get_template_directory_uri() . '/includes/resources/bootstrap/css/bootstrap.css' );
        $fonts_url ='http://fonts.googleapis.com/css?family=Open+Sans|Raleway'  ;
        if ( !empty ($fonts_url)){
            wp_enqueue_style('fonts',esc_url_raw($fonts_url),array(),null);
        }
	// load Gemini styles
	wp_enqueue_style( 'gemini-style', get_stylesheet_uri() );
        wp_enqueue_style('font-awesome',get_template_directory_uri() . '/font-awesome.min.css');
        
        wp_enqueue_script('jquery');
	// load bootstrap js
	wp_enqueue_script('gemini-bootstrapjs', get_template_directory_uri().'/includes/resources/bootstrap/js/bootstrap.js', array('jquery') );

	// load bootstrap wp js
	wp_enqueue_script( 'gemini-bootstrapwp', get_template_directory_uri() . '/includes/js/bootstrap-wp.js', array('jquery') );

	wp_enqueue_script( 'gemini-skip-link-focus-fix', get_template_directory_uri() . '/includes/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'gemini-keyboard-image-navigation', get_template_directory_uri() . '/includes/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}

}
add_action( 'wp_enqueue_scripts', 'gemini_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/includes/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/includes/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/includes/bootstrap-wp-navwalker.php';
function gemini_content_width() {
	if ( is_page_template( '/full-width-template.php' ) || is_attachment() ) {
		global $content_width;
		$content_width = 1200;
	}
}
add_action('template_redirect','gemini_content_width');

function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read More</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );