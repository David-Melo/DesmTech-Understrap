<?php

function shortcode_make_acf_vip_packs($params = array()) {

    $args = array(
        'post_type' => 'vip_packages',
        'category_name' => isset($params['category_name']) ? $params['category_name'] : null,
        'orderby' => 'id',
	    'order'   => 'ASC'
    );

    $the_query = new WP_Query( $args );

    $col = isset($params['grid']) ? $params['grid'] : 'col-sm-3';

    $i = 0;

    // ---------------------------------------------------------------------------------------------------

    ob_start();

print <<<HTMLO
    
    <!-- --------------------------------- PHP ITEMS CONTAINER --------------------------------- -->
    
    <style>
        .vip-pack {
            border-radius: 0;
            border: 0;
        }
        .vip-pack .card-header {
            color: #FFF;
            border-radius: 0;
            text-transform: uppercase;
            text-align: center;
            border: 0;
        }
        .vip-pack .card-footer {
            color: #FFF;
            border-radius: 0;
            text-transform: uppercase;
            text-align: center;
            border: 0;
            padding: 0;
        }
        .vip-pack .card-footer a {
            display: block;
            padding: 15px;
            text-align: center;
            text-decoration: none;
            color: #FFFFFF !important;
            font-size: 30px;
    
        }
        .vip-pack .card-footer a:hover {
            color: #000 !important;
        }
    </style>
    
    <div class="container">
    
        <div class="row">

HTMLO;

?>

            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); $i++ ?>

                <?php $features = ''; ?>

                <?php if( have_rows('features') ): ?>
                    <?php while ( have_rows('features') ) : the_row(); ?>

                        <?php $features .= "<div class='h3 brand-blue brand-thin'>" . get_sub_field('feature') . "</div>" ?>

                    <?php endwhile; ?>
                <?php endif; ?>

<?php

                $color = get_field('color');
                $title = get_the_title();
                $subtitle = (get_field('subtitle')) ? "<div class='h3 brand-blue text-uppercase brand-medium mb-4'>" . get_field('subtitle') . "</div>" : "";
                $link = get_field('buy_link');

print <<<HTMLTW

                <div class="$col">

                    <!-- --------------------------------- PHP LOOP ITEM --------------------------------- -->

                    <style>
                        .vip-pack-$i .pack-background {
                            background-color: $color !important;;
                        }
                        .vip-pack-$i .pack-text {
                            background: $color !important;;
                        }
                        .vip-pack-$i.pack-border {
                            border-color: $color !important;
                        }
                    </style>

                    <div class="vip-pack-$i vip-pack pack-border card mb-4">
                        <h1 class="card-header pack-background brand-medium">
                            $title
                        </h1>
                        <div class="card-block text-center py-5">

                            $subtitle

                            $features

                        </div>
                        <div class="card-footer pack-background">
                            <a href="$link" title="$title">BUY</a>
                        </div>
                    </div>

                    <!-- --------------------------------- PHP LOOP ITEM --------------------------------- -->

                </div>

HTMLTW;
?>

            <?php endwhile; endif; ?>

<?php

print <<<'HTMLTH'

        </div>

    </div>

    <!-- --------------------------------- PHP ITEMS CONTAINER --------------------------------- -->

HTMLTH;

// -----------------------------------------------------------------------------------------------

    wp_reset_query();

    return ob_get_clean();

}
add_shortcode('vip_packs', 'shortcode_make_acf_vip_packs');