<?php

$a = 2;
do {
    echo "\$a is {$a}\n";
    $a *= $a;
} while ($a < 1000000);

?>