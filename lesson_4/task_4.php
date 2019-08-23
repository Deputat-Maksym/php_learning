<?php

$days = [
    "ru" => ["пн", "вт", "ср", "чт", "пт", "сб", "вс"],
    "en" => ["mon", "tue", "wen", "fue", "fri", "sat", "sun"]
];


echo 'язык - ' . $_GET['lang'] . '<br>';
echo 'день недели - ' . $days[ $_GET['lang'] ][ (+($_GET['day']) - 1) ] . '<br>';

// GET - parameters;
// ?lang=ru&day=1