<div class="menu-container">

    <?php wp_nav_menu(
        array(
            'theme_location'  => 'secondary',
            'container_class' => 'menu-container',
            'menu_class'      => 'secondary_menu nav justify-content-center',
            'menu_id'         => '',
            'walker'          => new WP_Bootstrap_Navwalker(),
        )
    ); ?>

</div>