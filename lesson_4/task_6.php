<?php

$arr = array_combine(range(150, 90, 3), range(90, 150, 3));
$arrKeySorted = $arr;

ksort($arrKeySorted);

print_r ($arr);
echo '<br>---------------------------------------<br>';
print_r ($arrKeySorted);
