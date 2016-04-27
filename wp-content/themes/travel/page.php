<?php get_header(); ?>
<div id="content" class="widecolumn">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="post">
            <div class="entrytext">
                <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

            </div>
        </div>
    <?php endwhile; endif; ?>

</div><!--widecolumn-->
</div> <!--wrap-main-->

<?php get_footer();?>
