<?php

//-----------1-----------//

function getRevNum($number) {
    if($number) {
        $lastNum = $number % 10;
        $number = ($number - $lastNum) / 10;

        echo ' ' . $lastNum;

        getRevNum($number);
    }

}

getRevNum(5671);

echo '<br>----------------------<br>';


//-----------2-----------//

$resultArr = [];
$num = 6;

function resultArrPush($currentNum, $i) {

	global $resultArr;

	if($i) {
		$resultArr[] = $currentNum;
		$i--;

		resultArrPush($currentNum, $i);
	}

}

for ($i = 1; $i <= $num; $i++) {
	$currentNum = $i;
	resultArrPush($currentNum, $i);
}

var_dump($resultArr);

