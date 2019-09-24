<?php
/**
 * Created by PhpStorm.
 * User: Deputat
 * Date: 24.09.2019
 * Time: 14:44
 */

class AirFreight
{
    //max корисне навантаження транспорту
    private $totalMaxAmount;

    //поточне завантаження транспорту вантажем
    private static $currentAmount;

    public function __construct($totalMaxAmount)
    {
        $this->totalMaxAmount = $totalMaxAmount;
    }
}