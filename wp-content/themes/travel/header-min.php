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

<img src="/wp-content/uploads/2016/03/bg-main.jpg" alt="" id="bgmain"
     style="width: 1296px;height: 810px;">
<div class="wrap-main">
    <div class="header">
        <div class="wrap">
            <div class="logo">
                <a href="<?php echo home_url(); ?>">
                    <?php if (function_exists('dynamic_sidebar'))
                        dynamic_sidebar('logo'); ?>
                </a>
            </div>
            <div class="right-top-btn">
                <!--slogan widget-->
                
                <?php if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('slogan'); ?>
                <!--Language Module -->
                <?php do_action('icl_language_selector'); ?>
                <!--slogan widget-->
                <?php if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('contact-us'); ?>

            </div> <!--notebook-->

            <div class="menu-header-nav"><!--menu-header-nav-->

                <div class="seach_ico">
                    <div class="search">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/search.png" alt="">

                        <!--<i class="fa fa-search"></i>-->
                    </div>

                </div>
                <form method="get" class="et-search-form" action=""
                ">
                <input type="search" class="et-search-field" placeholder="Search …" value="" name="s"
                       title="Search for:" style="font-size: 15px;color: #260f38;">
                </form>
                <div class="close_nav"><i class="fa fa-times"></i></div>


                <?php wp_nav_menu(array(
                        'menu_class' => 'menu-header sf-menu',
                        'container' => '',
                    )
                ); ?>

                <!--<div class="body-outer-wrapper">
                    <div class="header-wrapper main">-->

                <!-- Navigation -->
                <!--<div class="gdl-navigation-wrapper">
                            <div class="navigation-wrapper">
                                <div class="gdl-current-menu"></div>
                                <div id="main-superfish-wrapper" class="menu-wrapper">
                                        <?php /*wp_nav_menu(array(
                                                'menu_class' => 'menu-header sf-menu',
                                                'container'       => '',
                                            )
                                        ); */ ?>
                                </div>
                            </div>
                        </div>-->
                <!--</div> --><!-- header wrapper container -->
                <!--</div>--> <!-- body wrapper -->


            </div> <!--menu-header-nav-->
        </div>

    </div>



