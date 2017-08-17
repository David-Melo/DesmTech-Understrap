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