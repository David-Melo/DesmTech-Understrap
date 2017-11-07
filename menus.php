<!-- ------------------------------------------------------------------------ -->

<?php if( get_field('main_menu_mode','option') == 'primary' && (get_field('main_menu_style','option') == 'standard' || get_field('main_menu_style','option') == 'independent') ) : ?>

    <div class="<?= $nav_container ; ?>">

        <div class="menu-container">

            <?php wp_nav_menu(
                array(
                    'theme_location'  => 'primary',
                    'container_class' => 'menu-container',
                    'menu_class'      => 'primary_menu nav justify-content-between',
                    'menu_id'         => '',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                )
            ); ?>

        </div>

    </div>

<?php endif; ?>

<!-- ------------------------------------------------------------------------ -->

<?php if( get_field('main_menu_mode','option') == 'content' && (get_field('main_menu_style','option') == 'standard' || get_field('main_menu_style','option') == 'independent') ): ?>

    <div class="<?= $nav_container ; ?>">

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

    </div>

<?php endif; ?>

<!-- ------------------------------------------------------------------------ -->


<?php if( get_field('main_menu_mode','option') == 'primary' && get_field('main_menu_style','option') == 'collapsed'): ?>

<a href class="m-3 navbar-light side-bar-toggle" data-target="#sidebar" data-toggle="collapse">
    <span class="navbar-toggler-icon"></span>
</a>

<div id="sidebar" class="col-2 collapse bg-inverse fixed-top pt-5 h-100">

    <?php include("logo.php"); ?>

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

    <a href class="m-3 navbar-light side-bar-toggle" data-target="#sidebar" data-toggle="collapse">
        <i class="fa fa-navicon"></i>
    </a>

    <div class="col-2 collapse bg-inverse fixed-top pt-5 h-100" id="sidebar">

        <?php include("logo.php"); ?>

        <ul class="nav flex-column">

            <?php if( have_rows('content_sections') ): ?>
            <?php while ( have_rows('content_sections') ) : the_row(); ?>
            <?php if ( get_sub_field('section_slug') ) : ?>
            <li class="nav-item">
                <a class="nav-link menu-link text-white" href="#section-<?php the_sub_field('section_slug'); ?>">
                    <?php the_sub_field('section_link_title'); ?>
                </a>
            </li>
            <?php endif; ?>
            <?php endwhile; ?>
            <?php endif; ?>

        </ul>
    </div>

</div>

<?php endif; ?>

<!-- ------------------------------------------------------------------------ -->

