<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package luna
 */

?>
<footer class="main-footer color-bg">
    <div class="container">
        <div class="d-flex">
            <div class="w-50 footer-text-container">
                <img src="<?php echo get_theme_mod('footer_logo') ?>">
                <p class="light-text footer-text"><?php echo get_theme_mod('footer_text') ?></p>
            </div>
            <a href="" class="main-button"></a>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
