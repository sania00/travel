<?php

/****************************************************************
 * System Constants
 ****************************************************************/
define('THEME_URL', get_template_directory_uri());


/***
 * Array load folders
 */
$folders = array(
    'etc', 
    'functions',
    'shortcodes'
);


/**
 * Load Theme Variable Data
 * @param string $var
 * @return string
 */
function theme_data_varible($var){
    if (!is_file(STYLESHEETPATH . '/style.css')){
        return '';
    }
    $theme_data = wp_get_theme();
    return $theme_data->{$var};
}

/****************************************************************
 * Require Needed Files & Libraries
 ****************************************************************/
foreach($folders as $folder){
    $dir = (array)glob(GWTHEME_PATH . '/' . $folder . '/*.php');
    foreach ($dir as $filename) {
        if (!empty($filename))
            require_once $filename;        
    }
}
























