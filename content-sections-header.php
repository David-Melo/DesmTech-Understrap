<!-- ---------------------- Section Template ---------------------- -->
<?php if( get_row_layout() == 'header_section' ): ?>

<div class="<?= $page_container ; ?> clearfix">

    <div class="row">

        <div class="col-lg-6">

            <?php if ( get_sub_field('left_section') ) : ?>
            <?php the_sub_field('left_section',false, false); ?>
            <?php endif; ?>

        </div>

        <div class="col-lg-6 right-content-wrapper">

            <div class="right-content">

                <?php if ( get_sub_field('right_section') ) : ?>
                <?php the_sub_field('right_section'); ?>
                <?php endif; ?>

            </div>

        </div>

    </div>

</div>

<?php endif; ?>
<!-- ---------------------- Section Template ---------------------- -->