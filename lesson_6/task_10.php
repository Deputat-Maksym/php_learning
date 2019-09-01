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
// Створюємо масив $resultArr натуральних чисел, де кожне натуральне число k зустрічається рівно k разів
$resultArr = [];
$num = 6; // найбільше гатуральне число в масиві $resultArr

// Функція з рекурсивним push`ом кожного натурального числа в масив $resultArr
function resultArrPush($currentNum, $i) {

	global $resultArr;

	if($i) {
		$resultArr[] = $currentNum;
		$i--;

		resultArrPush($currentNum, $i);
	}

}

//  Генеруємо послідовність натуральних чисел через цикл
for ($i = 1; $i <= $num; $i++) {
	$currentNum = $i;
	resultArrPush($currentNum, $i);
}

// виводимо отриманий масив натуральних чисел
var_dump($resultArr);

