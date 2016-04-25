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

                        <!--<div class="owl-item" style="">
                            <p>"distinctio dolores dolorum esse est iure, nulla omnis pariatur
                                quae qui quisquam ratione reprehenderit ullam vero.
                            </p>
                            <p class="autor">- Jack W., Phoenix, AZ</p>
                        </div>
                        <div class="owl-item" style="">
                            <p>"e one in Kyoto. Thanks for all your help!"
                            </p>
                            <p class="autor">- Jack W., Phoenix, AZ</p>-->
                        </div>
                    </div>
                </div>

            </div>
            <div class="clear"></div>
            <!--<div class="block_content">
                <h3>BIRDWATCHERS’ HEAVEN</h3>
                <p>In Madagascar, birds can score endemism rates that are rarely achieved elsewhere. While 293 recorded
                    species can seem low, more than half of them are endemic. Among them are the ground dwelling Giant
                    Coua, the Crested Coua, commonly considered as the most beautiful bird on the Island, or the
                    Vangas recognizable from their hooked beak. There are also 20 species of raptors, including the Red
                    Owl and the Madagascar Fish Eagle which is similar to the American Bald Eagle. The Vangidae are also
                    part of this list of endemic birds; they diversify into 14 species which can be differentiated by
                    size,
                    color and beak shape. The best season for bird watching is from October through December, when
                    birds,
                    through their songs, can be more easily spotted in the forests. <span>Several National Parks like Andasibe,
                    Ankarafantsika, Ranomafana, Montagne d'Ambre are very popular bird watching sites.</span> Those who
                    prefer
                    large bird crowds can chose between several coastal sites (Ramena near Diégo Suarez, the Baie de
                    Baly in the Majunga region, Nosy Ve and Tsimanampesotse in Tuléar.)</p>

                <a href="#">
                    <span class="btnb details">Find out more</span>

                </a>

            </div>-->
    
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
