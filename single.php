<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<div class="wrapper">

    <section class="header-section"></section>

    <main class="site-main" id="main">

        <?php while ( have_posts() ) : the_post(); ?>

            <div class="text-center mb-3 mb-md-5">
                <?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
            </div>

            <div class="<?php echo esc_html( $container ); ?>" tabindex="-1">

                <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

                    <header class="entry-header">

                        <?php the_title( '<h1 class="entry-title brand-blue text-uppercase text-center">', '</h1>' ); ?>

                        <div class="entry-meta brand-thin text-center">

                            <?php understrap_posted_on(); ?>

                        </div><!-- .entry-meta -->

                    </header><!-- .entry-header -->

                    <div class="entry-content my-4">

                        <div class="brand-thin text-justify">
                            <?php the_content(); ?>
                        </div>

                        <?php
                        wp_link_pages( array(
                            'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
                            'after'  => '</div>',
                        ) );
                        ?>

                    </div><!-- .entry-content -->

                </article><!-- #post-## -->

                <div class="">
                    <?php understrap_post_nav(); ?>
                </div>

            </div>

        <?php endwhile; // end of the loop. ?>

    </main><!-- #main -->

    <hr>

    <section class="pt-3 pb-1 pt-md-5 pt-md-3">

        <div class="<?php echo esc_html( $container ); ?>" tabindex="-1">

            <div class="h3 brand-blue text-uppercase text-center">Recent Blog Posts</div>

            <?php echo do_shortcode("[pt_view id=6295581d90]"); ?>

        </div>

    </section>

</div><!-- Wrapper end -->

<?php get_footer(); ?>
