<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <div class="image-section">
        <img src="<?=get_the_post_thumbnail_url( $post->ID, 'original' ); ?>" alt="<?the_title();?>">
    </div>

    <div class="py-5 my-5">

        <div class="container">

            <header class="entry-header">

                <?php the_title( sprintf( '<h2 class="entry-title text-center text-uppercase"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
                    '</a></h2>' ); ?>

                <?php if ( 'post' == get_post_type() ) : ?>

                    <!--<div class="entry-meta">
				<?php /*understrap_posted_on(); */?>
			</div>-->

                <?php endif; ?>

            </header><!-- .entry-header -->

            <div class="entry-content">

                <div class="brand-thin brand-blue blog-ex">
                    <?php
                        the_excerpt();
                    ?>
                </div>

                <?php
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
                    'after'  => '</div>',
                ) );
                ?>

            </div><!-- .entry-content -->

        </div>

    </div>



	<!--footer class="entry-footer">

		<?php /*understrap_entry_footer(); */?>

	</footer>-->

</article><!-- #post-## -->
