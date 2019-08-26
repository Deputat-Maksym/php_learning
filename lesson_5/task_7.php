<?php

// -------------1--------------
$num = 4;
$result = '';

if ($num == 1) {
	$result = 'зима';
} elseif ($num == 2) {
	$result = 'весна';
} elseif ($num == 3) {
	$result = 'літо';
} elseif ($num == 4) {
	$result = 'осінь';
};

switch ($num) {
	case 1:
		$result = 'зима';
		break;
	case 2:
		$result = 'весна';
		break;
	case 3:
		$result = 'літо';
		break;
	case 4:
		$result = 'осінь';
		break;
}
//echo $result;

// -------------2--------------
$day = 5;
$decade = '';

if ($day <= 10) {
	$decade = 'Перша декада місяця';
} elseif ($day >= 11 && $day <= 20) {
	$decade = 'Друга декада місяця';
} else {
	$decade = 'Третя декада місяця';
};

switch ($day) {
	case $day <= 10:
		$decade = 'Перша декада місяця';
		break;
	case $day >= 11 && $day <= 20:
		$decade = 'Друга декада місяця';
		break;
	case $day > 20:
		$decade = 'Третя декада місяця';
		break;
}

// -------------3--------------
$month = 1;
$season = '';

if ($month <= 2 || $month == 12) {
	$season = 'зима';
} elseif ($month >= 3 && $month <= 5) {
	$season = 'весна';
} elseif ($month >= 6 && $month <= 8) {
	$season = 'літо';
} elseif ($month >= 9 && $month <= 11) {
	$season = 'осінь';
};

switch ($month) {
	case $month <= 2 || $month == 12:
		$season = 'зима';
		break;
	case $month >= 3 && $month <= 5:
		$season = 'весна';
		break;
	case $month >= 6 && $month <= 8:
		$season = 'літо';
		break;
	case $month >= 9 && $month <= 11:
		$season = 'осінь';
		break;
}
