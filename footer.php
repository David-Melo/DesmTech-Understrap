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

		<?php include('content-sections-footer.php'); ?>

		<div class="container-fluid swarm-footer">

			<div class="row mb-2">
				<div class="col-md-4 text-md-left text-sm-center mb-sm-4">
					<p><strong>SWARM, Inc.</strong> is an <a href="https://swarminc.com" target="_blank" title="SWARM, Inc.">event agency</a> located in Wynwood, Miami, Florida. We are focused on the production, marketing, concessions, and all around logistics of your next event.</p>

				</div>
				<div class="col-md-4 text-center mb-sm-4">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo-white.png" alt="" width="150" />
					<div style="color: #00ffff;">© 2017 SWARM Event Agency</div>
					<div style="color: #00ffff;">All rights reserved</div>
				</div>
				<div class="col-md-4 text-md-right text-sm-center mb-sm-2">
					<div><strong>SWARM Event Agency</strong></div>
					<div><strong>305.461.2700</strong></div>
					<div><strong>2308 NW 5 Ave</strong></div>
					<div><strong>Wywnood, FL 33127</strong></div>
				</div>
			</div>

			<div class="text-center px-5 mx-5"><small>Please contact us for any inquiries, sponsorships, or volunteer opportunities.</small></div>

		</div>

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

<?php include("structured_data.php") ;?>

</body>

</html>

