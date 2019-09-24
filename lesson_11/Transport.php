<?php


abstract class Transport
{
    //max допустима кількість пасажирів/вантажу
    protected $totalMaxAmount;
    protected $transportState = '';

    //поточне завантаження транспорту пасажирами/вантажем
    protected static $currentAmount = 0;

    public function __construct($totalMaxAmount)
    {
        $this->totalMaxAmount = $totalMaxAmount;
    }
}