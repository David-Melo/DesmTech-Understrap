<div class="nav-section-wrapper hidden-sm-down">

    <div class="<?= $nav_container ; ?> clearfix">

        <?php if( get_field('main_menu_style','option') == 'centered' ): ?>
            <?php include("menu-centered.php") ;?>
        <?php endif; ?>

        <?php if( get_field('main_menu_style','option') == 'standard' ): ?>
            <?php include("menu-standard.php") ;?>
        <?php endif; ?>

        <?php if( get_field('main_menu_style','option') == 'collapsed' ): ?>
            <?php include("menu-collapsed.php") ;?>
        <?php endif; ?>

        <?php if( get_field('main_menu_style','option') == 'independent' ): ?>
            <?php include("menu-independent.php") ;?>
        <?php endif; ?>

    </div>

</div>

<?php if ( get_field('main_menu_style','option') == 'independent' ) : ?>
    <section class="nav-section nav-section-independent">
        <?php include("menus.php"); ?>
    </section>
<?php endif; ?>

<?php if ( get_field('main_menu_style','option') == 'standard' ) : ?>
    <section class="nav-section tablet">
        <?php include("menus.php"); ?>
    </section>
<?php endif; ?>