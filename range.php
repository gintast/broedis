<?php


$range = range(1, 5);

// _d($range);



foreach(range(1, 5) as $i) {
    // _d($i, 'index--->');
}

$colors = ['red', 'blue', 'green', 'yellow'];


foreach($colors as $NR => $color) {
    _d($color, 'spalva--->');
    _d($NR, 'numeris--->');


    if ($color == 'blue') {
        unset($colors[$NR]);
    }

}

_d($colors);