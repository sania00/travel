<?php
/**
* Enqueue Theme Styles
*/

function gw_enqueue_styles(){
    wp_register_style('gwtheme-general-css', THEME_URL . '/css/general.css');
    wp_register_style('fonts', THEME_URL . '/css/fonts.css');
    wp_register_style('bootstrap', THEME_URL . '/css/bootstrap.min.css');
    wp_register_style('font-awesomes', THEME_URL . '/css/font-awesome.min.css');
    wp_register_style('owl-carousel',THEME_URL . '/css/owl.carousel.css');
    wp_register_style('superfish', THEME_URL . '/css/superfish.css');
    wp_register_style('jquery-ui-css', THEME_URL . '/css/jquery-ui.css');

    wp_enqueue_style('gwtheme-general-css');
    wp_enqueue_style('fonts');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('font-awesomes');
    wp_enqueue_style('owl-carousel');
    wp_enqueue_style('superfish');
    wp_enqueue_style('jquery-ui-css');
}
add_action('wp_enqueue_scripts', 'gw_enqueue_styles');

/**
 * Enqueue Theme Scripts
 */

function gw_enqueue_scripts(){
    wp_register_script('jquery-ui', THEME_URL . '/lib/jquery-ui.js', array('jquery'), '');
    wp_register_script('owl-carousel-min', THEME_URL . '/lib/owl.carousel.min.js', array('jquery'), '', true);
    wp_register_script('gwtheme-main-js', THEME_URL . '/js/main.js', array('jquery-ui'), '', true);

    wp_enqueue_script('gwtheme-main-js');
    wp_enqueue_script('jquery-ui');
    wp_enqueue_script('owl-carousel-min');
}

add_action('wp_enqueue_scripts', 'gw_enqueue_scripts');
