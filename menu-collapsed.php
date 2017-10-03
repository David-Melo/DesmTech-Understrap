<div class="nav-items-wrapper">

    <div class="row no-gutters">

        <div class="col-sm d-flex">

            <div class="nav-section-logo d-flex align-self-center">
                <?php include("logo.php"); ?>
            </div>

        </div>

        <div class="col-sm d-flex justify-content-end">

            <?php if ( get_field('alternate_cta','option') ): ?>
                <div class="nav-section-cta float-right ml-3 clearfix">
                    <?php the_field('alternate_cta','option'); ?>
                </div>
            <?php endif; ?>

            <?php if ( get_field('cta_link','option') ): ?>
            <div class="nav-section-cta d-flex align-self-center">
                <?php include("cta.php"); ?>
            </div>
            <?php endif; ?>

            <div class="nav-section-nav">
                <?php include("menus.php"); ?>
            </div>

        </div>

    </div>

</div>