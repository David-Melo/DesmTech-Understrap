<?php

function shortcode_make_acf_tickets($params = array()) {

    $args = array(
        'post_type' => 'tickets',
        'orderby' => 'id',
        'order'   => 'ASC'
    );

    $the_query = new WP_Query( $args );

    $col = isset($params['grid']) ? $params['grid'] : 'col-sm-3';

    $i = 0;

    ob_start();

    echo "<div class='container'>";
    echo "<div class='d-flex flex-column flex-sm-column flex-md-column flex-lg-row align-items-stretch justify-content-around'>";

    echo "
    <style>
        .ticket {
            border-radius: 0;
            border: 1px solid gray;
            width: 325px;
        }
        .ticket .h2 {          
            text-transform: uppercase;
            text-align: center;
            font-size: 30px;
            font-weight: 900;
        }
        .h2.ticket-text {
            min-height: 66px;
        }
        .ticket .card-footer {
            color: #FFF;
            border-radius: 0;
            text-transform: uppercase;
            text-align: center;
            border: 0;
            padding: 0;
        }
        .ticket .card-footer a {
            display: block;
            padding: 15px;
            text-align: center;
            text-decoration: none;
            color: #FFFFFF !important;
            font-size: 30px;
    
        }
        .ticket .card-footer a:hover {
            color: #000 !important;
        }
        .ticket-price {
            font-family: 'Gotham Bold', sans-serif;
            font-weight: 900;
            font-size: 55px;
        }
    </style>
    ";

    // ---------------------------------------------------------------------------------------------------

    if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) :

            $the_query->the_post();

            $i++;

            $title                   = get_the_title()                      ? "<div class='h2 brand-medium ticket-text'>" . get_the_title() . "</div>" : '';
            $subtitle                = get_field('subtitle')                ? "<div>" . get_field('subtitle') . "</div>" : '';
            $age_label               = get_field('age_label')               ? "<div>" . get_field('age_label') . "</div>" : '';
            $age_detail              = get_field('age_detail')              ? "<div>" . get_field('age_detail') . "</div>" : '';
            $price                   = get_field('price')                   ? "<div class='ticket-price my-3'>" . get_field('price') . "</div>" : '';
            $price_expiration_date   = get_field('price_expiration_date')   ? "<div>" . get_field('price_expiration_date') . "</div>" : '';
            $details_link            = get_field('details_link')            ? "<div><a href='" . get_field('details_link') ."' title='" . get_the_title() . "'>Click For Details</a></div>" : '';
            $ticket_terms_conditions = get_field('ticket_terms_conditions') ? "<div class='brand-thin'>" . get_field('ticket_terms_conditions') . "</div>" : '';
            $color                   = get_field('color');

            echo "<div class='d-flex align-self-stretch'>";

                echo "
                    <style type='text/css'>
                        .ticket-$i .ticket-background {
                            background-color: $color !important;;
                        }
                        .ticket-$i.ticket-border {
                            border-color: $color !important;
                        }
                        .ticket-$i .ticket-text {
                            color: $color !important;
                        }
                    </style>
                ";

                echo "
                    <div class='ticket-$i ticket ticket-border card mb-4 d-flex align-self-stretch'>
                        <div class='card-block text-center py-4 d-flex flex-column justify-content-start'>
    
                            $title
    
                            <div class='ticket-details'>
                                $subtitle
                                $age_label
                                $age_detail
                            </div>
                                
                            $price
                            $price_expiration_date
                            $details_link
                            $ticket_terms_conditions
    
                        </div>
                        <div class='card-footer ticket-background'>
                            <a href='" . get_field('details_link') . "' title='" . get_the_title() . "'>BUY</a>
                        </div>
                    </div>
                ";

            echo "</div>";

        endwhile;
    endif;

    // -----------------------------------------------------------------------------------------------

    echo "</div>";
    echo "</div>";

    wp_reset_query();

    return ob_get_clean();

}
add_shortcode('tickets', 'shortcode_make_acf_tickets');