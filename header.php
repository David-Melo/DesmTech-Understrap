<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */


$nav_container = 'container';

if( get_field('nav_container','option') ) {
	$nav_container = get_field('nav_container','option');
}

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <?php the_field('gtm_1','option'); ?>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>

	<style>

		<?php include('styles.php'); ?>

	</style>

    <link rel='stylesheet' href='<?= get_template_directory_uri() . '/css/fonts/gotham-stylesheet.css' ;?>' type='text/css' media='all' />

</head>

<body <?php body_class(); ?>>

<?php the_field('gtm_2','option'); ?>

<div class="body-overlay"></div>

<header>

	<section id="header-bar" class="site-bar clearfix">

		<div class="container-fluid">

				<a class="float-sm-left hidden-xs-down" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?= get_field('site_heading','option') ?></a>

				<ul class="social-menu float-md-right d-flex justify-content-between">
					<?php if( get_field('facebook_url','option') ): ?>
					<li class="menu-item col"><a class="nav-link text-center" href="<?php the_field('facebook_url','option'); ?>" title="Find Us On Facebook" target="_blank"><i class="fa fa-facebook"></i> <!--<span class="hidden-md-up">Like Us On Facebook</span>--></a></li>
					<?php endif; ?>
					<?php if( get_field('twitter_url','option') ): ?>
					<li class="menu-item col"><a class="nav-link text-center" href="<?php the_field('twitter_url','option'); ?>" title="Find Us On Twitter" target="_blank"><i class="fa fa-twitter"></i> <!--<span class="hidden-xs-up">Follow Us On Twitter</span>--></a></li>
					<?php endif; ?>
					<?php if( get_field('instagram_url','option') ): ?>
					<li class="menu-item col"><a class="nav-link text-center" href="<?php the_field('instagram_url','option'); ?>" title="Find Us On Instagram" target="_blank"><i class="fa fa-instagram"></i> <!--<span class="hidden-xs-up">View Us On Instagram</span>--></a></li>
					<?php endif; ?>
					<?php if( get_field('youtube_url','option') ): ?>
					<li class="menu-item col"><a class="nav-link text-center" href="<?php the_field('youtube_url','option'); ?>" title="Find Us On YouTube" target="_blank"><i class="fa fa-youtube-square"></i> <!--<span class="hidden-xs-up">Our YouTube Channel</span>--></a></li>
					<?php endif; ?>
					<?php if( get_field('google_url','option') ): ?>
					<li class="menu-item col"><a class="nav-link text-center" href="<?php the_field('google_url','option'); ?>" title="Find Us On Google" target="_blank"><i class="fa fa-google"></i> <!--<span class="hidden-xs-up">Find Us On Google</span>--></a></li>
					<?php endif; ?>
					<?php if( get_field('yelp_url','option') ): ?>
					<li class="menu-item col"><a class="nav-link text-center" href="<?php the_field('yelp_url','option'); ?>" title="Find Us On Yelp" target="_blank"><i class="fa fa-yelp"></i> <!--<span class="hidden-xs-up">Yelp Reviews</span>--></a></li>
					<?php endif; ?>
				</ul>

			</div>

	</section>

	<nav class="navbar navbar-toggleable-lg navbar-inverse bg-inverse hidden-md-up">

		<div class="d-flex justify-content-between">

			<button class="navbar-toggler float-left" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

            <?php if ( get_field('alternate_cta','option') ): ?>
                <div class="nav-section-cta float-right hidden-md-up ml-3 clearfix">
                    <?php the_field('alternate_cta','option'); ?>
                </div>
            <?php endif; ?>

            <?php if ( get_field('cta_link','option') ): ?>
                <div class="nav-section-cta float-right ml-3 hidden-md-up clearfix">
                    <?php include("cta-small.php"); ?>
                </div>
            <?php endif; ?>

            <? if ( !get_field('hide_phone_cta_mobile','option') ) : ?>
                <div class="mobile-number-cta float-md-right">
                    <? if ( get_field('phone_number','option') ) : ?>
                        <i class="fa fa-phone brand-highlight"></i> <span><a href="tel:<?= the_field('phone_number','option'); ?>"><?= the_field('phone_number','option'); ?></a></span>
                    <? endif; ?>
                </div>
            <? endif; ?>

		</div>

		<?php include("menus-mobile.php"); ?>

	</nav><!-- .site-navigation -->

</header>

<div class="hfeed site" id="page">

	<div class="nav-section-wrapper hidden-sm-down">

		<div class="<?= $nav_container ; ?> clearfix">

            <?php if( get_field('main_menu_style','option') == 'centered' ): ?>
                <?php include("menu-centered.php") ;?>
            <?php endif; ?>

			<?php if( get_field('main_menu_style','option') == 'standard' ): ?>
				<?php include("menu-standard.php") ;?>
			<?php endif; ?>

			<?php if( get_field('main_menu_style','option') == 'collapsed' ): ?>
				<?php include("menu-collapsed.php") ;?>
			<?php endif; ?>

		</div>

	</div>

	<?php if ( get_field('main_menu_style','option') == 'standard' ) : ?>

		<section class="nav-section tablet">

			<?php include("menus.php"); ?>

		</section>

	<?php endif; ?>

	<div class="nav-section-wrapper hidden-md-up">

		<div class="logo-wrapper">

			<?php

                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

            ?>

			<a href="/" title="Home">
				<img src="<?php echo $logo[0]; ?>" title="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>" alt="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
			</a>

		</div>

	</div>