<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package netforemos
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main container">

    <?php
    while ( have_posts() ) :
        the_post();
        ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <?php
                the_title( '<h1 class="entry-title">', '</h1>' );
                ?>
                <div class="hero__image">
                    <img src="<?php echo get_site_url() ?>/wp-content/uploads/2024/07/Large-Asymetric.png" alt="Team working in an office" />
                </div>
            </header><!-- .entry-header -->

            <div class="entry-content">
                <?php
                the_content();

                wp_link_pages(
                    array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'netforemost' ),
                        'after'  => '</div>',
                    )
                );
                ?>
            </div><!-- .entry-content -->
        </article><!-- #post-<?php the_ID(); ?> -->

        <?php
        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;

    endwhile; // End of the loop.
    ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
