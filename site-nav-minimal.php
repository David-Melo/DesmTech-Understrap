<?php if( get_field('main_menu_style','option') == 'minimal' ): ?>

    <div class="hidden-sm-down menu-minimal-wrapper">

        <div class="<?= $nav_container ; ?> clearfix">

            <div class="nav-section-minimal-wrapper pt-4">

                <div class="d-flex justify-content-center">

                    <?php if ( get_field('alternate_cta','option') ): ?>
                        <div class="nav-section-cta-alternate d-flex align-self-stretch">
                            <?php the_field('alternate_cta','option'); ?>
                        </div>
                    <?php endif; ?>

                    <?php if ( get_field('cta_link','option') ): ?>
                        <div class="nav-section-cta d-flex align-self-stretch">
                            <?php include("cta.php"); ?>
                        </div>
                    <?php endif; ?>

                </div>

                <section class="nav-section nav-section-minimal">
                    <?php include("menus.php"); ?>
                </section>

            </div>

        </div>

    </div>

<?php endif; ?>