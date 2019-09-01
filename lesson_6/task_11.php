<?php

$employees = [

	['name' => 'Yan', 'salery' => '1200', 'work_hours' => 180],

	['name' => 'Barda', 'salery' => '2150', 'work_hours' => 160],

	['name' => 'Piter', 'salery' => '1500', 'work_hours' => 160],

	['name' => 'Alex', 'salery' => '3340', 'work_hours' => 167],

	['name' => 'Deiv', 'salery' => '1700', 'work_hours' => 176],

	['name' => 'Bob', 'salery' => '1150', 'work_hours' => 182],

	['name' => 'Claus', 'salery' => '2810', 'work_hours' => 155],

	['name' => 'Lina', 'salery' => '1600', 'work_hours' => 169],

	['name' => 'Rod', 'salery' => '2780', 'work_hours' => 191],

	['name' => 'Kristy', 'salery' => '2180', 'work_hours' => 144],

	['name' => 'Ron', 'salery' => '1670', 'work_hours' => 157],

];

//Функція, що виводить результати обробки масиву співробітників
function showFilterRes($arr, $tableHeader) {
	print('<div style="font-weight: bold; margin-bottom: 5px">' . $tableHeader . '</div>');

	print('
		<table style="padding: 0 0 45px 0">
			<thead style="font-weight: bold">
				<td style="padding: 0 10px">Name</td>
				<td style="padding: 0 10px">Salery</td>
				<td style="padding: 0 10px">Work hours</td>
			</thead>
		
			<tbody>
	');

	foreach ($arr as $key) {
		print('<tr>');

		foreach ($key as $val) {
			printf('<td style="padding: 0 10px">%s</td>', $val);
		}

		print('</tr>');
	};

	print('
			</tbody>
		</table>
	');
}

//-----------1-----------//
function addSalary($arr, $sum = 1600, $sumAdd = 100) {
	if(+$arr['salery'] < $sum) {
		+$arr['salery'] += $sumAdd;
	}

	return $arr;
}

$res = array_map('addSalary', $employees);

showFilterRes($res, 'Перелік співробітників після підвищення зарплати'); // ВИВОДЯТЬСЯ ВСІ СПІВРОБІТНИКИ, В Т.Ч. Й ТІ, КОМУ ЗАРПЛАТУ НЕ ЗБІЛЬШЕНО

//-----------2-----------//
function addPremium($arr, $hours = 180, $premiumAdd = 1.2) {
	if($arr['work_hours'] > $hours) {
		+$arr['salery'] *= $premiumAdd;
	}

	return $arr;
}

$res = array_map('addPremium', $employees);

showFilterRes($res, 'Перелік співробітників після отримання премії'); // ВИВОДЯТЬСЯ ВСІ СПІВРОБІТНИКИ, В Т.Ч. Й ТІ, КОМУ ЗАРПЛАТУ НЕ ЗБІЛЬШЕНО

//-----------3-----------//
function showHoursLess($arr, $hours = 160) {
	return $arr['work_hours'] < $hours;
}

$res = array_filter($employees, 'showHoursLess');

showFilterRes($res, 'Cпівробітники, які відпрацювали менше 160 годин');

//-----------4-----------//
function showSalaryLess($arr, $sum = 2000) {
	return $arr['salery'] < $sum;
}

$res = array_filter($employees, 'showSalaryLess');

showFilterRes($res, 'Cпівробітники, у яких ЗП меньше 2000');

