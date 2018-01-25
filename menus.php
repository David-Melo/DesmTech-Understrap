<!-- ------------------------------------------------------------------------ -->

<?php if( get_field('main_menu_mode','option') == 'primary' && (get_field('main_menu_style','option') == 'standard' || get_field('main_menu_style','option') == 'independent' || get_field('main_menu_style','option') == 'minimal') ) : ?>

    <?php wp_nav_menu(
        array(
            'theme_location'  => 'primary',
            'container_class' => 'menu-container d-flex',
            'menu_class'      => 'primary_menu nav justify-content-between',
            'menu_id'         => '',
            'walker'          => new WP_Bootstrap_Navwalker(),
        )
    ); ?>

<?php endif; ?>

<!-- ------------------------------------------------------------------------ -->

<?php if( get_field('main_menu_mode','option') == 'content' && (get_field('main_menu_style','option') == 'standard' || get_field('main_menu_style','option') == 'independent' || get_field('main_menu_style','option') == 'minimal') ): ?>

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

<?php if( get_field('main_menu_mode','option') == 'global' && (get_field('main_menu_style','option') == 'standard' || get_field('main_menu_style','option') == 'independent' || get_field('main_menu_style','option') == 'minimal' || get_field('main_menu_style','option') == 'minimal-logo' ) ): ?>

    <?php wp_nav_menu(
        array(
            'theme_location'  => 'global',
            'container_class' => 'menu-container',
            'menu_class'      => 'primary_menu nav justify-content-center',
            'menu_id'         => '',
            'walker'          => new WP_Bootstrap_Navwalker(),
        )
    ); ?>

<?php endif; ?>

<!-- ------------------------------------------------------------------------ -->


<?php if( get_field('main_menu_mode','option') == 'primary' && get_field('main_menu_style','option') == 'collapsed'): ?>

<a href class="navbar-light menu-toggle" data-target="#sidebar" data-toggle="collapse">
    <i class="fa fa-navicon"></i>
</a>

<div id="sidebar" class="col-2 collapse bg-inverse fixed-top pt-5 h-100 text-center">

    <div class="mb-5">
        <?php include("logo.php"); ?>
    </div>

    <?php wp_nav_menu(
        array(
            'theme_location'  => 'primary',
            'container_id'    => 'sidebar',
            'menu_class'      => 'nav flex-column',
            'menu_id'         => '',
            'walker'          => new WP_Bootstrap_Navwalker(),
        )
    ); ?>

</div>

<?php endif; ?>

<!-- ------------------------------------------------------------------------ -->

<?php if( get_field('main_menu_mode','option') == 'content' && get_field('main_menu_style','option') == 'collapsed' ): ?>

<div class="menu-container">

    <a href="#sidebar" class="navbar-light side-bar-toggle" data-target="#sidebar" data-toggle="collapse" aria-expanded="false" aria-controls="sidebar">
        <i class="fa fa-navicon"></i>
    </a>

    <div class="col-2 collapse bg-inverse fixed-top pt-5 h-100" id="sidebar">

        <div class="mb-5">
            <?php include("logo.php"); ?>
        </div>

        <ul class="nav flex-column">

            <?php if( have_rows('content_sections') ): ?>
                <?php while ( have_rows('content_sections') ) : the_row(); ?>
                    <?php if ( get_sub_field('section_slug') ) : ?>
                        <li class="nav-item text-center">
                            <a class="nav-link menu-link text-white" href="#section-<?php the_sub_field('section_slug'); ?>"><?php the_sub_field('section_link_title'); ?></a>
                        </li>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>

        </ul>
    </div>

</div>

<?php endif; ?>

<!-- ------------------------------------------------------------------------ -->