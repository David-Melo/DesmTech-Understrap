<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );

$page_container = 'container';

if( get_field('page_container','option') ) {
    $page_container = get_field('page_container','option') ;
}

?>

<?php get_sidebar( 'footerfull' ); ?>


</div><!-- #page -->

<footer class="site-footer" id="colophon">


	<div class="wrapper" id="wrapper-footer">

		<?php include('content-sections-footer.php'); ?>

	</div>

	<section id="footer-bar" class="site-bar">

		<div class="container-fluid">

			<div class="row no-gutters">

				<div class="col-md-6">

					<div class="float-md-left">
						<?php wp_nav_menu(
							array(
								'theme_location'  => 'primary',
								'container_class' => 'footer-menu-container',
								'menu_class'      => 'nav footer-menu d-flex justify-content-sm-center',
								'walker'          => new WP_Bootstrap_Navwalker_Alt()
							)
						); ?>
					</div>

				</div>

				<div class="col-md-6">

					<div class="float-lg-right d-sm-flex justify-content-sm-center flex-column flex-sm-row flex-md-row">

						<? if ( get_field('phone_number','option') ) : ?>
						<span class="site-location-text col text-center"><a href="tel:<?= the_field('phone_number','option'); ?>"><?= the_field('phone_number','option'); ?></a></span>
						<? endif; ?>

						<? if ( get_field('address_1','option') ) : ?>
						<span class="site-location-text col text-center"><?= the_field('address_1','option'); ?></span>
						<? endif; ?>

						<? if ( get_field('address_2','option') ) : ?>
						<span class="site-location-text col text-center"><? the_field('address_2','option'); ?></span>
						<? endif; ?>

					</div>

				</div>

			</div>

		</div>

	</section>

</footer>

<?php wp_footer(); ?>

<?php include("structured_data.php") ;?>

<?php the_field('ga','option'); ?>

<script src="https://cdn.jsdelivr.net/gh/stefangabos/Zebra_Pin/dist/zebra_pin.min.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function() {

        var nav = jQuery('.information-nav');
        var wrapper = jQuery('.information-nav-wrapper');
        var window = jQuery('body').width();
        var top_spacing = 120;
        var header = jQuery('.header-section').outerHeight();

        if(window>800){

            nav.css('width',nav.outerWidth());
            wrapper.css('width',nav.outerWidth()+30);

            top_spacing = header + 20;

            console.log(header);

            new jQuery.Zebra_Pin(jQuery('.information-nav'), {
                contain: true,
                top_spacing: top_spacing,
                z_index: 14
            });

        }

    });
</script>

</body>

</html>

