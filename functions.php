<?php
/**
 * dos functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package dos
 */

function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
}

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.1.2');
}
if (!function_exists('wpbootstrap_enqueue_styles')) {
    function wpbootstrap_enqueue_styles() {

        define('BOOTSTRAP_VERSION', '4.5.3');

        $theme_file_uri = get_theme_file_uri();

        wp_register_style('bootstrap', $theme_file_uri . '/assets/bootstrap/bootstrap.min.css', array(), BOOTSTRAP_VERSION);
        
        wp_enqueue_style('doshermanos-style', get_stylesheet_uri(), array('bootstrap'), _S_VERSION);
        
        wp_enqueue_script('bootstrap', $theme_file_uri . '/assets/bootstrap/bootstrap.bundle.min.js', array('jquery'), BOOTSTRAP_VERSION, true);

        wp_enqueue_script('main', $theme_file_uri . '/js/main.js', array('jquery'), '1.0.0', true);


//        wp_enqueue_script('jquery-ui-tabs');


    }


    add_action('wp_enqueue_scripts', 'wpbootstrap_enqueue_styles');
}


if (!function_exists('dos_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function dos_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on dos, use a find and replace
         * to change 'dos' to the name of your theme in all the template files.
         */
        load_theme_textdomain('dos', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'menu-1' => esc_html__('Primary'),
                'menu-2' => esc_html__('Footer')
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'dos_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height' => 250,
                'width' => 250,
                'flex-width' => true,
                'flex-height' => true,
            )
        );
    }
endif;
add_action('after_setup_theme', 'dos_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dos_content_width()
{
    $GLOBALS['content_width'] = apply_filters('dos_content_width', 640);
}

add_action('after_setup_theme', 'dos_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dos_widgets_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'dos'),
            'id' => 'sidebar-1',
            'description' => esc_html__('Add widgets here.', 'dos'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}

add_action('widgets_init', 'dos_widgets_init');

/**
 * Enqueue scripts and styles.
 */

/**
 * Initialise ACF
 */
require get_template_directory() . '/inc/acf.php';

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
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

require get_template_directory() . '/inc/features.php';

/**
* Remove Gutenberg Editor on certain post types
*/
add_filter( 'use_block_editor_for_post_type', function( $use_block_editor, $post_type ) {

    $post_types_arr = array(
        'post',
        'events'
    );

	if ( ! in_array( $post_type, $post_types_arr ) ) { return false; }

	return $use_block_editor;

}, 10, 2);
