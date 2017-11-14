<?php

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<div class="wrapper site-main posts" id="wrapper-index">

    <section class="header-section"></section>

    <div class="p-5">

        <?php the_title( '<h1 class="entry-title text-center brand-blue text-uppercase brand-bold">', '</h1>' ); ?>

        <div class="text-center">
            <img src="<?=get_the_post_thumbnail_url( $post->ID, 'full' ); ?>" alt="<?the_title();?>">
        </div>

    </div>

</div>

<?php get_footer(); ?>
