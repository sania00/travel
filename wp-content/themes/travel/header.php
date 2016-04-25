<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <title><?php bloginfo('name'); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="favicon.png"/>

</head>

<body>
<div class="wrap-main-full">
    <div class="header-full">
        <div class="wrap">
            <div class="logo">
                <a href="<?php echo home_url(); ?>">
                    <?php if (function_exists('dynamic_sidebar'))
                        dynamic_sidebar('logo'); ?>
                </a>
            </div>
            <div class="right-top-btn">
                <div class="contact-us">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/back.png" alt=""><span>Contact us</span>
                </div>
                <a class="notebook" href="/">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/screpka2.png" alt=""><span>Notebook</span>
                </a>


            </div> <!--notebook-->

            <div class="menu-header-nav"><!--menu-header-nav-->
                <?php wp_nav_menu(array(
                        'menu_class' => 'menu-header',
                    )
                ); ?>
                <div class="seach_ico">
                    <div class="search">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/search.png" alt="">

                        <!--<i class="fa fa-search"></i>-->
                    </div>

                </div>
                <form method="get" class="et-search-form" action=""
                ">
                <input type="search" class="et-search-field" placeholder="Search …" value="" name="s"
                       title="Search for:" style="font-size: 15px;color: white;">
                </form>
                <div class="close_nav"><i class="fa fa-times"></i></div>

            </div> <!--menu-header-nav-->
        </div>

    </div>

    <?php wp_head(); ?>

