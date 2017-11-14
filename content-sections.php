<?php if( have_rows('content_sections') ): ?>
    <?php while ( have_rows('content_sections') ) : the_row(); ?>

        <?php include("content-sections-variables.php"); ?>

        <a class="anchor" id="section-<?php the_sub_field('section_slug'); ?>"></a>

        <section class="section-<?= $sectionLinkSlug; ?> <?=$classes;?> <?php echo ( get_row_layout() == 'header_section' ) ? 'no-padding header-content-section' : '';?> <?php echo ( get_row_layout() == 'image_section' ) ? 'no-padding image-section' : '';?> <?php echo ( get_row_layout() == 'slider_section' ) ? 'no-padding slider-section text-center' : '' ; ?>" style="<?=$style;?>">

                <?php the_sub_field('section_header'); ?>

                <div class="content-wrapper <?php the_sub_field('content_wrapper_css_class'); ?>">

                    <?php include("content-sections-header.php"); ?>
                    <?php include("content-sections-image.php"); ?>

                    <div class="<?= $page_container ; ?> alt-container h-100">

                        <?php if ( get_sub_field('section_heading') ||  get_sub_field('section_subheading')) : ?>

                            <div class="section-headings">

                                <?php if ( get_sub_field('section_heading') ) : ?>
                                    <h2 class="text-center" style="<?=$headingStyle;?>"><span><?php the_sub_field('section_heading'); ?></span></h2>
                                <?php endif; ?>

                                <?php if ( get_sub_field('section_subheading') ) : ?>
                                    <h4 class="text-center" style="<?=$subHeadingStyle;?>"><?php the_sub_field('section_subheading'); ?></h4>
                                <?php endif; ?>

                            </div>

                        <?php endif; ?>

                        <?php if ( get_sub_field('content_position') != 'after' ) : ?>
                            <?php the_sub_field('section_content'); ?>
                            <?php the_sub_field('section_code'); ?>
                        <?php endif; ?>

                        <?php include("content-sections-information.php"); ?>

                        <?php include("content-sections-highlights.php"); ?>

                        <?php include("content-sections-deck.php"); ?>

                        <?php if ( get_sub_field('content_position') == 'after' ) : ?>
                            <?php the_sub_field('section_content'); ?>
                            <?php the_sub_field('section_code'); ?>
                        <?php endif; ?>

                    </div>

                </div>

                <?php the_sub_field('section_footer'); ?>

            <?php include("content-sections-slider.php"); ?>

        </section>

    <?php endwhile; ?>
<?php endif; ?>