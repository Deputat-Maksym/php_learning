<?php

// -------------1--------------
$arr = [2, -5, -9, 15, 11, -4, 7, 1, -10];
$plusSum = 0;
$minusSum = 0;

foreach ($arr as $item) {
	if ($item > 0) {
		$plusSum += $item;
	} else {
		$minusSum += $item;
	}
}

echo $plusSum . '<br>';
echo $minusSum . '<br>----------------<br>';

// -------------2--------------
$numberRange = 30;
$resultArr = [];

for ($i = 1; $i <= $numberRange; $i++) {
	if ($numberRange % $i == 0) {
		array_push($resultArr, $i);
	}
}

print_r($resultArr);
echo '<br>----------------<br>';

// -------------3--------------
$number = 10;

for ($a = $number; $a > 0; $a--) {
	echo '<p>';

	for ($b = 1; $b <= $a; $b++) {
		echo 'x';
	}

	echo '</p>';
}
