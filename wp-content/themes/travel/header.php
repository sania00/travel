<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <title><?php bloginfo('name'); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="favicon.png"/>
    <?php wp_head(); ?>
</head>

<body>
<div class="wrap-main-full">
    <div class="header-full">
        <div class="container">
            <div class="row">
                <div class="logo col-md-3 col-xs-4 col-lg-5">
                    <!--slogan widget-->
                    <?php if (function_exists('dynamic_sidebar'))
                        dynamic_sidebar('slogan'); ?>
                    <!--logo-->
                    <a href="<?php echo home_url(); ?>">
                        <?php if (function_exists('dynamic_sidebar'))
                            dynamic_sidebar('logo'); ?>
                    </a>
                </div>
                <div class="right-top-btn col-md-9 col-xs-8 col-lg-7">

                    <!--Language Module -->
                    <?php do_action('icl_language_selector'); ?>
                    <!--slogan widget-->
                    <?php if (function_exists('dynamic_sidebar'))
                        dynamic_sidebar('contact-us'); ?>
                    <!--contact-today widget-->
                    <div class="contact">
                        <?php if (function_exists('dynamic_sidebar'))
                            dynamic_sidebar('contact-today-header'); ?>
                    </div>

                    <div class="menu-mob-control" ">
                        <p>MENU</p>
                        <div class="btn-menu">
                            <div class="wrapper">
                                <div class="menu-toggle-wrapper" aria-hidden="true">
                                    <button class="btn-menu menu-closed">
                                        <span class="menu-icon"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

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
    </div>
    <div class="menu-mob">
        <?php wp_nav_menu(array(
                'menu_class' => 'menu-header',
            )
        ); ?>
    </div>



