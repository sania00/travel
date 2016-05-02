<?php get_header(); ?>
<div id="content" class="widecolumn">
    <?php if (have_posts()) : while (have_posts()) :
    the_post(); ?>

    <div class="post">
        <div class="entrytext">
            <div class="wrap_wishlist">
                <img src="/wp-content/uploads/2016/04/wishlist.jpg" alt="">
                <h3 class="text-h3">Wishlist<br>
                    of<span class="small"> Madagascar</span></h3>
                <div class="main_h3"></div>
            </div>
            <div class="wrap_wishlist">
                <div class="main_container">
                    <div class="main_left">
                        <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>


                        <!--<div class="selection">
                            <img src="/wp-content/uploads/2016/04/123.png" alt="">
                            <h3 class="title">BIRDWATCHING</h3>
                            <div class="btn">delete</div>
                        </div>-->


                        <!--[woocommerce_cart]-->
                    </div>

                    <?php /*require_once ('includ/form-wishlist.php');*/ ?>


                </div>
                <div class="main_right">

                    <div class="assoc">
                        <a href="http://www.top-madagascar.com/">
                            <img src="/wp-content/uploads/2016/04/logo-top-madagascar.jpg" alt="">
                        </a>

                        <p>We are a member of the Top-Madagascar <br/>
                            NDAO-i-Travel Inbaund Tour Operator</p>
                    </div>


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
            </div>
        </div>

    </div>
</div>
<?php endwhile;
endif; ?>

</div><!--widecolumn-->
</div> <!--wrap-main-->
<?php get_footer(); ?>
