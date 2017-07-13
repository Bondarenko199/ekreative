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
        <div class="d-flex justify-content-center justify-content-md-start footer-logo-container margin">
            <img src="<?php echo get_theme_mod( 'footer_logo' ) ?>">
        </div>
        <div class="row justify-content-center justify-content-md-between align-items-start footer-text-container margin">
            <p class="col-md-6 col-sm-12 text-center text-md-left main-text light-text footer-text margin"><?php echo get_theme_mod( 'footer_text' ) ?></p>
            <div class="col-md-6 text-center text-md-right contact-button-container">
                <a href="" class="main-button d-inline-block"><?php echo get_theme_mod( 'contact_button_text' ) ?></a>
            </div>
        </div>
        <div class="row flex-column flex-md-row justify-content-between copyrights-container">
            <p class="text-center text-md-left light-text"><?php _e( 'Copyright © 2015. <span class="color-text">LUNA STUDIO</span>. All rights reserved.' ) ?></p>
            <p class="text-center text-md-right light-text"><?php _e( 'DESIGNED with <span class="fa fa-heart color-text">' ) ?></span> BY SYMU.CO</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
