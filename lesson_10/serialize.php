<?php


require_once 'Users.php';

$user = new Users('Name', '2000-05-25', 'worker', 1000);

$objectStr = serialize($user);

echo 'Серіалізовані дані<br>';
print_r($objectStr);

echo '<br>---------------------------<br>';

$userSerialised = unserialize($objectStr, ['allowed_classes' => ['Users']]);

echo 'Дані після десеріалізації<br>';
var_dump($userSerialised);
