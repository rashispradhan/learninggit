
<?php
/**
 * rashisdesigns functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package rashisdesigns
 */


/**
 * Enqueue scripts and styles.
 */
function my_theme_enqueue_styles() {
    wp_enqueue_style('my-style', get_template_directory_uri() . '/app/css/styles.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');


