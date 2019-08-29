<?php

function operation(int $numOne, int $numTwo, string $operator) {
	if ($operator === 'add') {
		return $numOne + $numTwo;
	} elseif ($operator === 'subtract') {
		return $numOne - $numTwo;
	} elseif ($operator === 'multiply') {
		return $numOne * $numTwo;
	} elseif ($operator === 'divide') {
		return $numOne / $numTwo;
	}
};

echo 'Result - ' . operation($_GET['num-first'], $_GET['num-second'], $_GET['operation']) . '<br>';

echo '<br><a href="index.html">Return to calculator</a>';
