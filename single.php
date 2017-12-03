<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
if( get_field('page_container','option') ) {
    $page_container = get_field('page_container','option') ;
}
?>

<div class="wrapper">

    <section class="header-section"></section>

	<div id="content" tabindex="-1">

        <main class="site-main" id="main">

            <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

                <header class="entry-header">

                    <?php the_title( '<h1 class="entry-title mb-4 text-center brand-bold">', '</h1>' ); ?>

                </header><!-- .entry-header -->

                <div class="entry-content <?php echo esc_html( $container ); ?>">

                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">

                            <?php the_content(); ?>

                            <div class="post-gallery d-flex justify-content-center flex-wrap">
                                <?php $gallery_items_images = get_field( 'gallery_items' ); ?>
                                <?php if ( $gallery_items_images ) :  ?>
                                    <?php foreach ( $gallery_items_images as $gallery_items_image ): ?>
                                        <div class="post-gallery-wrapper">
                                            <a href="<?php echo $gallery_items_image['url']; ?>">
                                                <img src="<?php echo $gallery_items_image['sizes']['thumbnail']; ?>" alt="<?php echo $gallery_items_image['alt']; ?>" />
                                            </a>
                                            <p><?php echo $gallery_items_image['caption']; ?></p>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                            <script>
                                jQuery(document).ready(function() {
                                    jQuery('.post-gallery a').simpleLightbox();
                                });
                            </script>

                        </div>
                    </div>

                </div><!-- .entry-content -->


            </article><!-- #post-## -->

        </main><!-- #main -->

    </div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
