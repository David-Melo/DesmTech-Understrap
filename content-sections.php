<?php if( have_rows('content_sections') ): ?>
<?php while ( have_rows('content_sections') ) : the_row(); ?>

<?php

    $size = get_sub_field('section_image_sizes','false');

    $classes = '';
    $style = '';
    $headingStyle = '';

    $sectionBG = get_sub_field('section_bg');
    $sectionBGColor= get_sub_field('section_background_color');
    $sectionTextColor= get_sub_field('section_text_color');
    $sectionHeadingColor= get_sub_field('section_heading_color');
    $sectionSubHeadingColor= get_sub_field('section_subheading_color');

    if( !empty($sectionBG) ):

        $classes .= ' background-image';
        $style .= "background-image: url('" . $sectionBG['url'] . "');";

    endif;

    if( !empty($sectionBGColor) ):

        $style .= 'background-color: ' . $sectionBGColor . ' !important;';

    endif;

    if( !empty($sectionTextColor) ):

        $style .= 'color: ' . $sectionTextColor . ' !important;';

    endif;

    if( !empty($sectionHeadingColor) ):

        $headingStyle .= 'color: ' . $sectionHeadingColor . ' !important;';
        $headingStyle .= 'color: ' . $sectionSubHeadingColor . ' !important;';

    endif;

    if( !empty($sectionSubHeadingColor) ):

        $subHeadingStyle .= 'color: ' . $sectionSubHeadingColor . ' !important;';

    endif;

?>


<section class="<?=$classes;?> <?php echo ( get_row_layout() == 'header_section' ) ? 'no-padding header-content-section' : '';?> <?php echo ( get_row_layout() == 'image_section' ) ? 'no-padding image-section' : '';?> <?php echo ( get_row_layout() == 'slider_section' ) ? 'no-padding slider-section text-center' : '' ; ?>" style="<?=$style;?>">

    <a class="anchor" id="section-<?php the_sub_field('section_slug'); ?>"></a>

    <div class="content-wrapper">

        <!-- ---------------------- Section Template ---------------------- -->
        <?php if( get_row_layout() == 'header_section' ): ?>

        <div class="<?php echo esc_attr( $container ); ?> clearfix">

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

        <!-- ---------------------- Section Template ---------------------- -->
        <?php if( get_row_layout() == 'image_section' ): ?>

            <?php

                $image = get_sub_field('image');

                if( !empty($image) ):

                    // vars
                    $url = $image['url'];
                    $title = $image['title'];
                    $alt = $image['alt'];

                    $thumb = $image['url'];
                    $width = $image['width'];
                    $height = $image['height'];

            ?>

        <div class="<?php echo get_sub_field('image_width') == 'content' ? 'container' : 'ok' ; ?>">

            <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />

        </div>

        <?php endif; ?>

        <?php endif; ?>
        <!-- ---------------------- Section Template ---------------------- -->

        <div class="container alt-container">

            <div class="section-headings">

                <?php if ( get_sub_field('section_heading') ) : ?>
                <h2 class="text-center" style="<?=$headingStyle;?>"><?php the_sub_field('section_heading'); ?></h2>
                <?php endif; ?>

                <?php if ( get_sub_field('section_subheading') ) : ?>
                <h4 class="text-center" style="<?=$subHeadingStyle;?>"><?php the_sub_field('section_subheading'); ?></h4>
                <?php endif; ?>

            </div>

            <?php the_sub_field('section_content'); ?>

            <!-- ---------------------- Section Template ---------------------- -->
            <?php if( get_row_layout() == 'highlights_section' ): ?>

            <?php if( have_rows('event_highlights') ): ?>



            <div class="text-center">

                <div class="highlights-wrapper">

                    <?php while ( have_rows('event_highlights') ) : the_row(); ?>

                    <div class="highlight-wrapper">

                        <div class="highlight-image">

                            <?php

                                $link = get_sub_field('link');

                                if( $link ) {
                                    echo '<a href="' . $link . '" target="_blank">';
                            }

                            ?>

                            <?php

                                    $image = get_sub_field('image');

                                    if( !empty($image) ):

                                        // vars
                                        $url = $image['url'];
                                        $title = $image['title'];
                                        $alt = $image['alt'];

                                        if ( $size == 'full' ){
                                            $thumb = $image['url'];
                                            $width = $image['width'];
                                            $height = $image['height'];
                                        } else {
                                            // thumbnail
                                            $thumb = $image['sizes'][ $size ];
                                            $width = $image['sizes'][ $size . '-width' ];
                                            $height = $image['sizes'][ $size . '-height' ];
                                        }

                                ?>

                            <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />

                            <?php

                                if( $link ) {
                                    echo '</a>';
                            }

                            ?>

                            <?php endif; ?>

                            <!--<?php if ( get_sub_field('title') ) : ?>
                            <div class="text-center" style="max-width: <?php echo $width ;?>px"><?php the_sub_field('title'); ?></div>
                            <?php endif; ?>

                            <?php if ( get_sub_field('description') ) : ?>
                            <div class="text-center add-bottom" style="max-width: <?php echo $width ;?>px"><?php the_sub_field('description'); ?></div>
                            <?php endif; ?>

                            <?php if ( get_sub_field('link') ) : ?>
                            <div class="text-center"><a href="<?php the_sub_field('link'); ?>" target="_blank" style="max-width: <?php echo $width ;?>px">Visit Website</a></div>
                            <?php endif; ?>-->

                        </div>



                    </div>

                    <?php if ( get_sub_field('new_line') ) : ?>
                    <br>
                    <?php endif; ?>

                    <?php endwhile; ?>

                </div>

            </div>

            <?php endif; ?>

            <?php endif; ?>
            <!-- ---------------------- Section Template ---------------------- -->

            <!-- ---------------------- Section Template ---------------------- -->
            <?php if( get_row_layout() == 'card_deck_section' ): ?>

            <?php $cardWidth = get_sub_field('cards_width') ;?>
            <?php $cardAlign = get_sub_field('cards_text_align') ;?>

            <?php if( have_rows('section_cards') ): ?>

            <style>

                .card-container {

                }

                .card-item {
                    display: table-cell;
                    margin-bottom: 30px;
                }

                .card-item-body {
                    border: 1px solid #ddd;
                    background: #FFF;
                }

                .card-item-text {
                    padding: 30px;
                }

                .card-item-heading {
                    font-size: 21px !important;
                    font-weight: 900;
                }

                .card-item-text p {
                    font-size: 16px !important;
                }

                .card-item-text hr {
                    width: 25%;
                    border-top: 2px solid <?= get_field('site_highlight_color','option') ?>;
                }

            </style>

            <div class="row card-container">

                <?php while ( have_rows('section_cards') ) : the_row(); ?>

                    <div class="card-item <?php echo $cardWidth ;?> <?php echo $cardAlign ;?>">

                        <div class="card-item-body h-100">

                            <img class="w-100" src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title'); ?>">

                            <div class="card-item-text <?php echo $cardAlign ;?>">

                                <h4 class="card-item-heading"><?php the_sub_field('title'); ?></h4>

                                <hr>

                                <?php the_sub_field('description'); ?>

                            </div>

                        </div>

                    </div>

                <?php endwhile; ?>

            </div>

            <?php endif; ?>

            <?php endif; ?>
            <!-- ---------------------- Section Template ---------------------- -->

        </div>
    </div>

    <!-- ---------------------- Section Template ---------------------- -->
    <?php if ( !is_mobile() ) : ?>
        <?php if( get_row_layout() == 'slider_section' ): ?>

        <?php if ( get_sub_field('slider_height') ) : ?>
        <style>
            .carousel-item {
                height:  <?php the_sub_field('slider_height'); ?>px !important;
            }
        </style>
        <?php endif; ?>

        <div class="slider-wrapper">
            <div class="carousel slide" data-ride="carousel" data-interval="3000">
                <div class="carousel-inner" role="listbox">

                    <?php $images = get_sub_field('slider_gallery'); ?>

                    <?php if( $images ): ?>
                    <?php foreach( $images as $key => $image ): ?>
                    <div class="carousel-item <?php echo ($key == 0) ? 'active' : '' ; ?>" style="background-image: url('<?php echo $image['url']; ?>')">
                        <img class="d-block img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" style="visibility: hidden">
                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>

        <?php endif; ?>
    <?php endif; ?>
    <!-- ---------------------- Section Template ---------------------- -->

</section>

<?php endwhile; ?>
<?php endif; ?>