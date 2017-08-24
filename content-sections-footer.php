<?php if( have_rows('content_sections','option') ): ?>
<?php while ( have_rows('content_sections','option') ) : the_row(); ?>

<?php include("content-sections-variables.php"); ?>

<a class="anchor" id="section-<?php the_sub_field('section_slug'); ?>"></a>

<section class="section-<?php the_sub_field('section_link_title'); ?> <?=$classes;?> <?php echo ( get_row_layout() == 'header_section' ) ? 'no-padding header-content-section' : '';?> <?php echo ( get_row_layout() == 'image_section' ) ? 'no-padding image-section' : '';?> <?php echo ( get_row_layout() == 'slider_section' ) ? 'no-padding slider-section text-center' : '' ; ?>" style="<?=$style;?>">

    <div class="content-wrapper">

        <?php include("content-sections-header.php"); ?>
        <?php include("content-sections-image.php"); ?>

        <div class="<?= $page_container ; ?> alt-container">

            <?php if ( get_sub_field('section_heading') ||  get_sub_field('section_subheading')) : ?>

            <div class="section-headings">

                <?php if ( get_sub_field('section_heading') ) : ?>
                <h2 class="text-center" style="<?=$headingStyle;?>"><?php the_sub_field('section_heading'); ?></h2>
                <?php endif; ?>

                <?php if ( get_sub_field('section_subheading') ) : ?>
                <h4 class="text-center" style="<?=$subHeadingStyle;?>"><?php the_sub_field('section_subheading'); ?></h4>
                <?php endif; ?>

            </div>

            <?php endif; ?>

            <?php the_sub_field('section_content'); ?>

            <?php include("content-sections-highlights.php"); ?>

            <?php include("content-sections-deck.php"); ?>

        </div>

    </div>

    <?php include("content-sections-slider.php"); ?>

</section>

<?php endwhile; ?>
<?php endif; ?>