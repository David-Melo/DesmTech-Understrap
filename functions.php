<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Load functions to secure your WP install.
 */
require get_template_directory() . '/inc/security.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';
require get_template_directory() . '/inc/bootstrap-wp-navwalker-alt.php';

/**
 * Load WooCommerce functions.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Load Editor functions.
 */
require get_template_directory() . '/inc/editor.php';

function remove_cssjs_ver( $src ) {
    if( strpos( $src, '?ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );

register_nav_menus( array(
    'secondary' => 'Secondary Menu',
    'footer' => 'Footer Menu',
    'mobile' => 'Mobile Menu',
) );

if( function_exists('acf_add_options_page') ) {

    $option_page = acf_add_options_page(array(
        'page_title' 	=> 'Site Settings',
        'menu_title' 	=> 'Site Settings',
        'menu_slug'  	=> 'site-general-settings',
        'redirect' 	    => false
    ));

    $color_page = acf_add_options_page(array(
        'page_title' 	=> 'Site Style',
        'menu_title' 	=> 'Site Style',
        'menu_slug' 	=> 'site-color-settings',
        'parent-slug'   => 'site-general-settings',
        'redirect'   	=> false
    ));

}

function my_acf_flexible_content_layout_title( $title, $field, $layout, $i ) {

// remove layout title from text
$title = '';


// load sub field image
// note you may need to add extra CSS to the page t style these elements
$title .= '<div class="thumbnail" style="display: inline">';

    $title .= '</div>';


// load text sub field
if( $text = get_sub_field('section_link_title') ) {

$title .= '<span>' . $text . '</span>';

}


    // return
    return $title;

}

// name
add_filter('acf/fields/flexible_content/layout_title/name=home_page_sections', 'my_acf_flexible_content_layout_title', 10, 4);

function my_acf_init() {

acf_update_setting('google_api_key', 'AIzaSyBu3cp_xWqPVHIbfz12SJ-_hJ3RW75wj7A');
}

add_action('acf/init', 'my_acf_init');

remove_filter( 'the_content', 'wpautop' );