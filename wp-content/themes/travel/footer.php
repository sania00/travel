<footer>
    <div class="logo-min">
        <a href="<?php echo home_url(); ?>">
            <?php if (function_exists('dynamic_sidebar'))
                dynamic_sidebar('logo'); ?>
        </a>
    </div>
</footer>
<div class="hidden"></div>
<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
<!-- Google Analytics counter --><!-- /Google Analytics counter -->

<?php wp_footer();?>
</body>
</html>