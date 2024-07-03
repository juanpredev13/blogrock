<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package netforemost
 */

?>

<footer class="footer">
    <div class="footer__container container">
        <div class="footer__logo-section">
            <div class="header__logo">
                <?php if ( has_custom_logo() ) : ?>
                <?php the_custom_logo(); ?>
                <?php else : ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <img src="<?php echo get_template_directory_uri(); ?>" alt="<?php bloginfo( 'name' ); ?> Logo" />
                </a>
                <?php endif; ?>
            </div>
            <p class="footer__description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                quis eros sed risus sollicitudin fringilla dictum in metus. Sed
                ultrices mauris a facilisis varius.
            </p>
            <div class="footer__social">
                <a href="#" class="footer__social-link"><img src="<?php echo get_site_url() ?>/wp-content/uploads/2024/07/facebook.png" alt="Facebook" /></a>
                <a href="#" class="footer__social-link"><img src="<?php echo get_site_url() ?>/wp-content/uploads/2024/07/twitter.png" alt="Twitter" /></a>
                <a href="#" class="footer__social-link"><img src="<?php echo get_site_url() ?>/wp-content/uploads/2024/07/instagram.png" alt="Instagram" /></a>
            </div>
        </div>
        <div class="footer__links">
            <div class="footer__links-section">
                <h3 class="footer__links-title">About me</h3>
                <ul class="footer__links-list">
                    <li><a href="#" class="footer__link">My Team</a></li>
                    <li><a href="#" class="footer__link">History</a></li>
                    <li><a href="#" class="footer__link">My Products</a></li>
                    <li><a href="#" class="footer__link">Blogging</a></li>
                </ul>
            </div>
            <div class="footer__links-section">
                <h3 class="footer__links-title">Resources</h3>
                <ul class="footer__links-list">
                    <li><a href="#" class="footer__link">Webinars</a></li>
                    <li><a href="#" class="footer__link">Courses</a></li>
                    <li><a href="#" class="footer__link">Books</a></li>
                    <li><a href="#" class="footer__link">Marketing</a></li>
                </ul>
            </div>
            <div class="footer__links-section">
                <h3 class="footer__links-title">Contact</h3>
                <ul class="footer__links-list">
                    <li><a href="#" class="footer__link">Privacy Policy</a></li>
                    <li><a href="#" class="footer__link">Terms of use</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer__bottom container">
        <p>BlogRock © <?php echo date('Y'); ?> All Right Reserved</p>
    </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>