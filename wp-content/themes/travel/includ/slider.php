<div class="owl-carousel">
    <div class="owl-item" style="width: 700px;">
        <div class="vv vv_my1">
            <?php $posts = get_posts("category=4&orderby=date&numberposts=4"); ?>
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
                            <span class="content hidden" atr="<?php the_ID(); ?>"><?php the_content(); ?></span>
                            <span class="id hidden" atr="<?php the_ID(); ?>"><?php the_content(); ?></span>
                        </a>
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
            <?php $posts = get_posts("category=5&orderby=date&numberposts=4"); ?>
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
                            <span class="content hidden" atr="<?php the_ID(); ?>"><?php the_content(); ?></span>
                        </a>
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
            <?php $posts = get_posts("category=6&orderby=date&numberposts=4"); ?>
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
                            <span class="content hidden" atr="<?php the_ID(); ?>"><?php the_content(); ?></span>
                        </a>
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
                            <span class="content hidden" atr="<?php the_ID(); ?>"><?php the_content(); ?></span>
                        </a>
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
                            <span class="content hidden" atr="<?php the_ID(); ?>"><?php the_content(); ?></span>
                        </a>
                    </div>
                    <?php
                endforeach;
                wp_reset_postdata();
                ?>
            <?php endif; ?>
        </div>
    </div>
</div>