<?php

require_once 'Worker.php';

$obj1 = new Worker('Іван', 25, 1000);
$obj2 = new Worker('Вася', 22, 2000);

printf('Сума зарплат %s та %s - %s<br><br>', $obj1 -> getName(), $obj2 -> getName(), $obj1 -> getSalary() + $obj2 -> getSalary());
printf('Сума віку %s та %s - %s<br><br>', $obj1 -> getName(), $obj2 -> getName(), $obj1 -> getAge() + $obj2 -> getAge());

$obj1 -> showInfo();
$obj2 -> showInfo();

// Змінюємо для Васі вік і виводимо
$obj1 -> setAge(10);
$obj1 -> showInfo();
