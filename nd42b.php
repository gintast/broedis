<?php

$masyvas = [];
foreach(range(1, 30) as $_) {
    $masyvas[] = rand(5, 25);
}

_d($masyvas);


$result = [];
$maxValue = 5;

foreach ($masyvas as $value) {
    if ($maxValue < $value) {
        $maxValue = $value;
    }
}

foreach ($masyvas as $index => $value) {
    if ($maxValue == $value) {
        $result[] = "$index => $value";
    }
}

echo implode(',<br>', $result);