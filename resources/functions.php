<?php
/**
 * Do not edit anything in this file unless you know what you're doing
 */

use Roots\Sage\Config;
use Roots\Sage\Container;

/**
 * Helper function for prettying up errors
 * @param string $message
 * @param string $subtitle
 * @param string $title
 */

$sage_error = function ($message, $subtitle = '', $title = '') {
    $title = $title ?: __('Sage &rsaquo; Error', 'sage');
    $footer = '<a href="https://roots.io/sage/docs/">roots.io/sage/docs/</a>';
    $message = "<h1>{$title}<br><small>{$subtitle}</small></h1><p>{$message}</p><p>{$footer}</p>";
    wp_die($message, $title);
};

/**
 * Ensure compatible version of PHP is used
 */
if (version_compare('7.1', phpversion(), '>=')) {
    $sage_error(__('You must be using PHP 7.1 or greater.', 'sage'), __('Invalid PHP version', 'sage'));
}

/**
 * Ensure compatible version of WordPress is used
 */
if (version_compare('4.7.0', get_bloginfo('version'), '>=')) {
    $sage_error(__('You must be using WordPress 4.7.0 or greater.', 'sage'), __('Invalid WordPress version', 'sage'));
}

/**
 * Ensure dependencies are loaded
 */
if (!class_exists('Roots\\Sage\\Container')) {
    if (!file_exists($composer = __DIR__.'/../vendor/autoload.php')) {
        $sage_error(
            __('You must run <code>composer install</code> from the Sage directory.', 'sage'),
            __('Autoloader not found.', 'sage')
        );
    }
    require_once $composer;
}

/**
 * Sage required files
 *
 * The mapped array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 */
array_map(function ($file) use ($sage_error) {
    $file = "../app/{$file}.php";
    if (!locate_template($file, true, true)) {
        $sage_error(sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file), 'File not found');
    }
// }, ['helpers', 'setup', 'filters', 'admin']);
}, ['helpers', 'setup', 'filters', 'admin', 'custom-post-type']);

/**
 * Here's what's happening with these hooks:
 * 1. WordPress initially detects theme in themes/sage/resources
 * 2. Upon activation, we tell WordPress that the theme is actually in themes/sage/resources/views
 * 3. When we call get_template_directory() or get_template_directory_uri(), we point it back to themes/sage/resources
 *
 * We do this so that the Template Hierarchy will look in themes/sage/resources/views for core WordPress themes
 * But functions.php, style.css, and index.php are all still located in themes/sage/resources
 *
 * This is not compatible with the WordPress Customizer theme preview prior to theme activation
 *
 * get_template_directory()   -> /srv/www/example.com/current/web/app/themes/sage/resources
 * get_stylesheet_directory() -> /srv/www/example.com/current/web/app/themes/sage/resources
 * locate_template()
 * ├── STYLESHEETPATH         -> /srv/www/example.com/current/web/app/themes/sage/resources/views
 * └── TEMPLATEPATH           -> /srv/www/example.com/current/web/app/themes/sage/resources
 */
array_map(
    'add_filter',
    ['theme_file_path', 'theme_file_uri', 'parent_theme_file_path', 'parent_theme_file_uri'],
    array_fill(0, 4, 'dirname')
);
Container::getInstance()
    ->bindIf('config', function () {
        return new Config([
            'assets' => require dirname(__DIR__).'/config/assets.php',
            'theme' => require dirname(__DIR__).'/config/theme.php',
            'view' => require dirname(__DIR__).'/config/view.php',
        ]);
    }, true);

/* Adding custom menu for wordpress*/

// function kinki_reg_menu(){
//     register_nav_menu('primary', 'The primary eu on the top bar');
//     register_nav_menu('overlap', 'The popup overlap menu');    
// }

// add_action('init', 'kinki_reg_menu');

// function kinki_reg_menus(){
//     register_nav_menus(
//         array(
//             'primary' => 'The primary menu on the TOP BAR NGGA',
//             'overlap' => 'The popup overlap menu',
//             'footer_menu' => 'The menu below the footer'
//         )
//     );
// }
// add_action('init', 'kinki_reg_menus');

// Register nav walker class_alias

require_once('bs4navwalker.php');

register_nav_menu('top', 'Top menu');

// Theme support

// function wpk_theme_setup(){
//     // Nav Menus
//         register_nav_menus(
//         array(
//             'primary' => __('Primary Menu')
//         )
//     );
// }

// add_action('after_setup_theme', 'wpk_theme_setup');


function get_init(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5',
    array('comment-list', 'comment-form', 'search-form')
    );
}

// add_action('after_setup_theme', 'gt_init');
add_action( 'after_setup_theme', 'get_init' );
// Projects post type

function gt_custom_post_type(){
    register_post_type('product',
        array(
            'rewrite' => array('slug' => 'products'),
            'labels' => array(
                'name' => 'Products',
                'singular_name' => 'Product',
                'add_new_item' => 'Add New Product',
                'edit_item' => 'Edit Product'
            ),
            'menu-icon' => 'dashicons-store',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title', 'thumbnail', 'editor', 'excerpt', 'comments'
            )
        )
    );
}

add_action('init', 'gt_custom_post_type');


// wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);

add_filter('show_admin_bar', '__return_false');

// removing emoji
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');

// Without contact form for other pages

function my_delete_local_jquery()
  {
      if (!is_front_page() && !is_home()) {
          wp_deregister_script('jquery');
          wp_dequeue_script('google-recaptcha');
          wp_deregister_style('contact-form-7');
      }
  }
  add_action('wp_enqueue_scripts', 'my_delete_local_jquery');