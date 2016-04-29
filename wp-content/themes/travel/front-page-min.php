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
                <?php require_once('includ/slider.php'); ?>
            </div>
        </div>

    </div>
    <div class="main_right">

        <!--main page right column -->
        <?php $posts = get_posts("category=9&orderby=date&numberposts=4"); ?>
        <?php if ($posts) : ?>
            <?php foreach ($posts as $post) : setup_postdata($post); ?>
                <?php the_content(); ?>
            <?php endforeach;
            wp_reset_postdata(); ?>
        <?php endif; ?>

    </div>
    <div class="clear"></div>
    <div id="" class="block_content">
        <div class="wrap">
            <h3></h3>
            <div class="text_sleder"></div>
            <a href="#" class="btn_bottom_content">
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
            <img class="arrow" src="/wp-content/themes/travel/img/arrow-down.png" alt="">
            <ul>
                <img src="/wp-content/themes/travel/img/signature.png" alt="">
                <li>
                    <img class="arrow-right" src="/wp-content/themes/travel/img/arrow-right.png" alt="">
                    <a href="/booking-terms-conditions/">Booking Terms & Conditions</a>
                </li>
                <img src="/wp-content/themes/travel/img/transport.png" alt="">
                <li>
                    <img class="arrow-right" src="/wp-content/themes/travel/img/arrow-right.png" alt="">
                    <a href="/getting-there-by-plane/">Getting there by plane</a>
                </li>
                <img src="/wp-content/themes/travel/img/transport2.png" alt="">
                <li>
                    <img class="arrow-right" src="/wp-content/themes/travel/img/arrow-right.png" alt="">
                    <a href="/our-transport/">Our Transport</a>
                </li>
                <img src="/wp-content/themes/travel/img/three.png" alt="">
                <li>
                    <img class="arrow-right" src="/wp-content/themes/travel/img/arrow-right.png" alt="">
                    <a href="/small-groups/">Small Groups</a>
                </li>
                <img src="/wp-content/themes/travel/img/tool.png" alt="">
                <li>
                    <img class="arrow-right" src="/wp-content/themes/travel/img/arrow-right.png" alt="">
                    <a href="/currency/">Currency</a>
                </li>
                <img src="/wp-content/themes/travel/img/document.png" alt="">
                <li>
                    <img class="arrow-right" src="/wp-content/themes/travel/img/arrow-right.png" alt="">
                    <a href="/visa/">Visa</a>
                </li>
                <img src="/wp-content/themes/travel/img/document.png" alt="">
                <li>
                    <img class="arrow-right" src="/wp-content/themes/travel/img/arrow-right.png" alt="">
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