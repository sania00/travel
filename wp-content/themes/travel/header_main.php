<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php bloginfo('name');?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="favicon.png" />
</head>
<body>
<img src="http://www.turgalicia.es/imaxes/mdaw/mjez/~edisp/~extract/TURGA213211~1~staticrendition/tg_sinescalar.jpg" alt="" id="bgmain" style="width: 1296px;height: 810px;">
<div class="wrap-main">
    <header class="">
        <div class="wrap">
            <div class="logo">
                <a href="<?php echo home_url();?>">
                    <?php if ( function_exists('dynamic_sidebar') )
                        dynamic_sidebar('logo');?>
                </a>
            </div>
            <div class="notebook">
                <h1>sdfadfas</h1>
            </div> <!--notebook-->

            <?php wp_nav_menu(array(
                    'menu_class' => 'menu-header',
                )
            );?>
        </div>
        <?php wp_head(); ?>
    </header>

    
