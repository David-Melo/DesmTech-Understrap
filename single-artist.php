<?php

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<div class="wrapper site-main posts" id="wrapper-index">

    <section class="header-section"></section>

    <div class="p-5">
        <?php the_title( '<h1 class="entry-title text-center brand-blue text-uppercase brand-bold">', '</h1>' ); ?>
    </div>

    <div class="container">

        <div class="row mb-5">

            <div class="col-md-4">
                <div class="text-center">
                    <img src="<?=get_the_post_thumbnail_url( $post->ID, 'full' ); ?>" alt="<?the_title();?>">
                </div>
            </div>

            <div class="col-md-8">

                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="">
                            Artist: <?php the_field( 'directory_first_name' ); ?> <?php the_field( 'directory_last_name' ); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="">
                            Business: <?php the_field( 'business_name' ); ?>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="">
                            From: <?php the_field( 'from_location' ); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="">
                            Medium: <?php the_field( 'medium' ); ?>
                        </div>
                    </div>
                </div>


                <div class="mb-4">
                    Booth: <?php the_field( 'booth_number' ); ?>
                </div>

                <div class="mb-4">
                    Biography:<br>
                    <div class="brand-thin"><?php the_field( 'biography' ); ?></div>
                </div>



            </div>

        </div>

        <div class="text-center mb-5">
            Social Links:<br>

            / <a href="<?php the_field( 'external_link' ); ?>" target="_blank"><i class="fa fa-globe"></i> Website Link</a> /

            <?php if ( have_rows( 'social_links' ) ) : ?>
                <?php while ( have_rows( 'social_links' ) ) : the_row(); ?>
                    <?php

                    $net = null;

                    switch (get_sub_field( 'network' ))    {

                        case 'facebook':
                            $net = 'facebook';
                            break;

                        case 'twitter':
                            $net = 'twitter';
                            break;

                        case 'instagram':
                            $net = 'instagram';
                            break;

                        case 'youtube':
                            $net = 'youtube';
                            break;

                        case 'etsy':
                            $net = 'etsy';
                            break;

                        case 'linkedin':
                            $net = 'linkedin';
                            break;

                        case 'pinterest':
                            $net = 'pinterest';
                            break;

                    }

                    ?>
                    <?php ; ?>
                    <a href="<?php the_sub_field( 'url' ); ?>" target="_blank"><i class="fa fa-<?=$net;?>"></i> <?=ucfirst($net);?></a> /
                <?php endwhile; ?>
            <?php endif; ?>

        </div>

        <div class="mb-5 text-center">
            Artist Gallery:<br>

            <?php $artist_gallery_images = get_field( 'artist_gallery' ); ?>
            <?php if ( $artist_gallery_images ) :  ?>
                <?php foreach ( $artist_gallery_images as $artist_gallery_image ): ?>
                    <a href="<?php echo $artist_gallery_image['url']; ?>">
                        <img src="<?php echo $artist_gallery_image['sizes']['thumbnail']; ?>" alt="<?php echo $artist_gallery_image['alt']; ?>" />
                    </a>
                    <p><?php echo $artist_gallery_image['caption']; ?></p>
                <?php endforeach; ?>
            <?php endif; ?>

        </div>

        <div class="mb-5 text-center">
            Similar Artists:<br>
        </div>

    </div>

</div>

<?php get_footer(); ?>
