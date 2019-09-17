<?php
error_reporting(E_ALL);

include_once 'Users.php';

$user = new Users('Vasya', '1900-10-10', 'developer', 5000);

var_dump($user);

echo '<br>---------------------------<br>';

$user2 = clone $user;

$user2->setPosition('worker');
$user2->setSalary(10000);


var_dump($user2);

echo '<br>---------------------------<br>';

echo $user2::getStaticCount();

echo '<br>---------------------------<br>';

$user2::setStaticCount(9);

echo $user2::getStaticCount();