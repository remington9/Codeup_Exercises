<?php

function compareArrays($compare, $names){
	$matchingnumber = 0;
	foreach ($names as $index => $name) {
		$check = array_search($name, $compare);
		if($check !== false){
			$matchingnumber++;
		}
	}echo $matchingnumber . PHP_EOL;

}

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];
$query = 'Tina';
$result = array_search($query, $names);

if ($result !== false) {
    echo 'TRUE'.PHP_EOL;
}else{
	echo 'FALSE'.PHP_EOL;
}

compareArrays($compare, $names);
