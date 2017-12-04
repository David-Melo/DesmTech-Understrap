<div class="logo-wrapper align-self-center">

    <?php

    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

    ?>

    <a href="/" title="Home">
        <img src="<?php echo $logo[0]; ?>" title="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>" alt="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
    </a>

</div>