<!-- ------------------------------------------------------------------------ -->

<?php if( get_field('main_menu_mode','option') == 'primary' ): ?>

<?php wp_nav_menu(
    array(
        'theme_location'  => 'primary',
        'container_class' => 'menu-container',
        'menu_class'      => 'primary_menu nav justify-content-center',
        'menu_id'         => '',
        'walker'          => new WP_Bootstrap_Navwalker(),
    )
); ?>

<?php endif; ?>

<!-- ------------------------------------------------------------------------ -->

<?php if( get_field('main_menu_mode','option') == 'content' ): ?>

<div class="menu-container">

    <ul class="nav justify-content-center primary-menu">

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