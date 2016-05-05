<?php
/**
 * Template Name: Template WishList
 * */
get_header(); ?>
    <div id="content" class="widecolumn ">

<?php
if (have_posts()) : while (have_posts()) :
    the_post(); ?>
    <div class="wrap_image">
        <img src="/wp-content/uploads/2016/04/wishlist.jpg" alt="">
        <h3 class="text-h3">Wishlist<br>
            of<span class="small"> Madagascar</span></h3>
        <div class="main_h3"></div>
    </div>
    <div class="wrap_main_content">
        <div class="container">
            <div class="row">
                <div class="main_container col-md-8 nopadding-xs">
                    <div class="main_left">
                        <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
                    </div>
                    <?php /*require_once ('includ/form-wishlist.php'); */
                    ?>
                </div>
                <div class="main_right col-md-4">
                    <div class="left_column_widget_respons">

                        <div class="assoc">
                            <a href="http://www.top-madagascar.com/">
                                <img src="/wp-content/uploads/2016/04/logo-top-madagascar.jpg" alt="">
                            </a>
                            <p>We are a member of the Top-Madagascar <br/>
                                NDAO-i-Travel Inbaund Tour Operator</p>
                        </div>
                        <div class="promo_slider">
                            <img src="/wp-content/uploads/2016/04/nation.jpg" alt=""/>
                        </div>
                    </div>
                    <div class="right_column_widget_respons">
                        <div class="btm_toure photo">
                            <div id="c3373" class="csc-default teaser image-link-only">
                                <div class="csc-textpic csc-textpic-intext-right">
                                    <div class="csc-textpic-imagewrap">
                                        <div class="csc-textpic-image csc-textpic-last"><img
                                                src="/wp-content/uploads/2016/04/photo.gif" alt=""/></div>
                                    </div>
                                    <h4>Photo Tour</h4>
                                </div>
                            </div>
                        </div>
                        <div class="btm_toure luxery">
                            <div id="c3373" class="csc-default teaser image-link-only">
                                <div class="csc-textpic csc-textpic-intext-right">
                                    <div class="csc-textpic-imagewrap">
                                        <div class="csc-textpic-image csc-textpic-last"><img
                                                src="/wp-content/uploads/2016/04/luxury.jpg" alt=""/></div>
                                    </div>
                                    <h4>Luxury Tour</h4>
                                </div>
                            </div>
                        </div>
                        <div class="btm_toure birdwatching">
                            <div id="c3373" class="csc-default teaser image-link-only">
                                <div class="csc-textpic csc-textpic-intext-right">
                                    <div class="csc-textpic-imagewrap">
                                        <div class="csc-textpic-image csc-textpic-last"><img
                                                src="/wp-content/uploads/2016/04/birdwatching.jpg" alt=""/></div>
                                    </div>
                                    <h4>Birdwatching Tour</h4>
                                </div>
                            </div>
                        </div>
                        <div class="btm_toure gastronomy">
                            <div id="c3373" class="csc-default teaser image-link-only">
                                <div class="csc-textpic csc-textpic-intext-right">
                                    <div class="csc-textpic-imagewrap">
                                        <div class="csc-textpic-image csc-textpic-last"><img
                                                src="/wp-content/uploads/2016/04/gastronomy.jpg" alt=""/></div>
                                    </div>
                                    <h4>Gastronomy Tour</h4>
                                </div>
                            </div>
                        </div>
                        <div class="btm_toure fishing">
                            <div id="c3373" class="csc-default teaser image-link-only">
                                <div class="csc-textpic csc-textpic-intext-right">
                                    <div class="csc-textpic-imagewrap">
                                        <div class="csc-textpic-image csc-textpic-last"><img
                                                src="/wp-content/uploads/2016/04/fishing.jpg" alt=""/></div>
                                    </div>
                                    <h4>Fishing Tour</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    </div>
<?php endwhile;
endif; ?>

    </div><!--widecolumn-->
    </div> <!--wrap-main-->
<?php get_footer(); ?>