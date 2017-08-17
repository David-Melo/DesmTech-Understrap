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