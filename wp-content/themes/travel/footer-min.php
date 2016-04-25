<footer id="footer-min">
    <div class="logo-min">
        <a href="<?php echo home_url(); ?>">
            <?php if (function_exists('dynamic_sidebar'))
                dynamic_sidebar('logo'); ?>
        </a>
    </div>
    <div class="center">
        <h3>CONTACT US TODAY</h3>
        <img src="<?php echo get_template_directory_uri(); ?>/img/skype.png" alt="">
        <p class="skype">ndao-i-travel</p>
        <p>Make a call order, and we will call you back. <br>
            (8 am - 8 pm GMT)</p>
    </div>
    <div class="right">
        <h3>Join Our Conversation</h3>
        <div class="share">
            <img src="<?php echo get_template_directory_uri(); ?>/img/share.png" alt="">
        </div>
    </div>
</footer>
<div class="hidden"></div>
<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
<!-- Google Analytics counter --><!-- /Google Analytics counter -->

<?php wp_footer();?>
</body>
</html>