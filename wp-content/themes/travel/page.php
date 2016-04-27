<?php get_header(); ?>
<div id="content" class="widecolumn">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        <div class="post">
            <div class="entrytext">
                <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
                   <div class="wrap_text">
                       <p>Brazil's Unique Nature Brazil is home to the Amazon Rainforest, the Amazon River, and all the treasures and animals<br />
                           unique to this habitat. The nature in Brazil is one of the last few places in this modern world where you can immerse<br />
                           yourself in a natural habitat. For this reason many come to Brazil to escape their busy city homes and bask in the scenery.<br />
                           Here are some ideas of great places to experience nature. High quality global journalism requires investment. Please share <br />
                           this article with others using the link below, do not cut & paste the article. See our Ts&Cs and Copyright Policy for more<br />
                           detail. Email info@brazil.com to buy additional rights.
                           http://brazil.com/home/travel/travel-ideas/nature/</p>
                   </div>
                <div class="map">
                    
                </div>
            </div>
        </div>
    <?php endwhile; endif; ?>

</div><!--widecolumn-->
</div> <!--wrap-main-->

<?php get_footer();?>
