<?php
/**
 * Template Name: Empty Page Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

get_header();

$page_container = 'container';

if( get_field('page_container','option') ) {
    $page_container = get_field('page_container','option') ;
}



?>

<div id="page-wrapper">

    <section class="header-section"></section>

    <?php include('content-sections.php'); ?>

    <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'loop-templates/content', 'empty' ); ?>
    <?php endwhile; ?>

</div><!-- Wrapper end -->

<?php get_footer(); ?>
