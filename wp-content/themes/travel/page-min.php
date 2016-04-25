<?php
/*
Template Name: PageMin
*/
?>

<?php
get_header("min"); ?>


<div id="content" class="widecolumn">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="post">

            <div class="entrytext">
                <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
            </div>
            <div class="main_left">
                <h2><em>Enjoy these</em>...<strong> experiences</strong></h2>
                <p class="pre">What we are proposing here is not a tour. We want you to feel Madagascar.
                    In your own way, at your own pace and, above all, that you enjoy it in every sense.</p>
                <div class="slider">
                    <div class="wrap">
                        <?php require_once ('includ/slider.php');?>
                    </div>
                </div>

            </div>
            <div class="main_right">
                <div class="promo_slider">
                    <img src="/wp-content/uploads/2016/04/nation.jpg" alt="">
                </div>

                <div class="btm_toure photo">
                    <div id="c3373" class="csc-default teaser image-link-only">
                        <div class="csc-textpic csc-textpic-intext-right">
                            <div class="csc-textpic-imagewrap">
                                <div class="csc-textpic-image csc-textpic-last">
                                    <img src="/wp-content/uploads/2016/04/photo.gif" alt="">
                                </div>
                            </div>
                            <h4>Photo Tour</h4>
                        </div>
                    </div>
                </div>
                <div class="btm_toure luxery">
                    <div id="c3373" class="csc-default teaser image-link-only">
                        <div class="csc-textpic csc-textpic-intext-right">
                            <div class="csc-textpic-imagewrap">
                                <div class="csc-textpic-image csc-textpic-last">
                                    <img src="/wp-content/uploads/2016/04/luxury.jpg" alt="">
                                </div>
                            </div>
                            <h4>Luxury Tour</h4>
                        </div>
                    </div>
                </div>
                <div class="btm_toure birdwatching">
                    <div id="c3373" class="csc-default teaser image-link-only">
                        <div class="csc-textpic csc-textpic-intext-right">
                            <div class="csc-textpic-imagewrap">
                                <div class="csc-textpic-image csc-textpic-last">
                                    <img src="/wp-content/uploads/2016/04/birdwatching.jpg" alt="">
                                </div>
                            </div>
                            <h4>Birdwatching Tour</h4>
                        </div>
                    </div>
                </div>
                <div class="btm_toure gastronomy">
                    <div id="c3373" class="csc-default teaser image-link-only">
                        <div class="csc-textpic csc-textpic-intext-right">
                            <div class="csc-textpic-imagewrap">
                                <div class="csc-textpic-image csc-textpic-last">
                                    <img src="/wp-content/uploads/2016/04/gastronomy.jpg" alt="">
                                </div>
                            </div>
                            <h4>Gastronomy Tour</h4>
                        </div>
                    </div>

                </div>
                <div class="btm_toure fishing">
                    <div id="c3373" class="csc-default teaser image-link-only">
                        <div class="csc-textpic csc-textpic-intext-right">
                            <div class="csc-textpic-imagewrap">
                                <div class="csc-textpic-image csc-textpic-last">
                                    <img src="/wp-content/uploads/2016/04/fishing.jpg" alt="">
                                </div>
                            </div>
                            <h4>Fishing Tour</h4>
                        </div>
                    </div>
                </div>
                <div class="promo">

                    <div class="owl-carousel2">
                        <div class="owl-item" style="">
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Accusamus amet aspernatur consequatur corporis deserunt
                            </p>
                            <p class="autor">- Jack W., Phoenix, AZ</p>
                        </div>
                        <div class="owl-item" style="">
                            <p>"My clients loved the trip! Everything worked out so well. All the guides were excellent,
                                but they especially liked the one in Kyoto. Thanks for all your help!"
                            </p>
                            <p class="autor">- Jack W., Phoenix, AZ</p>
                        </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="clear"></div>
            <div id=""  class="block_content">
                <div class="wrap">
                    <h3></h3>
                    <p></p>
                    <a href="#">
                        <span class="btnb details">Find out more</span>
                    </a>
                </div>
            </div>
    
            <div class="clear"></div>
            <div class="viaje">
                <img src="/wp-content/uploads/2016/04/bag.png" alt="" class="bag">
                <div class="v_left">
                    <?php if (function_exists('dynamic_sidebar'))
                        dynamic_sidebar('accordion'); ?>
                </div>
                <div class="v_center">
                    <h3>Direct access to </h3>
                    <ul>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/signature.png" alt="">
                        <li>
                            <a href="/booking-terms-conditions/">Booking Terms & Conditions</a>
                        </li>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/transport.png" alt="">
                        <li>
                            <a href="/getting-there-by-plane/">Getting there by plane</a>
                        </li>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/transport2.png" alt="">
                        <li>
                            <a href="/our-transport/">Our Transport</a>
                        </li>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/three.png" alt="">
                        <li>
                            <a href="/small-groups/">Small Groups</a>
                        </li>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/tool.png" alt="">
                        <li>
                            <a href="/currency/">Currency</a>
                        </li>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/document.png" alt="">
                        <li>
                            <a href="/visa/">Visa</a>
                        </li>

                    </ul>
                </div>
                <div class="v_right">
                    <div class="button top">
                        <div id="c3373" class="csc-default teaser image-link-only">
                            <div class="csc-textpic csc-textpic-intext-right">
                                <div class="csc-textpic-imagewrap">
                                    <div class="csc-textpic-image csc-textpic-last">
                                        <img src="/wp-content/uploads/2016/04/touroperators.jpg" alt="">
                                    </div>
                                </div>
                                <h4>Info for touroperators</h4>
                            </div>
                        </div>

                    </div>
                    <div class="button bottom">
                        <div id="c3373" class="csc-default teaser image-link-only">
                            <div class="csc-textpic csc-textpic-intext-right">
                                <div class="csc-textpic-imagewrap">
                                    <div class="csc-textpic-image csc-textpic-last">
                                        <img src="/wp-content/uploads/2016/04/Payment.jpg" alt="">
                                    </div>
                                </div>
                                <h4>Payment</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    <?php endwhile; endif; ?>


</div><!--widecolumn-->
</div> <!--wrap-main-->


<?php
get_footer('min');

?>
