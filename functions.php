<?php
// This function enqueues the css for use. The first parameter is a name for the stylesheet, the second is the URL. Here we
// use an online version of the css file.
function add_Styles() {
   wp_enqueue_style( 'bootstrap-style', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css");
   wp_enqueue_style( 'font-awesome-style', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css");
}
add_action('wp_enqueue_scripts', 'add_Styles');


// Change Post Excerpt Length
function custom_excerpt_length($length) {
    return 30; // Change this number to set your desired excerpt length.
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

function all_settings_link() {
    add_options_page(__('All Settings'), __('All Settings'), 'administrator', 'options.php');
   }
   add_action('admin_menu', 'all_settings_link');
   
if (!defined('WP_POST_REVISIONS')) define('WP_POST_REVISIONS', 5);

// Register a new sidebar simply named 'sidebar'
function add_widget_support() {
               register_sidebar( array(
                               'name'          => 'Sidebar',
                               'id'            => 'sidebar',
                               'before_widget' => '<div class="container">',
                               'after_widget'  => '</div>',
                               'before_title'  => '<h2 class="badge bg-dark">',
                               'after_title'   => '</h2>',
               ) );
}
// Hook the widget initiation and run our function
add_action( 'widgets_init', 'add_widget_support' );

// Register a new navigation menu
function add_Main_Nav() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
// Hook to the init action hook, run our navigation menu function
add_action( 'init', 'add_Main_Nav' );

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'WPReboot' ),
) );

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

// Add Google Analytics Tracking Code
function add_google_analytics() {
    ?>
    <script async src="https://www.googletagmanager.com/gtag/js?id=YOUR_ANALYTICS_ID_HERE"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'YOUR_ANALYTICS_ID_HERE');
    </script>
    <?php
}
add_action('wp_head', 'add_google_analytics');

function wpreboot_theme_setup() {
	// Load regular editor styles into the new block-based editor.
	add_theme_support( 'editor-styles' );
	// Load default block styles.
	add_theme_support( 'wp-block-styles' );
	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );
	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );
	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );
	/*
	 * Switches default core markup for search form, comment form,
	 * and comments to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
			'navigation-widgets',
		)
	);

	/*
	 * This theme supports all available post formats by default.
	 * See: https://developer.wordpress.org/advanced-administration/wordpress/post-formats/
	 */
	add_theme_support(
		'post-formats',
		array(
			'aside',
			'audio',
			'chat',
			'gallery',
			'image',
			'link',
			'quote',
			'status',
			'video',
		)
	);
	/*
	 * This theme uses a custom image size for featured images, displayed on
	 * "standard" posts and pages.
	 */
  // Enable featured image (post thumbnail) support
	add_theme_support( 'post-thumbnails' );
  // Default post thumbnail size (width, height, crop)
	set_post_thumbnail_size( 500, 360, true );

	// This theme uses its own gallery styles.
	add_filter( 'use_default_gallery_style', '__return_false' );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_image_size( 'wpreboot-large', 1024, 768, true );
	add_image_size( 'wpreboot-medium', 600, 400, true );
  
  
  // Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'wpreboot_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
  
}
add_action( 'after_setup_theme', 'wpreboot_theme_setup' );
// Usage:
// - In templates: the_post_thumbnail(); or the_post_thumbnail('wpreboot-medium');
// - To get an image HTML: echo get_the_post_thumbnail( get_the_ID(), 'wpreboot-large' );