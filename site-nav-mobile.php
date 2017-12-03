<nav class="navbar navbar-toggleable-lg navbar-inverse bg-inverse hidden-md-up">

    <div class="nav-section-wrapper">

        <div class="logo-wrapper">

            <?php

            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

            ?>

            <a href="/" title="Home">
                <img src="<?php echo $logo[0]; ?>" title="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>" alt="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
            </a>

        </div>

    </div>

    <div class="d-flex justify-content-between">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php if ( get_field('alternate_cta','option') ): ?>
            <div class="nav-section-cta hidden-md-up">
                <?php the_field('alternate_cta','option'); ?>
            </div>
        <?php endif; ?>

        <?php if ( get_field('cta_link','option') ): ?>
            <div class="nav-section-cta hidden-md-up">
                <?php include("cta-small.php"); ?>
            </div>
        <?php endif; ?>

        <? if ( !get_field('hide_phone_cta_mobile','option') ) : ?>
            <? if ( get_field('phone_number','option') ) : ?>
                <div class="mobile-number-cta">
                    <i class="fa fa-phone brand-highlight"></i> <span><a href="tel:<?= the_field('phone_number','option'); ?>"><?= the_field('phone_number','option'); ?></a></span>
                </div>
            <? endif; ?>
        <? endif; ?>

    </div>

    <?php include("menus-mobile.php"); ?>

</nav>