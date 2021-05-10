<?php
session_start();

$colors = 
[
    'red',
    [
        'red1',
        'blue1',
        'green1',
        'yellow1'
    ],
    'blue',
    [    'red2',
         'blue2',
         ['red3', 'blue3', 'green3', 'yellow3'],
         'yellow2'
    ],
    'green',
    'yellow'
];



// _d($colors);


$komoda = [];

foreach(range(1, 10) as $stalcius) {

    if (rand(0, 3)) {
        // darome nauja dezute
        $dezute = [];
        foreach(range(1, rand(4, 10)) as $skyrelis) {
            $dezute[$skyrelis] = rand(1000000, 9999999);
        }
        $komoda[$stalcius] = $dezute;
    }
    else {
        $komoda[$stalcius] = rand(1000000, 9999999);
    }

}

// $_SESSION['m'] = $komoda;

$komoda = $_SESSION['m'];
_d($komoda);

_d($komoda[2], '$komoda[2]');
_d($komoda[6][4], '$komoda[6][4]');
_d($komoda[10][1], '$komoda[10][1]');
_d($komoda[4], '$komoda[ 4]');


foreach($komoda as $dezute) {

    //ar dezute?
    if (is_array($dezute)) {
        foreach($dezute as $skaicius) {
            // _d($skaicius);
        }
    }
    else {
        $skaicius = $dezute; // tai ne masyvas tai reiksme
        // _d($skaicius);
    }




}
