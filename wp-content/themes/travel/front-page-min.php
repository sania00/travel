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

        <!--<div id="tab">
            <ul>
                <li><a href="#tab-1">BALENOPTERA ACUTOROSTRATA</a></li>
                <li><a href="#tab-2">WHALE SHARK</a></li>
            </ul>
            <div id="tab-1">

                <img class="lazy alignleft size-full wp-image-1259" style="display: block;" src="/wp-content/uploads/2016/05/rorqual.jpg" alt="rorqual" width="180" height="135" data-original="http://www.ulyssexplorer.com/wp-content/uploads/2013/07/rorqual.jpg" />
                <strong>Between October and January it is possible to spot Balaenoptera acutorostrata:</strong> spanning a length of some 8-10 m, it weighs up to 9 tons. It is a splendid specie that is among those hunted by Japanese, Norwegians and Icelandics. They catch hundred of it a year to do “some studies”…

            </div>
            <div id="tab-2">

                <img class="lazy alignleft size-full wp-image-1276" style="display: inline;" src="/wp-content/uploads/2016/05/requin-baleine-ulysse-explorer-madagascar.jpg" alt="requin-baleine-ulysse-explorer-madagascar" width="180" height="135" data-original="http://www.ulyssexplorer.com/wp-content/uploads/2013/07/requin-baleine-ulysse-explorer-madagascar.jpg" /><strong>It weighs as much as 30 tons, its mouth can be up to 1.5 m wide and its skin can have 10 cm thick. It’s the whale shark, Rhincodon typus. </strong>Despite the misleading reference, it is a shark – whose name highlights its big dimensions and its physiology looking like those of whales, but eats plankton and small fish as two other unique species: the Megachasma pelagios, A very rare shark seen only during 9 episodes in 1976, and the cetorino, elephant shark. The whale shark lives in Nosy-Be and it won’t be difficult to spot it during journeys on boat. When it is possible, we slide into deep to inspect and to take photos. <a title="Whale shark videos" href="http://www.ulyssexplorer.com/en/whale-shark-videos/">watch whale shark videos</a>

            </div>
        </div>-->


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
        <div class="promo">
            <div class="owl-carousel2">
                <div class="owl-item">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Accusamus amet aspernatur consequatur corporis deserunt
                    <p class="autor">- Jack W., Phoenix, AZ</p>
                </div>
                <div class="owl-item">
                    "My clients loved the trip! Everything worked out so well. All the guides were excellent,
                    but they especially liked the one in Kyoto. Thanks for all your help!"
                    <p class="autor">- Jack W., Phoenix, AZ</p>
                </div>
            </div>
        </div>

    </div>
    <div class="clear"></div>
    <div id="" class="block_content">
        <div class="wrap text_product">
            <h3></h3>
            <div class="text_sleder"></div>

            <div id="tabs" style="float: left;display: none;">
                <ul>
                    <li><a href="#tabs-1" id="first_title"></a></li>
                    <li><a href="#tabs-2" id="two_title"></a></li>
                </ul>
                <div id="tabs-1"></div>
                <div id="tabs-2"></div>

            </div>

            <div class="button-add-to-cart"></div>
            <div class="clear"></div>
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