<?php

function add($numOne, $numTwo) {
	return $numOne + $numTwo;
};

function sub($numOne, $numTwo) {
	return $numOne - $numTwo;
};


function operation($numOne, $numTwo, $operator) {
	$res = $operator($numOne, $numTwo);
	return $res;
};

echo operation(5, 10, 'sub');
