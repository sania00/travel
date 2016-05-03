<div class="owl-carousel">
    <?php
    $i = 1;
    while ($i < 6):

    ?>
    <div class="owl-item" style="width: 700px;">
        <div class="vv vv_my1">
            <?php
            $lang = $_GET['lang'];

            // the arguments
            $args = array(
                'product_cat' => 'slider'. $i,
                'post_type' => 'product'
            );

            // Get param Language

            if ($lang){
                switch ($lang){
                    case 'ru':
                        $args = array(
                            'product_cat' => 'slider'. $i .'-ru',
                            'post_type' => 'product'); break;
                    case 'zh-hant':
                        $args = array(
                            'product_cat' => 'slider'. $i .'-zh-hant',
                            'post_type' => 'product'); break;
                }
            }

            // assign arguments to new WP_Query
            $loop = new WP_Query($args);
            // start the loop
            while ($loop->have_posts()) {
                $loop->the_post();
                ?>

                <div class="terrr">
                    <a href="#<?php the_ID(); ?>">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail();
                        } else {
                            ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/imageNotFound.jpg"
                                 alt="imageNotFound">
                        <?php }; ?>
                        <h4 class="nazv_nazv"><?php the_title(); ?></h4>
                                                    <span class="wrap_ex">
                                                        <?php the_excerpt(); ?>
                                                    </span>
                        <p class="read_mere"><span> Read more...</span></p>

                    </a>
                    <span class="content hidden" atr="<?php the_ID(); ?>"><?php the_content(); ?></span>

                </div>
            <?php }
            wp_reset_postdata(); ?>
        </div>
    </div>
    <?php
    $i++;
    endwhile; ?>

</div>