<?php

require_once 'AirPassenger.php';

$passengerPlane = new AirPassenger(100);

$passengerPlane->setLoad(50);
$passengerPlane->setLoad(100);
$passengerPlane->setLoad(10);
echo $passengerPlane->getEmpty() . '<br>';

$passengerPlane->UnLoad(10);
echo $passengerPlane->getEmpty() . '<br>';
