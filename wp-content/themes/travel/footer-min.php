<footer id="footer-min">
    <div class="logo-min">
        <a href="<?php echo home_url(); ?>">
            <?php if (function_exists('dynamic_sidebar'))
                dynamic_sidebar('logo'); ?>
        </a>
    </div>
    <div class="center">
        <?php if (function_exists('dynamic_sidebar'))
            dynamic_sidebar('contact-today'); ?>
    </div>
    <div class="right">
        <h3>Join Our Conversation</h3>
        <div class="share">
            <a href="https://www.facebook.com/NdaoiTravel/" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/img/fb.png" alt="">
            </a>
            <a href="https://twitter.com/ndaoitravel" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/img/tw.png" alt="">
            </a>
            <a href="https://plus.google.com/u/0/101425866917459496588" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/img/g.png" alt="">
            </a>
            <a href="http://ndaoitravel.livejournal.com/" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/img/live.png" alt="">
            </a>
            <a href="https://www.instagram.com/ndaoitravel/" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/img/inst.png" alt="">
            </a>
            <a href="https://www.linkedin.com/in/ndaoitravel-madagascar-35964511b" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/img/in.png" alt="">
            </a>
            <a href="https://www.youtube.com/channel/UC_-LtoGE78YR0NPr9cDF3Lg" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/img/you.png" alt="">
            </a>

        </div>
    </div>
</footer>
<div class="hidden"></div>
<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
<!-- Google Analytics counter --><!-- /Google Analytics counter -->

<?php wp_footer();?>
</body>
</html>