<?php

for ($i = 0; $i < 1000; $i += 1) {
    if($i % 3 == 0|| $i % 5 == 0){
    	$items[] = $i;
    }
}
echo array_sum($items);

?>