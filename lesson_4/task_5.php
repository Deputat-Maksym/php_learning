<?php

$array = array(
            'a1' => array(
                'id'=>'1',
                'age'=>'16',
                'gender'=>'m',
                'login'=>'Вася'),
            'a2' => array(
                'id'=>'2',
                'age'=>'18',
                'gender'=>'m',
                'login'=>'Петя'),
            'a3' => array(
                'id'=>'3',
                'age'=>'20',
                'gender'=>'g',
                'login'=>'Катя'),
            'a4' => array(
            	'id'=>'4',
                'age'=>'20',
                'gender'=>'m',
                'login'=>'Стас'),
            'a5' => array(
            	'id'=>'5',
                'age'=>'12',
                'gender'=>'g',
                'login'=>'Маша'),
            'a6' => array(
                'id'=>'6',
                'age'=>'44',
                'gender'=>'g',
                'login'=>'Галя'),
            'a7' => array(
                'id'=>'7',
                'age'=>'45',
                'gender'=>'m',
                'login'=>'Макс'),
            'a8' => array(
                'id'=>'8',
                'age'=>'20',
                'gender'=>'m',
                'login'=>'Илья'),
            'a9' => array(
                'id'=>'9',
                'age'=>'20',
                'gender'=>'g',
                'login'=>'Даша'),
    );

$age = array_column($array, 'age');
$gender = array_column($array, 'gender');

array_multisort($age, SORT_ASC, $gender,SORT_DESC, $array);
?>

<table>
	<thead>
		<td>id</td>
		<td>age</td>
		<td>gender</td>
		<td>login</td>
	</thead>

	<tbody>
		<tr>
			<td>
			<?php
				foreach ($array as $key) {
					print('<tr>');

					foreach ($key as $val) {
						printf('<td>%s</td>', $val);
					}

					print('</tr>');
				}
			?>
			</td>
		</tr>
	</tbody>
</table>

<style>
	thead {
		font-weight: bold;
	}
	td {
		padding: 0 10px;
	}
</style>
