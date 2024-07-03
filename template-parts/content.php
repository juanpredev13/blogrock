<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package netforemost
 */

?>

<main class="main-content">
    <!-- Hero -->
    <section class="hero">
        <div class="hero__container">
            <div class="hero__text">
                <span class="hero__label">Analytics</span>
                <h1 class="hero__title">
                    Many desktop publishing packages and web page
                </h1>
                <p class="hero__description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    quis eros sed risus sollicitudin fringilla dictum in metus.
                </p>
            </div>
            <div class="hero__image">
                <img src="/wp-content/uploads/2024/07/Large-Asymetric.png" alt="Team working in an office" />
            </div>
        </div>
    </section>
    <!-- Features -->
<section class="features">
    <div class="features__container container">
        <?php
        // Definir la consulta WP_Query para cpt_article
        $args = array(
            'post_type'      => 'cpt_article',
            'posts_per_page' => 3,
        );

        // Ejecutar la consulta
        $query = new WP_Query( $args );


        // Verificar si hay posts
        if ( $query->have_posts() ) :

            while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="feature">
                    <div class="feature__icon">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail( 'full', array( 'alt' => get_the_title() ) ); ?>
                        <?php else : ?>
                            <img src="<?php echo get_site_url() ?>/wp-content/uploads/2024/07/default.png" alt="<?php the_title(); ?>" />
                        <?php endif; ?>
                    </div>
                    <h2 class="feature__title"><?php the_title(); ?></h2>
                    <p class="feature__description">
                        <?php echo wp_trim_words( get_the_content(), 20, '...' ); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="feature__button">Read Articles</a>
                </div>
            <?php endwhile;
            // Restaurar datos post originales
            wp_reset_postdata();
        else : ?>
            <!-- Debug: Mostrar mensaje de error -->
            <p><?php esc_html_e( 'No articles found.', 'mi-tema-personalizado' ); ?></p>
        <?php endif; ?>
    </div>
</section>


    <!-- Nueva sección de artículos -->
    <section class="latest-articles">
        <h2 class="latest-articles__title">Latest Articles</h2>
        <div class="latest-articles__container container">
            <article class="article">
                <div class="article__image">
                    <img src="<?php echo get_site_url() ?>/wp-content/uploads/2024/07/Small-Size.png" alt="Article" />
                </div>
                <div class="article__content">
                    <span class="article__label">Analytics</span>
                    <h3 class="article__title">
                        Many desktop publishing packages and web page
                    </h3>
                    <p class="article__date">Added: 23 October 2020</p>
                    <p class="article__description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Maecenas quis eros sed risus sollicitudin fringilla dictum in
                        metus.
                    </p>
                    <div class="article__author">
                        <img src="<?php echo get_site_url() ?>/wp-content/uploads/2024/07/Men.png" alt="Author Icon" class="article__author-icon" />
                        <span>Anna Profeska</span>
                    </div>
                </div>
            </article>
            <article class="article">
                <div class="article__image">
                    <img src="<?php echo get_site_url() ?>/wp-content/uploads/2024/07/Small-Size.png" alt="Article" />
                </div>
                <div class="article__content">
                    <span class="article__label">Analytics</span>
                    <h3 class="article__title">
                        Many desktop publishing packages and web page
                    </h3>
                    <p class="article__date">Added: 23 October 2020</p>
                    <p class="article__description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Maecenas quis eros sed risus sollicitudin fringilla dictum in
                        metus.
                    </p>
                    <div class="article__author">
                        <img src="<?php echo get_site_url() ?>/wp-content/uploads/2024/07/Men.png" alt="Author Icon" class="article__author-icon" />
                        <span>Anna Profeska</span>
                    </div>
                </div>
            </article>
            <article class="article">
                <div class="article__image">
                    <img src="<?php echo get_site_url() ?>/wp-content/uploads/2024/07/Small-Size.png" alt="Article" />
                </div>
                <div class="article__content">
                    <span class="article__label">Analytics</span>
                    <h3 class="article__title">
                        Many desktop publishing packages and web page
                    </h3>
                    <p class="article__date">Added: 23 October 2020</p>
                    <p class="article__description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Maecenas quis eros sed risus sollicitudin fringilla dictum in
                        metus.
                    </p>
                    <div class="article__author">
                        <img src="<?php echo get_site_url() ?>/wp-content/uploads/2024/07/Men.png" alt="Author Icon" class="article__author-icon" />
                        <span>Anna Profeska</span>
                    </div>
                </div>
            </article>
            <article class="article">
                <div class="article__image">
                    <img src="<?php echo get_site_url() ?>/wp-content/uploads/2024/07/Small-Size.png" alt="Article" />
                </div>
                <div class="article__content">
                    <span class="article__label">Analytics</span>
                    <h3 class="article__title">
                        Many desktop publishing packages and web page
                    </h3>
                    <p class="article__date">Added: 23 October 2020</p>
                    <p class="article__description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Maecenas quis eros sed risus sollicitudin fringilla dictum in
                        metus.
                    </p>
                    <div class="article__author">
                        <img src="<?php echo get_site_url() ?>/wp-content/uploads/2024/07/Men.png" alt="Author Icon" class="article__author-icon" />
                        <span>Anna Profeska</span>
                    </div>
                </div>
            </article>
        </div>
    </section>
    <!-- Nueva sección de About Us -->
    <section class="about-us">
        <div class="about-us__container container">
            <div class="about-us__image">
                <img src="<?php echo get_site_url() ?>/wp-content/uploads/2024/07/Team.png" alt="About Us" />
            </div>
            <div class="about-us__content">
                <h2 class="about-us__label">About US</h2>
                <h1 class="about-us__title">Heading Title</h1>
                <p class="about-us__description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                    vehicula libero nec ipsum bibendum rhoncus. In fermentum non orci
                    nec pellentesque. Donec sollicitudin feugiat ante, vel feugiat
                    dolor porta eu. Pellentesque elementum ligula metus, id sagittis
                    ligula sagittis nec.
                </p>
                <a href="#" class="about-us__button">Learn More</a>
            </div>
        </div>
    </section>
    <!-- Nueva sección de Newsletter -->
    <section class="newsletter">
        <div class="newsletter__container container">
            <h2 class="newsletter__title">Newsletter</h2>
            <p class="newsletter__description">
                Subscribe my Newsletter for new blog posts, tips & new photos. Let's
                stay updated!
            </p>
            <form class="newsletter__form">
                <input type="email" class="newsletter__input" placeholder="Your e-mail *" />
                <button type="submit" class="newsletter__button">Subscribe</button>
            </form>
        </div>
    </section>
</main>