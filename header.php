<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
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

		.nav-section .active .nav-link {
			text-decoration: underline;
			color: <?= get_field('site_highlight_color','option') ?> !important;
		}

		<?php if( get_field('main_nav_background','option') != 'transparent' ): ?>

			 .nav-section-wrapper {
				 background: <?= get_field('main_nav_background','option') ?> !important;
			 }

		<?php endif; ?>

		<?php if( get_field('body_overlay','option') != 'transparent' ): ?>

			.body-overlay {
				background: <?= get_field('body_overlay_color','option') ?>;
				opacity: <?= get_field('body_overlay_opacity','option') ?>;
			}

		<?php endif; ?>

		<?php if( get_field('body_overlay_mode','option') == 'gradient' ): ?>

			.body-overlay {
			  background: -moz-linear-gradient(top,  <?= get_field('body_overlay_color','option') ?> 0%, <?= get_field('body_overlay_color_2','option') ?> 100%); /* FF3.6-15 */
			  background: -webkit-linear-gradient(top,  <?= get_field('body_overlay_color','option') ?> 0%,<?= get_field('body_overlay_color_2','option') ?> 100%); /* Chrome10-25,Safari5.1-6 */
			  background: linear-gradient(to bottom,  <?= get_field('body_overlay_color','option') ?> 0%,<?= get_field('body_overlay_color_2','option') ?> 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
			  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?= get_field('body_overlay_color','option') ?>', endColorstr='<?= get_field('body_overlay_color_2','option') ?>',GradientType=0 ); /* IE6-9 */
			}

		<?php endif; ?>

		<?php if( get_field('main_nav_background','option') == 'transparent' ): ?>

			  .nav-section-wrapper {
				  background: <?= get_field('main_nav_background','option') ?> !important;
				  box-shadow: none !important;
			  }

		<?php endif; ?>

		<?php if( get_field('site_highlight_color','option') ): ?>

			.panel-heading a,
			.brand-highlight a{
				color: <?= get_field('site_highlight_color','option') ?> !important;
			}

		<?php endif; ?>

		<?php if( get_field('site_bg','option') ): ?>

			html {
				background-image: url(<?= get_field('site_bg','option') ?>);
			}

		<?php endif; ?>

		<?php if( get_field('back_ground_image_mode','option') == 'image' ): ?>

			html {
				background-repeat: no-repeat;
				background-size: cover;
				background-attachment: fixed;
			}

		<?php endif; ?>

		<?php if( get_field('paragraphs_align','option') ): ?>

			p {
				text-align: <?= get_field('paragraphs_align','option') ?>;
			}

		<?php endif; ?>

	</style>

</head>

<body <?php body_class(); ?>>

<div class="body-overlay"></div>

<header>

	<section id="header-bar" class="site-bar clearfix">

		<div class="">

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

		</div>

	</section>

	<nav class="navbar navbar-toggleable-md  navbar-inverse bg-inverse hidden-md-up">

		<div class="row">

			<div class="col-xs-auto">
				<button class="navbar-toggler float-left" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>

			<div class="col">
				<div class="mobile-number-cta float-md-right">

					<? if ( get_field('phone_number','option') ) : ?>
						<i class="fa fa-phone"></i> <span><a href="tel:<?= the_field('phone_number','option'); ?>"><?= the_field('phone_number','option'); ?></a></span>
					<? endif; ?>

				</div>
			</div>

		</div>

		<!-- The WordPress Menu goes here -->
		<?php wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'container_class' => 'collapse navbar-collapse',
				'container_id'    => 'navbarNavDropdown',
				'menu_class'      => 'navbar-nav',
				'fallback_cb'     => '',
				'menu_id'         => 'main-menu',
				'walker'          => new WP_Bootstrap_Navwalker(),
			)
		); ?>

	</nav><!-- .site-navigation -->

</header>

<div class="hfeed site" id="page">

	<div class="nav-section-wrapper hidden-sm-down">

		<div class="<?php echo esc_attr( $container ); ?> clearfix">

			<div class="logo-wrapper float-md-left">

				<?php

					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

				?>

				<a href="/" title="Home">
					<img src="<?php echo $logo[0]; ?>">
				</a>

			</div>

			<div class="nav-section-nav pull-sm-right">

				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'menu-container',
						'menu_class'      => 'nav justify-content-end',
						'menu_id'         => 'primary-menu',
						'walker'          => new WP_Bootstrap_Navwalker(),
					)
				); ?>

			</div>

		</div>

	</div>

	<section class="nav-section tablet">

			<ul class="nav justify-content-center">

				<?php if( have_rows('home_page_sections') ): ?>
				<?php while ( have_rows('home_page_sections') ) : the_row(); ?>
				<?php if ( get_sub_field('section_slug') ) : ?>
				<li class="nav-item">
					<a class="nav-link active" href="#section-<?php the_sub_field('section_slug'); ?>">
						<?php the_sub_field('section_link_title'); ?>
					</a>
				</li>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>

			</ul>

		</section>

	<div class="nav-section-wrapper hidden-md-up">

		<div class="logo-wrapper">

			<?php

                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

            ?>

			<a href="/" title="Home">
				<img src="<?php echo $logo[0]; ?>">
			</a>

		</div>

	</div>