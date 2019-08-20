<?php

/*------------ task - 1 ------------*/
$var = 1;

$var += 12;

$var -= 14;

$var *= 5;

$var /= 7;

$var++;

$var--;

echo $var . '<br><br>';
/*----------------------------------*/
//
//
/*------------ task - 2 ------------*/
$a = 17;
$b = 10;
$c = $a - $b;
$d = 7;
$result = $c + $d;

echo $result . '<br><br>';
/*----------------------------------*/
//
//
/*------------ task - 3 ------------*/
$age = '35';
$str = 'Мне много лет';
$strReplaced = str_replace('много', $age, $str);

echo $strReplaced . '<br><br>';
/*----------------------------------*/
//
//
/*------------ task - 4 ------------*/
$surname = 'Иванов';
$middleName = 'Иван';
$name = 'Петрович';

echo $surname . ' ' . mb_substr($middleName,0, 1) . '.' . mb_substr($name, 0, 1) . '.<br><br>';

// alternative variant
echo $surname . ' ' . iconv_substr($middleName,0, 1, "utf-8") . '.' . iconv_substr($name, 0, 1, "utf-8") . '.';
/*----------------------------------*/
