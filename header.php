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

        .site>#page-wrapper>section{
            padding: 0;
        }

        body {
            color: #7e7e7e;
            font-family: "Gotham";
        }
        h1, h2, h3, h4, h5, .h1, .h2, .h3, .h4, .h5 {
            font-weight: 500;
        }
        h2 {
            font-weight: 600;
        }

        .brand-blue-bg {
            background-color: #148FBF;
        }
        .brand-blue {
            color: #148FBF;
        }
        .brand-blue-light {
            color: #6BB4E1;
        }
        .brand-pink {
            color: #F381B2;
        }
        .brand-yellow {
            color: #FDDA47;
        }
        .brand-pink-light {
            color: #F5B2C8;
        }
        .brand-green {
            color: #86D0CD;
        }
        .brand-white {
            color: #FFF;
        }

        .brand-bold {
            font-family: "Gotham Bold";
        }

        .brand-medium {
            font-family: "Gotham";
        }

        .brand-thin {
            font-family: "Gotham Thin";
        }

        .h1 {
            font-size: 55px;
        }

        .h2 {
            font-size: 46px;
        }

        .fluid-left {
            left: -15px;
            position: relative;
        }

        .fluid-right {
            right: -15px;
            position: relative;
        }

        section {
            border-bottom: 30px solid #FFFFFF;
        }
        .header-section {
            border-bottom: 0;
        }
        .menu-container {
            margin: 0;
        }
        .nav-link {
            line-height: 60px;
            text-transform: uppercase;
        }
        .btn-highlight {
            background-color: transparent !important;
            border-color: #FFFFFF !important;
            border-radius: 0;
            border-width: 2px;
            text-transform: uppercase;
        }
        .btn-highlight:hover {
            background-color: #fa7fb5 !important;
        }
        .button-outline-style-all-white {
            border-radius: 0;
            border-width: 2px;
            color: #FFFFFF !important;
            text-transform: uppercase;
            padding: 20px 40px;
            background-color: transparent !important;
            border-color: #FFFFFF !important;
            font-weight: 500;
        }
        .button-outline-style-all-white:hover {
            background-color: #fa7fb5 !important;
        }
        .button-outline-style {
            border-radius: 0;
            border-width: 2px;
            color: #2baae1 !important;
            text-transform: uppercase;
            padding: 20px 40px;
            font-weight: 500;
        }
        .button-outline-style:hover {
            color: #fff !important;
        }
        .button-outline-style-white {
            border-radius: 0;
            border-width: 2px;
            color: #FFFFFF!important;
            border-color: #FFF !important;
            text-transform: uppercase;
            font-weight: 600;
        }
        .button-outline-style-white-border {
            border-color: #FFF !important;
            padding: 20px 40px;
            font-weight: 500;
        }
        .email-newsletter input {
            border-radius: 0;
            border: 2px solid white;
            background: transparent;
            color: #ffda43;
            height: 50px;
            border-right: 0;
        }
        .email-newsletter input::placeholder {
            color: #ffda43;
        }
        .btn-newsletter {
            border-radius: 0;
            border: 2px solid white;
            background: transparent;
            color: #FFFFFF;
            height: 50px;
        }
        .btn-newsletter:hover {
            background: #FFFFFF;
            color: #0098cf;
        }
        .email-newsletter .form-control:focus {
            background: transparent;
        }
        #caldera_form_1 .row .first_col {
            padding-right: 0;
        }
        #caldera_form_1 .row .last_col {
            padding-left: 0;
        }
        .social-footer img {
            height: 35px;
            width: 35px;
            max-width: none;
        }
        .social-footer a {
            margin-right: 15px
        }
        .footer-link a {
            color: #0098cf !important;
            font-weight: 900;
        }
        .button-item-link {
            color: #FFFFFF !important;
        }
        .button-item {
            border: 3px solid white;
            padding: 10px 0;
            text-align: center;
            width: 300px;
            cursor: pointer;
            color: #FFF !important;
        }
        @media (max-width: 1000px) {
            .button-item {
                width: 100%;
            }
        }
        .button-item .line-1 {
            font-size: 42px;
            line-height: 45px
        }
        .button-item .line-2 {
            font-size: 32px
        }
        .button-item:hover {
            background-color: #fa7fb5 !important;
            text-decoration: none;
        }
        #pt-cv-view-df08bfb5pr .pt-cv-title a {
            background-color: #148fbf;
            display: block;
            padding: 7px;
            text-align: center;
            color: #FFF;
            text-transform: uppercase;
            margin-top: -10px;
        }
        .lead-2.h2-1 {
            text-transform: uppercase;
            font-weight: 500;
            font-size: 57px;
            letter-spacing: 10px;
            margin-bottom: 0;
        }
        hr {
            border-top: 1px solid rgb(255, 255, 255);
        }
        b {
            font-weight: 700;
        }
        .h3, h3 {
            font-size: 1.75rem;
            font-weight: 600 !important;
            color: #148fbf;
        }
        .nav-section-nav .active .nav-link {
            color: #F4C300 !important;
            text-decoration: none;
        }
        .nav-section-wrapper #menu-primary-1 > li > a {
            color: #ffffff;
            padding: 0;
            line-height: 70px;
            margin: 15px 11px 0;
            border-bottom: 15px solid #148fbf;
        }
        .nav-section-wrapper #menu-primary-1 > li > a:hover {
            color: #F4C300 !important;
            border-bottom: 15px solid #fb80b5;
        }
        .dropdown-toggle::after{
            display: none;
        }
        .dropdown:hover .dropdown-menu {
            display: block;
        }
        .dropdown-menu {
            border-radius: 0;
            background-color: #f5c300;
            white-space: nowrap;
            padding: 12px 0;
            margin: 0 11px 0;
            border: 0;
        }
        .dropdown-menu .menu-item a.nav-link {
            margin: 0;
            line-height: 36px;
            padding: 0 30px;
        }
        .dropdown-menu .menu-item a.nav-link:hover {
            background-color: #f5c300;
            color: #148fbf !important;
        }
        h1.h1-1 small {
            font-size: 37px;
            display: block;
            font-weight: 900;
        }
        h1.h1-1 {
            text-transform: uppercase;
            font-size: 50px;
            line-height: 50px;
            font-weight: 900;
            margin-bottom: 0;
            padding: 30px 0;
        }
        .flare-square-1 {
            height: 160px;
            width: 160px;
            background-image: url('//cgaf.flywheelsites.com/wp-content/uploads/2017/11/flare-square.jpg');
            background-size: contain;
            background-position: center;
        }
        .max-img {
            min-width: 100%;
        }
        .pt-cv-ctf-artist_name,
        .pt-cv-ctf-medium,
        .pt-cv-ctf-date_and_time,
        .pt-cv-ctf-location,
        .pt-cv-title,
        .pt-cv-ctf-booth_number
        {
            max-width: 100%;
            text-transform: uppercase;
            font-size: 26px;
            font-family: "Gotham Thin";
            font-weight: 600;
        }
        .pt-cv-ctf-artist_name { margin-bottom: 5px; }
        .pt-cv-ctf-artist_name ul { margin: 0; padding: 0 }
        .pt-cv-ctf-artist_name li { list-style: none }
        .pt-cv-ctf-medium { margin-bottom: 30px; }
        .pt-cv-ctf-date_and_time { margin-bottom: 5px;}
        .pt-cv-ctf-location {}
        .pt-cv-mask .pt-cv-custom-fields {
            margin-top: 0;
        }
        .nav-section-nav .active .nav-link {
            color: #f5c300 !important;
            text-decoration: underline;
        }
        .site-main.posts {
            background-color: #FFF;
        }
        .blog-intro {}
        .blog-intro .word {}
        .blog-intro .spacer {}

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

    <!-- MOBILE MENU -->
	<nav class="navbar navbar-toggleable-lg navbar-inverse bg-inverse hidden-md-up">

		<div class="d-flex justify-content-between">

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

            <?php if ( get_field('alternate_cta','option') ): ?>
                <div class="nav-section-cta hidden-md-up">
                    <?php the_field('alternate_cta','option'); ?>
                </div>
            <?php endif; ?>

            <?php if ( get_field('cta_link','option') ): ?>
                <div class="nav-section-cta hidden-md-up">
                    <?php include("cta-small.php"); ?>
                </div>
            <?php endif; ?>

            <? if ( !get_field('hide_phone_cta_mobile','option') ) : ?>
                <? if ( get_field('phone_number','option') ) : ?>
                    <div class="mobile-number-cta">
                        <i class="fa fa-phone brand-highlight"></i> <span><a href="tel:<?= the_field('phone_number','option'); ?>"><?= the_field('phone_number','option'); ?></a></span>
                    </div>
                <? endif; ?>
            <? endif; ?>

		</div>

		<?php include("menus-mobile.php"); ?>

	</nav>
    <!-- MOBILE MENU -->

</header>

<div class="hfeed site" id="page">

    <!-- DESKTOP MENU -->
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

            <?php if( get_field('main_menu_style','option') == 'independent' ): ?>
                <?php include("menu-independent.php") ;?>
            <?php endif; ?>

		</div>

	</div>

    <?php if ( get_field('main_menu_style','option') == 'independent' ) : ?>

        <section class="nav-section nav-section-independent">

            <?php include("menus.php"); ?>

        </section>

    <?php endif; ?>

	<?php if ( get_field('main_menu_style','option') == 'standard' ) : ?>

		<section class="nav-section tablet">

			<?php include("menus.php"); ?>

		</section>

	<?php endif; ?>
    <!-- DESKTOP MENU -->


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