<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package netforemost
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'netforemost' ); ?></a>

	<header class="header">
    <div class="header__container container">
        <div class="header__logo">
            <?php if ( has_custom_logo() ) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <img src="<?php echo get_template_directory_uri(); ?>" alt="<?php bloginfo( 'name' ); ?> Logo" />
                </a>
            <?php endif; ?>
        </div>
        <nav class="header__nav">
            <button class="hamburger" id="hamburger">
                <span class="hamburger__line"></span>
                <span class="hamburger__line"></span>
                <span class="hamburger__line"></span>
            </button>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'navList',
                    'container'      => false,
                    'menu_class'     => 'nav__list',
                )
            );
            ?>
			<li class="nav__item nav__item--search">
				<a href="#"><img src="<?php echo get_site_url() ?>/wp-content/uploads/2024/07/search-menu.png" alt="Search" class="nav__search-icon"></a>
			</li>
            <!-- Menú móvil -->
            <div class="nav__list-mobile" id="navList-mobile">
                <div class="mobile-header">
                    <div class="mobile-logo">
                        <img src="<?php echo get_site_url() ?>/wp-content/uploads/2024/07/Logo.png" alt="BlogRock Logo" />
                    </div>
                    <span class="closebtn" id="closebtn">&times;</span>
                </div>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'mobile-menu',
                        'container'      => false,
                        'menu_class'     => 'mobile-menu',
                    )
                );
                ?>
            </div>
        </nav>
    </div>
</header>


