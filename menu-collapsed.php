<div class="nav-items-wrapper">

    <div class="d-flex justify-content-between">

        <div class="nav-section-logo d-flex align-self-center">
            <?php include("logo.php"); ?>
        </div>

        <?php if ( get_field('alternate_cta','option') ): ?>
            <div class="nav-section-cta d-flex align-self-center">
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