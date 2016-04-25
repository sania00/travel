<?php
/** Загружаемые стили и скрипты**/
function load_style_script () {
    wp_enqueue_script('jquery-2', get_template_directory_uri() . '/lib/jquery.js');
    wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/lib/jquery-ui.js');
    wp_enqueue_script('owl-carousel-min', get_template_directory_uri() . '/lib/owl.carousel.min.js');
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/lib/owl.carousel.js');
    wp_enqueue_script('superfish', get_template_directory_uri() . '/lib/superfish.js');
    wp_enqueue_script('supersubs', get_template_directory_uri() . '/lib/supersubs.js');
    wp_enqueue_script('hoverIntent', get_template_directory_uri() . '/lib/hoverIntent.js');
    wp_enqueue_script('jqueryeasing', get_template_directory_uri() . '/lib/jqueryeasing.js');
    wp_enqueue_script('commons', get_template_directory_uri() . '/js/common.js');
    /*wp_enqueue_script('gdl-scripts', get_template_directory_uri() . '/lib/gdl-scripts.js');*/


    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('fonts', get_template_directory_uri() . '/css/fonts.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('font-awesomes', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/css/owl.carousel.css');
    wp_enqueue_style('superfish', get_template_directory_uri() . '/css/superfish.css');
    wp_enqueue_style('jquery-ui-css', get_template_directory_uri() . '/css/jquery-ui.css');
}

/** Загрузка стилей и скриптов **/
add_action('wp_enqueue_scripts', 'load_style_script');

/** Meню **/
register_nav_menu('menu', 'Main Menu');

/** Виджеты **/
register_sidebar( array(
    'name' => 'Логотип',
    'id' => 'logo',
    'description' => 'Логотип на всех старницах',
    'before_widget' => '',
    'after_widget' => '',
) );
/** Акордеон в на главной **/
register_sidebar( array(
    'name' => 'Акордеон',
    'id' => 'accordion',
    'description' => 'Акордеон в на главной',
    'before_widget' => '',
    'after_widget' => '',
) );

// allow SVG uploads
add_filter('upload_mimes', 'custom_upload_mimes');
function custom_upload_mimes ( $existing_mimes=array() ) {
    $existing_mimes['svg'] = 'image/svg+xml';
    return $existing_mimes;
}
function fix_svg() {
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
}
add_action('admin_head', 'fix_svg');

// Excerpt length
function new_excerpt_length($length) {
    return 28;
}
add_filter('excerpt_length', 'new_excerpt_length');

add_filter('excerpt_more', function($more) {
    return '...';
});
