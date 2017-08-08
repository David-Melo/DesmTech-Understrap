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
?>

<?php get_sidebar( 'footerfull' ); ?>


</div><!-- #page -->

<footer class="site-footer" id="colophon">


	<div class="wrapper" id="wrapper-footer">

		<?php if( have_rows('footer_sections','option') ): ?>
		<?php while ( have_rows('footer_sections','option') ) : the_row(); ?>

		<?php

            $classes = '';
            $style = '';
            $headingStyle = '';

            $sectionBG = get_sub_field('section_bg');
            $sectionBGColor= get_sub_field('section_background_color');
            $sectionTextColor= get_sub_field('section_text_color');
            $sectionHeadingColor= get_sub_field('section_heading_color');

            if( !empty($sectionBG) ):

                $classes .= ' background-image';
                $style .= 'background-image: url(' . $sectionBG['url'] . ');';

            endif;

            if( !empty($sectionBGColor) ):

                $style .= 'background-color: ' . $sectionBGColor . ' !important;';

            endif;

            if( !empty($sectionTextColor) ):

                $style .= 'color: ' . $sectionTextColor . ' !important;';

            endif;

            if( !empty($sectionHeadingColor) ):

                $headingStyle .= 'color: ' . $sectionHeadingColor . ' !important;';

            endif;

            ?>

		<section class="<?=$classes;?> <?php echo ( get_row_layout() == 'social_section' ) ? 'social-section' : '' ; ?> <?php echo ( get_row_layout() == 'slider_section' ) ? 'no-padding slider-section text-center' : '' ; ?>" style="<?=$style;?>">

			<a class="anchor" id="section-<?php the_sub_field('section_slug'); ?>"></a>

			<div class="content-wrapper">
				<div class="container">

					<?php if ( get_sub_field('section_heading') ) : ?>
					<h2 class="text-center" style="<?=$headingStyle;?>"><?php the_sub_field('section_heading'); ?></h2>
					<?php endif; ?>

					<?php if ( get_sub_field('section_subheading') ) : ?>
					<h3 class="text-center" style="<?=$headingStyle;?>">c</h3>
					<?php endif; ?>

					<?php the_sub_field('section_content'); ?>

					<!-- ---------------------- Section Template ---------------------- -->
					<?php if( get_row_layout() == 'highlights_section' ): ?>

					<?php if( have_rows('event_highlights') ): ?>

					<div class="text-center">

						<div class="highlights-wrapper">

							<?php while ( have_rows('event_highlights') ) : the_row(); ?>

							<div class="highlight-wrapper">
								<div class="highlight-image">
									<?php

                                            $image = get_sub_field('image');

                                            if( $image ) {

                                                echo wp_get_attachment_image( $image, 'medium' );

                                            }

                                        ?>
								</div>
							</div>

							<?php endwhile; ?>

						</div>

					</div>

					<?php endif; ?>

					<?php endif; ?>
					<!-- ---------------------- Section Template ---------------------- -->

					<!-- ---------------------- Section Template ---------------------- -->
					<?php if( get_row_layout() == 'social_section' ): ?>

					<div class="text-center">

						<ul class="social-menu social-menu-section clearfix brand-highlight">
							<?php if( get_sub_field('facebook_url') ): ?>
							<li class="menu-item"><a class="nav-link" href="<?php the_sub_field('facebook_url'); ?>" title="Find Us On Facebook" target="_blank"><i class="fa fa-facebook"></i> Like Us On Facebook</a></li>
							<?php endif; ?>
							<?php if( get_sub_field('twitter_url') ): ?>
							<li class="menu-item"><a class="nav-link" href="<?php the_sub_field('twitter_url'); ?>" title="Find Us On Twitter" target="_blank"><i class="fa fa-twitter"></i> Follow Us On Twitter</a></li>
							<?php endif; ?>
							<?php if( get_sub_field('instagram_url') ): ?>
							<li class="menu-item"><a class="nav-link" href="<?php the_sub_field('instagram_url'); ?>" title="Find Us On Instagram" target="_blank"><i class="fa fa-instagram"></i> Find Us On Instagram</a></li>
							<?php endif; ?>
							<?php if( get_sub_field('email_address') ): ?>
							<li class="menu-item"><a class="nav-link" href="mailto:<?php the_sub_field('email_address'); ?>" title="Send Us An Email" target="_blank"><i class="fa fa-envelope"></i> Send Us An Email</a></li>
							<?php endif; ?>
						</ul>

					</div>

					<?php endif; ?>
					<!-- ---------------------- Section Template ---------------------- -->


				</div>
			</div>

			<!-- ---------------------- Section Template ---------------------- -->
			<?php if( get_row_layout() == 'slider_section' ): ?>

			<?php if ( get_sub_field('slider_height') ) : ?>
			<style>
				.carousel-item {
					height:  <?php the_sub_field('slider_height'); ?>px !important;
				}
			</style>
			<?php endif; ?>

			<div class="slider-wrapper">
				<div class="carousel slide" data-ride="carousel" data-interval="3000">
					<div class="carousel-inner" role="listbox">

						<?php $images = get_sub_field('slider_gallery'); ?>

						<?php if( $images ): ?>
						<?php foreach( $images as $key => $image ): ?>
						<div class="carousel-item <?php echo ($key == 0) ? 'active' : '' ; ?>" style="background-image: url('<?php echo $image['url']; ?>')">
							<img class="d-block img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" style="visibility: hidden">
						</div>
						<?php endforeach; ?>
						<?php endif; ?>

					</div>
				</div>
			</div>

			<?php endif; ?>
			<!-- ---------------------- Section Template ---------------------- -->

		</section>

		<?php endwhile; ?>
		<?php endif; ?>

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
						<span class="site-location-text col-sm-4 text-center"><a href="tel:<?= the_field('phone_number','option'); ?>"><?= the_field('phone_number','option'); ?></a></span>
						<? endif; ?>

						<? if ( get_field('address_1','option') ) : ?>
						<span class="site-location-text col-sm-4 text-center"><?= the_field('address_1','option'); ?></span>
						<? endif; ?>

						<? if ( get_field('address_2','option') ) : ?>
						<span class="site-location-text col-sm-4 text-center"><? the_field('address_2','option'); ?></span>
						<? endif; ?>

					</div>

				</div>

			</div>

		</div>

	</section>

</footer>

<?php wp_footer(); ?>

<style type="text/css">

	.acf-map {
		width: 100%;
		height: 500px;
	}

	.acf-map-contact-us {
		width: 100%;
		height: 276px;
	}

	.acf-map-travel-info {
		width: 100%;
		height: 500px;
	}

	/* fixes potential theme css conflict */
	.acf-map-contact-us img,
	.acf-map img {
		max-width: inherit !important;
	}

</style>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu3cp_xWqPVHIbfz12SJ-_hJ3RW75wj7A&libraries=places"></script>
<script type="text/javascript">
    (function($) {

        function new_map( $el ) {

            var $marker = $el.find('.marker');
            var $place = $marker.attr('data-place');
            var zoom = parseInt($marker.attr('data-zoom')) || 14;
            var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

            var args = {
                zoom		: zoom,
                center		: latlng,
                mapTypeId	: 'roadmap',
                scrollwheel: false,
                draggable: true
            };

            console.log(args);

            var map = new google.maps.Map( $el[0], args);

            var request = {
                placeId: $place
            };

            var service = new google.maps.places.PlacesService(map);
            service.getDetails(request, callback);

            function callback (place, status) {
                if (status == google.maps.places.PlacesServiceStatus.OK) {

                    var marker = new google.maps.Marker({
                        map: map,
                        place: {
                            placeId: place.place_id,
                            location: place.geometry.location
                        }
                    });

                    var infowindow = new google.maps.InfoWindow({
                        content: '<strong>' + place.name + '</strong><br>' +
                        place.adr_address + '<br>' +
                        place.formatted_phone_number + '<br>' +
                        '<a href="' + place.url + '" target="_blank">Get Directions</a>'
                    });

                    // show info window when marker is clicked
                    google.maps.event.addListener(marker, 'click', function() {
                        infowindow.open( map, marker );
                    });

                    infowindow.open( map, marker );

                }
            };

            return map;

        }

        var map = null;

        $(document).ready(function(){
            $('.acf-map').each(function(){
                map = new_map( $(this) );
            });
        });

    })(jQuery);

    jQuery(document).on('click','.navbar-collapse.show',function(e) {
        if( jQuery(e.target).is('a') ) {
            jQuery(this).collapse('hide');
        }
    });

    jQuery(document).ready(function(){
        // Cache selectors
        var lastId,
            topMenu = jQuery(".nav-section-wrapper"),
            topMenuHeight = 0,
            // All list items
            menuItems = jQuery('.nav-section-wrapper .nav').find("a"),
            // Anchors corresponding to menu items
            scrollItems = menuItems.map(function(){
                var item = jQuery(jQuery(this).attr("href"));
                if (item.length) { return item; }
            });

		// Bind click handler to menu items
		// so we can get a fancy scroll animation
        menuItems.click(function(e){

            var href = jQuery(this).attr("href"),
                offsetTop = href === "#" ? 0 : jQuery(href).offset().top-topMenuHeight+1;
            console.log(offsetTop);
            jQuery('html, body').stop().animate({
                scrollTop: offsetTop+20
            }, 300);
            e.preventDefault();
        });

		// Bind to scroll
        jQuery(window).scroll(function(){
            // Get container scroll position
            var fromTop = jQuery(this).scrollTop()+topMenuHeight;

            // Get id of current scroll item
            var cur = scrollItems.map(function(){
                if (jQuery(this).offset().top < fromTop)
                    return this;
            });
            // Get the id of the current element
            cur = cur[cur.length-1];
            var id = cur && cur.length ? cur[0].id : "";

            if (lastId !== id) {
                lastId = id;
                // Set/remove active class
                menuItems
                    .parent().removeClass("active")
                    .end().filter("[href='#"+id+"']").parent().addClass("active");
            }
        });
	});

</script>

</body>

</html>

