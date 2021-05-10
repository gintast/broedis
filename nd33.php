<?php

$till = rand(3000, 4000);
$first = true;

echo '<div style="word-break: break-all;">';
for($i = 1; $i <= $till; $i++) {
    if (!($i%77)) {
        if ($first) {
            echo $i;
            $first = false; 
        }
        else {
            echo ','.$i;
        }
    }
}
echo '</div>';