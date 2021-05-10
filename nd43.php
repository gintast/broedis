<?php

$masyvas = [];
// $counter = ['A'=>0,'B'=>0,'C'=>0,'D'=>0];
$counter = [];

foreach(range(1, 200) as $val) {
    $masyvas[] = range('*', 'Z')[rand(0, count(range('*', 'Z'))-1)];
}

foreach($masyvas as $val) {
    $counter[$val] = ($counter[$val] ?? 0) + 1;
}

_d($masyvas);
_d($counter);