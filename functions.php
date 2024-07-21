<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

define('URL_BASE', get_stylesheet_directory_uri() . '/');
define('IMG_BASE', URL_BASE . 'img/');

// register webpack compiled js and css with theme
function enqueue_webpack_scripts() {
  
    $cssFilePath = glob( get_template_directory() . '/css/build/main.min.*.css' );
    $cssFileURI = get_template_directory_uri() . '/css/build/' . basename($cssFilePath[0]);
    wp_enqueue_style( 'main_css', $cssFileURI );

    $jsFilePath = glob( get_template_directory() . '/js/build/main.min.*.js' );
    $jsFileURI = get_template_directory_uri() . '/js/build/' . basename($jsFilePath[0]);
    wp_enqueue_script( 'main_js', $jsFileURI , null , null , true );
}

add_action( 'wp_enqueue_scripts', 'enqueue_webpack_scripts' );

function my_wpcf7_form_elements( $html ) {
    return preg_replace('/<br\s*\/?>/i', '', $html);
}
add_filter('wpcf7_form_elements', 'my_wpcf7_form_elements');

function add_open_graph_tags() {
    if (is_single() || is_page()) {
        global $post;
        $post_image = '';
        if (has_post_thumbnail($post->ID)) {
            $post_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
            $post_image = $post_image[0];
        } else {
            $post_image = 'https://antuanetytoddwedding.com/wp-content/uploads/2024/06/IMG_6335.webp';
        }
        ?>
        <meta property="og:title" content="<?php echo get_the_title(); ?>" />
        <meta property="og:description" content="<?php echo get_the_excerpt(); ?>" />
        <meta property="og:image" content="<?php echo $post_image; ?>" />
        <meta property="og:url" content="<?php echo get_permalink(); ?>" />
        <meta property="og:type" content="article" />
        <?php
    }
}
add_action('wp_head', 'add_open_graph_tags');