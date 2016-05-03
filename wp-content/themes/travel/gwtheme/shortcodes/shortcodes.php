<?php

/*-----------------------------------------------------------------------------------*/
/*	Picture Shortcodes
/*-----------------------------------------------------------------------------------*/

if (!function_exists("gw_two_third")){
    function gw_two_third($attr, $content = null){
        return '<div class="gw_two_picture">' . do_shortcode($content) . '</div>' . '<div class="clear"></div>';
    }
    add_shortcode("gw_two_third", "gw_two_third");
}