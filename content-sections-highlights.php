<?= $sectionHighlightItemPadding ;?>
<!-- ---------------------- Section Template ---------------------- -->
<?php if( get_row_layout() == 'highlights_section' ): ?>

<?php if( have_rows('event_highlights') ): ?>

<?php if ( $sectionHighlightPadding ) : ?>
<style>
    .section-<?= $sectionLinkSlug; ?> .highlight-wrapper {
         padding:  <?php echo $sectionHighlightPadding;?>;
     }
</style>
<?php endif; ?>

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

                <img src="<?php echo $thumb; ?>" title="<?php echo $title; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />

                <?php

                    if( $link ) {
                        echo '</a>';
                    }

                ?>

                <?php endif; ?>

                <?php if ( get_sub_field('title') ) : ?>
                <div class="text-center" style="max-width: <?php echo $width ;?>px"><?php the_sub_field('title'); ?></div>
                <?php endif; ?>

                <?php if ( get_sub_field('description') ) : ?>
                <div class="text-center add-bottom" style="max-width: <?php echo $width ;?>px"><?php the_sub_field('description'); ?></div>
                <?php endif; ?>

                <?php if ( get_sub_field('link') ) : ?>
                <div class="text-center"><a href="<?php the_sub_field('link'); ?>" target="_blank" style="max-width: <?php echo $width ;?>px">Visit Website</a></div>
                <?php endif; ?>

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