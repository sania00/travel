<?php get_header(); ?>
<div id="content" class="widecolumn">
    <?php
    if (have_posts()) : while (have_posts()) :
    the_post(); ?>
    <div class="post">
        <div class="entrytext">
            <?php the_content(); ?>
            <div class="main_container">
                <div class="main_left">
                </div>
                <div class="main_right">
                    
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
