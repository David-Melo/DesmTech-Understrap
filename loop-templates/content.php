<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( sprintf( '<h2 class="entry-title text-center mb-4"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
		'</a></h2>' ); ?>

	</header><!-- .entry-header -->

	<div class="text-center mb-3">
        <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
    </div>

    <div class="row">
        <div class="col-lg-8 offset-lg-2">

            <div class="entry-content text-center">

                <?php
                the_excerpt();
                ?>

            </div><!-- .entry-content -->

        </div>

    </div>

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
