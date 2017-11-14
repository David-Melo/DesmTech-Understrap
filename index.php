<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero', 'none' ); ?>
<?php endif; ?>

<div class="wrapper site-main posts" id="wrapper-index">

	<section class="header-section"></section>

    <?php include('content-sections-blog.php'); ?>

	<div class="container-fluid" tabindex="-1">

        <main class="" id="main">

            <?php if ( have_posts() ) : ?>

                <?php /* Start the Loop */ ?>

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php

                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part( 'loop-templates/content', get_post_format() );
                    ?>

                <?php endwhile; ?>

            <?php else : ?>

                <?php get_template_part( 'loop-templates/content', 'none' ); ?>

            <?php endif; ?>

        </main><!-- #main -->

        <!-- The pagination component -->
        <?php understrap_pagination(); ?>


    </div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
