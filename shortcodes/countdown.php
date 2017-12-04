<?php

function shortcode_make_countdown($params = array()) {

    $now = time();
    $pre = [
        'year' => 1986,
        'day' => 24,
        'month' => 07,
        'hour' => 1,
        'minute'=> 10
    ];

    $date = array_merge($pre, $params);

    ob_start();

    echo "<div id='countdown-timer-{$now}' class='countdown-timer-wrapper d-flex flex-column flex-md-row justify-content-center text-center'>";
    echo "<div class='countdown-timer-item ct-days'><div class='ct-inner'><div class='ct-label'>Days</div><div id='countdown-timer-{$now}-days' class='ct-value'></div></div></div>";
    echo "<div class='countdown-timer-item ct-hours'><div class='ct-inner'><div class='ct-label'>Hours</div><div id='countdown-timer-{$now}-hours' class='ct-value'></div></div></div>";
    echo "<div class='countdown-timer-item ct-mins'><div class='ct-inner'><div class='ct-label'>Minutes</div><div id='countdown-timer-{$now}-minutes' class='ct-value'></div></div></div>";
    echo "<div class='countdown-timer-item ct-secs'><div class='ct-inner'><div class='ct-label'>Seconds</div><div id='countdown-timer-{$now}-seconds' class='ct-value'></div></div></div>";
    echo "</div>";

    echo "<script type='text/javascript'>";
    echo "
    jQuery(document).ready(function(){
        countdown(
            new Date({$date['year']},{$date['month']},{$date['day']},{$date['hour']},{$date['minute']}),
            function(ts) {
                document.getElementById('countdown-timer-{$now}-days').innerHTML = ts.days;
                document.getElementById('countdown-timer-{$now}-hours').innerHTML = ts.hours;
                document.getElementById('countdown-timer-{$now}-minutes').innerHTML = ts.minutes;
                document.getElementById('countdown-timer-{$now}-seconds').innerHTML = ts.seconds;
            }
        );
    });
    ";
    echo "</script>";

    return ob_get_clean();

}
add_shortcode('countdown', 'shortcode_make_countdown');