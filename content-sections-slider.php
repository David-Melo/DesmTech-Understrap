<!-- ---------------------- Section Template ---------------------- -->

<?php if( get_row_layout() == 'slider_section' ): ?>

<?php if ( get_sub_field('slider_height') ) : ?>
<style>
    .section-<?php the_sub_field('section_link_title'); ?> .carousel-item {
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

<!-- ---------------------- Section Template ---------------------- -->