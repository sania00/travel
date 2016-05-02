<div class="owl-carousel">
    <div class="owl-item" style="width: 700px;">
        <div class="vv vv_my1">
            <?php
            // the arguments
            $args = array(
                'product_cat' => 'slider1',
                'post_type' => 'product'
            );
            // assign arguments to new WP_Query
            $loop = new WP_Query($args);
            // start the loop
            while ($loop->have_posts()) :
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
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
    <div class="owl-item" style="width: 700px;">
        <div class="vv vv_my1">
            <?php
            // the arguments
            $args = array(
                'product_cat' => 'slider2',
                'post_type' => 'product'
            );
            // assign arguments to new WP_Query
            $loop = new WP_Query( $args );
            // start the loop
            while( $loop->have_posts() ) :
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
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>


    <div class="owl-item" style="width: 700px;">
        <div class="vv vv_my1">
           <!-- <?php /*$posts = get_posts("category=6&orderby=date&numberposts=4"); */?>
            <?php /*if ($posts) : */?>
                <?php /*foreach ($posts as $post) : setup_postdata($post); */?>

                    <div class="terrr">

                        <a href="#<?php /*the_ID(); */?>">
                            <?php /*if (has_post_thumbnail()) {
                                the_post_thumbnail();
                            } else {
                                */?>
                                <img src="<?php /*echo get_template_directory_uri(); */?>/img/imageNotFound.jpg"
                                     alt="imageNotFound">
                            <?php /*}; */?>
                            <h4 class="nazv_nazv"><?php /*the_title(); */?></h4>
                                                    <span class="wrap_ex">
                                                        <?php /*the_excerpt(); */?>
                                                    </span>
                            <p class="read_mere"><span> Read more...</span></p>
                        </a>
                        <span class="content hidden" atr="<?php /*the_ID(); */?>"><?php /*the_content(); */?></span>
                    </div>
                    <?php
/*                endforeach;
                wp_reset_postdata();
                */?>
            --><?php /*endif; */?>


        </div>
    </div>

    <div class="owl-item" style="width: 700px;">
        <div class="vv vv_my1">
            <?php $posts = get_posts("category=7&orderby=date&numberposts=4"); ?>
            <?php if ($posts) : ?>
                <?php foreach ($posts as $post) : setup_postdata($post); ?>
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
                    <?php
                endforeach;
                wp_reset_postdata();
                ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="owl-item" style="width: 700px;">
        <div class="vv vv_my1">
            <?php $posts = get_posts("category=8&orderby=date&numberposts=4"); ?>
            <?php if ($posts) : ?>
                <?php foreach ($posts as $post) : setup_postdata($post); ?>
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
                    <?php
                endforeach;
                wp_reset_postdata();
                ?>
            <?php endif; ?>
        </div>
    </div>
</div>