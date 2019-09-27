<?php


abstract class Transport
{
    //max допустима кількість пасажирів/вантажу
    protected $totalMaxAmount;

    //поточний стан транспорту (stop, go, loading, unloading). За замовчуванням - 'stop'
    protected $transportState = 'stop';

    //поточне завантаження транспорту пасажирами/вантажем
    protected static $currentAmount = 0;

    public function __construct(int $totalMaxAmount)
    {
        $this->totalMaxAmount = $totalMaxAmount;
    }

    // Метод для зміни стану транспорту
    public function changeState(string $transportState): void
    {
        if ($transportState === 'stop' && self::$currentAmount != 0) {
            echo '<br>Transport is not empty. Try to unload transport first<br>';
        } elseif ($transportState === 'stop' && self::$currentAmount == 0) {
            $this->transportState = $transportState;
        } elseif($transportState === 'go' || $transportState === 'loading' || $transportState === 'unloading') {
            $this->transportState = $transportState;
        } else {
            echo '<br>Tere is no transport transport state - ' . $transportState . '<br>';
        }
    }

    // Метод для перевірки стану транспорту
    public function getState(): string
    {
        return $this->transportState;
    }
}