<!-- ------------------------------------------------------------------------ -->

<?php if( get_field('main_menu_mode','option') == 'primary' ): ?>

<!-- The WordPress Menu goes here -->
<?php wp_nav_menu(
    array(
        'theme_location'  => 'primary',
        'container_class' => 'collapse navbar-collapse',
        'container_id'    => 'navbarNavDropdown',
        'menu_class'      => 'navbar-nav',
        'fallback_cb'     => '',
        'menu_id'         => '',
        'walker'          => new WP_Bootstrap_Navwalker(),
    )
); ?>

<?php endif; ?>

<!-- ------------------------------------------------------------------------ -->

<?php if( get_field('main_menu_mode','option') == 'content' ): ?>

<div id="navbarNavDropdown" class="collapse navbar-collapse">

    <ul class="navbar-nav">

        <?php if( have_rows('content_sections') ): ?>
        <?php while ( have_rows('content_sections') ) : the_row(); ?>
        <?php if ( get_sub_field('section_slug') ) : ?>
        <li class="nav-item">
            <a class="nav-link menu-link" href="#section-<?php the_sub_field('section_slug'); ?>">
                <?php the_sub_field('section_link_title'); ?>
            </a>
        </li>
        <?php endif; ?>
        <?php endwhile; ?>
        <?php endif; ?>

    </ul>

</div>

<?php endif; ?>

<!-- ------------------------------------------------------------------------ -->

<?php if( get_field('main_menu_mode','option') == 'global' ): ?>

    <!-- The WordPress Menu goes here -->
    <?php wp_nav_menu(
        array(
            'theme_location'  => 'global',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'navbarNavDropdown',
            'menu_class'      => 'navbar-nav',
            'fallback_cb'     => '',
            'menu_id'         => '',
            'walker'          => new WP_Bootstrap_Navwalker(),
        )
    ); ?>

<?php endif; ?>

<!-- ------------------------------------------------------------------------ -->