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

$page_container = 'container';

if( get_field('page_container','option') ) {
	$page_container = get_field('page_container','option') ;
}

?>

<?php if ( !is_mobile() ) : ?>
<?php if ( the_field('home_page_video','option') ) : ?>
<div class="video-section">

    <div class="video-background">
        <div class="video-overlay"></div>
        <div class="video-foreground">
            <div id="muteYouTubeVideoPlayer"></div>
            <script async src="https://www.youtube.com/iframe_api"></script>
            <script>
                function onYouTubeIframeAPIReady() {
                    var player;
                    player = new YT.Player('muteYouTubeVideoPlayer', {
                        videoId: '<?= get_field('home_page_video','option') ?>', // YouTube Video ID
                        playerVars: {
                            autoplay: 1, // Auto-play the video on load
                            controls: 0, // Show pause/play buttons in player
                            showinfo: 0, // Hide the video title
                            modestbranding: 1, // Hide the Youtube Logo
                            loop: 1, // Run the video in a loop
                            fs: 0, // Hide the full screen button
                            cc_load_policty: 0, // Hide closed captions
                            iv_load_policy: 3, // Hide the Video Annotations
                            autohide: 0, // Hide video controls when playing,
                            rel: 0,
                            enablejsapi : 1,
                            playlist: '<?= get_field('home_page_video','option') ?>'
                        },
                        events: {
                            onReady: function(e) {
                                <? if ( get_field('home_page_video_mute','option') ) : ?>e.target.mute();<?php endif; ?>
                            },
                            onStateChange: function(e){
                                if(e.data===0){
                                    e.target.play();
                                }
                            }
                        }
                    });
                }
            </script>
        </div>
    </div>

</div>
<?php endif; ?>
<?php endif; ?>

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
