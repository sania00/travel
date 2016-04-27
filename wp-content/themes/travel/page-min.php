<?php
/*
Template Name: PageMin
*/
?>

<?php get_header("min"); ?>

<div id="content" class="widecolumn">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php if (is_front_page()):
            require_once 'front-page-min.php';
        endif; ?>
    <?php endwhile; endif; ?>

</div><!--widecolumn-->
</div> <!--wrap-main-->

<?php get_footer('min'); ?>
