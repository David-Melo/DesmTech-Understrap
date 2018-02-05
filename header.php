<?php

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

    <link rel='stylesheet' href='<?= get_template_directory_uri() . '/css/fonts/gotham/gotham-stylesheet.css' ;?>' type='text/css' media='all' />

    <?php if ( get_field( 'load_slick_slider', 'option' ) == 1 ) : ;?>
        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"/>
        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"/>
    <?php endif; ?>

</head>

<body <?php body_class(); ?>>

<?php the_field('gtm_2','option'); ?>

<!--<div class="mobile-debug">
    <div class="hidden-sm-up">XS</div>
    <div class="hidden-xs-down hidden-md-up">SM</div>
    <div class="hidden-sm-down hidden-lg-up">MD</div>
    <div class="hidden-md-down hidden-xl-up">LG</div>
    <div class="hidden-lg-down">XL</div>
</div>-->


<div class="body-overlay"></div>

<header>

    <?php include("site-bar-head.php") ;?>
    <?php include("site-nav-mobile.php") ;?>
    <?php include("site-nav-minimal.php") ;?>
    <?php include("site-nav-minimal-logo.php") ;?>
    <?php include("site-nav-default.php") ;?>

</header>

<div class="hfeed site" id="page">