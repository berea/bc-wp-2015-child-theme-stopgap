<?php
/**
 * Child theme functions and definitions
 *
 * @package berea
 */

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    /* commented out because this is double-enquing the style and production  files
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_script( 'parent-js', get_template_directory_uri() . '/assets/js/production.js', array( 'jquery' ), '1.0.0', false );
    TODO: evaluate if this block should be removed completely  */
}
