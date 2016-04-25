<?php
get_header(); ?>

    <img class="bg_arhive" src="<?php echo get_template_directory_uri(); ?>/img/top-bg2.jpg" alt="">

    <div class="main_text">
        <p>Brazil's Unique Nature Brazil is home to the Amazon Rainforest, the Amazon River, and all
            the treasures and animals unique to this habitat. The nature in Brazil is one of the last
            few places in this modern world where you can immerse yourself in a natural habitat. For
            this reason many come to Brazil to escape their busy city homes and bask in the scenery.
            Here are some ideas of great places to experience nature. High quality global journalism
            requires investment. Please share this article with others using the link below, do not
            cut & paste the article. See our Ts&Cs and Copyright Policy for more detail.
            Email info@brazil.com to buy additional rights.
            http://brazil.com/home/travel/travel-ideas/nature/</p>
    </div>

    <div id="content" class="widecolumn">
        <div class="content_archive">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="post">
                    <div class="title">
                        <h2><?php echo get_the_title( $post ) ?></h2>
                    </div>

                    <div class="pre">
                        <?php echo get_the_post_thumbnail( $post->$id, 'thumbnail' );?>
                    </div>

                    <div class="">
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php endwhile; endif; ?>
        </div>


    </div><!--widecolumn-->
    </div> <!--wrap-main-->


<?php
get_footer();?>