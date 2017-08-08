<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

?>

<div id="page-wrapper">

    <section class="header-section"></section>

    <?php include('content-sections.php'); ?>

</div><!-- Wrapper end -->

<?php

	$location = get_field('google_map','option');
	$place = get_field('google_places_id','option');

	if( !empty($location) ):

?>

<div class="acf-map">
    <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-place="<?php echo $place; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
</div>

<?php endif; ?>

<?php get_footer(); ?>
