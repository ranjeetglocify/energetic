<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'hello-elementor','hello-elementor','hello-elementor-theme-style','hello-elementor-header-footer' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 20 );

// END ENQUEUE PARENT ACTION

function enqueue_slick_carousel() {
   
    wp_enqueue_style(
        'slick-carousel-css',
        'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css',
        array(), 
        '1.9.0' 
    );

    wp_enqueue_style(
        'slick-carousel-theme',
        'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css',
        array('slick-carousel-css'), 
        '1.9.0' 
    );

    wp_enqueue_script(
        'slick-carousel-js',
        'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js',
        array('jquery'), 
        '1.9.0', 
        true 
    );
}
add_action('wp_enqueue_scripts', 'enqueue_slick_carousel');

function custom_enqueue_scripts() {
    wp_enqueue_script(
        'custom-script', 
        get_stylesheet_directory_uri() . '/assets/js/custom-script.js', 
        array('jquery'),  
        '1.0.0',         
        true             
    );
}
add_action('wp_enqueue_scripts', 'custom_enqueue_scripts');


function load_custom_file_shortcode() {
    ob_start(); 
    include get_stylesheet_directory() . '/modules/custom_post_slider.php';
    return ob_get_clean(); 
}
add_shortcode('custom_post_slider', 'load_custom_file_shortcode');


function wp_slider_txt_bottom_single_post() {
    ob_start(); 
    include  get_stylesheet_directory() . '/modules/custom_slider_bottom_txt.php';
    return ob_get_clean(); 
}
add_shortcode('smart_slider_txt_bottom', 'wp_slider_txt_bottom_single_post');


add_shortcode( 'product_gallery', 'custom_product_gallery_shortcode' );
function custom_product_gallery_shortcode( $atts ) {
    ob_start(); 
    include  get_stylesheet_directory() . '/modules/complete_the_look.php';
    return ob_get_clean(); 
}


add_filter('wpcf7_autop_or_not', '__return_false');


add_action('woocommerce_before_single_product', 'custom_product_modal_button');
function custom_product_modal_button() {
    get_template_part('modules/product-modal');
}

add_action('wp_footer', 'custom_modal_script');
function custom_modal_script() {
    get_template_part('assets/js/custom-script.js');
}
