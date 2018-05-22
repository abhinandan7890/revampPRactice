<?php
/**
 * revampedpractice functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package revampedpractice
 */

if ( ! function_exists( 'revampedpractice_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function revampedpractice_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on revampedpractice, use a find and replace
		 * to change 'revampedpractice' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'revampedpractice', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'revampedpractice' ),
            'menu-top' => esc_html__( 'top bar menu', 'top bar menu' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'revampedpractice_custom_background_args', array(
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
add_action( 'after_setup_theme', 'revampedpractice_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function revampedpractice_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'revampedpractice_content_width', 640 );
}
add_action( 'after_setup_theme', 'revampedpractice_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function revampedpractice_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'revampedpractice' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'revampedpractice' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'revampedpractice_widgets_init' );

/**
 * Enqueue scripts and styles.
 */


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/PRactice_nav_walker.php';
require get_template_directory() . '/inc/PRactice_top_nav_walker.php';

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

/*
* Excerpt function
*/

//function custom_wp_trim_excerpt($text) {
//$raw_excerpt = $text;
//if ( '' == $text ) {
//    $text = get_the_content('');
//
//    $text = strip_shortcodes( $text );
//
//    $text = apply_filters('the_content', $text);
//    $text = str_replace(']]>', ']]&gt;', $text);
//
//    /***Add the allowed HTML tags separated by a comma.***/
//    $allowed_tags = ''; // <p>,<a>,<em>,<strong>
//    $text = strip_tags($text, $allowed_tags);
//
//    /***Change the excerpt word count.***/
//    $excerpt_word_count = 10;
//    $excerpt_length = apply_filters('excerpt_length', $excerpt_word_count);
//
//    /*** Change the excerpt ending.***/
//    $excerpt_end = '...';//' <a href="'. get_permalink($post->ID) . '">' . '&raquo; Continue Reading.' . '</a>';
//    $excerpt_more = apply_filters('excerpt_more', ' ' . $excerpt_end);
//
//    $words = preg_split("/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY);
//    if ( count($words) > $excerpt_length ) {
//        array_pop($words);
//        $text = implode(' ', $words);
//        $text = $text . $excerpt_more;
//    } else {
//        $text = implode(' ', $words);
//    }
//}
//return apply_filters('wp_trim_excerpt', $text, $raw_excerpt);
//}
//remove_filter('get_the_excerpt', 'wp_trim_excerpt');
//add_filter('get_the_excerpt', 'custom_wp_trim_excerpt');

/**
 *
 * Remove title text from archive page 
 * 
 * */
add_filter( 'get_the_archive_title', function ($title) {

    if ( is_category() ) {

            $title = single_cat_title( '', false );

        } elseif ( is_tag() ) {

            $title = single_tag_title( '', false );

        } elseif ( is_author() ) {

            $title = '<span class="vcard">' . get_the_author() . '</span>' ;

        }elseif (is_tax()) {
        $title = single_term_title( '', false );
    }

    return $title;

});
/*
 * Archive image size
*/
add_image_size( 'archiveSize', 350, 250, array( 'center', 'center' ) );

