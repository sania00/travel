<?php
/***
 *   DO NOT DELETE !!!!!
 */

if ( get_stylesheet_directory() ==  get_template_directory()){
    define('GWTHEME_PATH', get_template_directory() . '/gwtheme' );
    define('GWTHEME_URL', get_template_directory_uri() . '/gwtheme');
}else {
    define('GWTHEME_PATH', get_theme_root() . '/travel/gwtheme');
    define('GWTHEME_URL', get_theme_root_uri() . '/travel/gwtheme');
}

require_once GWTHEME_PATH . '/init.php';

load_theme_textdomain('gwtheme', get_template_directory() . '/lang');
$locale = get_locale();
$locale_file = get_template_directory() . "/lang/$locale.php";

if (is_readable($locale_file)) require_once($locale_file);
