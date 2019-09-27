<?php

require_once 'AirPassenger.php';
require_once 'AirFreight.php';
require_once 'WaterFreight.php';
require_once 'WaterPassenger.php';
require_once 'RoadFreight.php';
require_once 'RoadPassenger.php';

//Створюємо об'єкт пасажирського літака, що вміщає 121 пасажирів
$passengerPlane = new AirPassenger(121);

//Додаємо 90 пасажирів
$passengerPlane->setLoad(90);

//Змінюємо стан літака на "go"
$passengerPlane->changeState('go');
echo '<br>Літак в даний момент - ' . $passengerPlane->getState() . '<br>';

//Після перельоту додаємо ще 90 пасажирів
$passengerPlane->setLoad(30);

//Після перельоту звільняємо транспорт від усіх пасажирів
$passengerPlane->unLoadingAll();

//Перевіряємо чи літак порожній. Виводимо кількість вільних місць
echo '<br>' . $passengerPlane->getEmpty() . '<br>';

//Змінюємо стан літака на "stop"
$passengerPlane->changeState('stop');
echo '<br>Літак в даний момент - ' . $passengerPlane->getState() . '<br>';

echo '<br>-------------------------<br>';


//----------------------------------//


//Створюємо об'єкт танкера, з вантажопід'йомністю 380 тис.тон
$waterTanker = new WaterFreight(380);

//Завантажуємо 300 тис. тон
$waterTanker->setLoad(300);

//Змінюємо стан танкера на "go"
$waterTanker->changeState('go');
echo '<br>Танкер в даний момент - ' . $waterTanker->getState() . '<br>';

//Розвантажуємо 20 тис. тон
$waterTanker->unLoad(20);

//Завантажуємо 100 тис. тон
$waterTanker->setLoad(100);

//Розвантажуємо увесь вантаж
$waterTanker->unLoadingAll();

//Перевіряємо чи танкер порожній. Виводимо кількість вільного місця
echo '<br>' . $waterTanker->getEmpty() . '<br>';

//Змінюємо стан танкера на "stop"
$waterTanker->changeState('stop');
echo '<br>Танкер в даний момент - ' . $waterTanker->getState() . '<br>';

echo '<br>-------------------------<br>';


//----------------------------------//

//Створюємо об'єкт вантажівки, з вантажопід'йомністю 20 тон
$truck = new RoadFreight(20);

//Завантажуємо 12 тон
$truck->setLoad(12);

//Змінюємо стан вантажівки на "go"
$truck->changeState('go');
echo '<br>Вантажівка в даний момент - ' . $truck->getState() . '<br>';

//Завантажуємо 8 тон
$truck->setLoad(8);

//Розвантажуємо увесь вантаж
$truck->unLoadingAll();

//Перевіряємо чи вантажівка порожня. Виводимо кількість вільного місця
echo '<br>' . $truck->getEmpty() . '<br>';

//Змінюємо стан вантажівки на "stop"
$truck->changeState('stop');
echo '<br>Танкер в даний момент - ' . $truck->getState() . '<br>';

