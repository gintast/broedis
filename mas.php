<?php

$masyvas = [];// tuščias masyvas

$masyvas[-56.5] = 'katės žaislai';
$masyvas[1] = '2knygos';
$masyvas['zurnalai'] = 'seni žurnalai';
$masyvas[''] = 'katės žaislai';
$masyvas['-56'] = 'knygos';
$masyvas[null] = 'labai seni žurnalai';

echo '<pre>';

$masyvas[] = 'auto';

$B = ['Bebras'];
$A = &$B;

// echo '<br>';
// print_r(  $A );
// echo '<br>';
// print_r(  $B );
// $B = ['Briedis'];
// echo '<br>----';
// print_r(  $A );
// echo '-----<br>';
// print_r(  $B );





foreach ($masyvas as $index => &$value) {

    // $masyvas[$index] = 'Bla bLA '.$value; 

    $value = 'UU $value';

    if ('2knygos' == $value) {
        unset($masyvas[$index]);
    }

}


$colors = ['red', 'blue', 'green', 'yellow'];

foreach($colors as &$val) {}

unset($val);



foreach($colors as $val) {
    echo '<br>';
    echo $val;
    // break;
}

// print_r(  $colors );



// echo $masyvas[''];
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
print_r(  $masyvas );
 
