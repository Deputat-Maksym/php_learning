<?php

trait UnLoading
{
    public function unLoad($amount): void
    {
        if($this->typeTransport === 'cargo') {
            $this->typeTransport = 'Rest of cargo in transport - ';
        } else {
            $this->typeTransport = 'Rest of passengers in transport - ';
        }

        if($amount <= self::$currentAmount) {
            self::$currentAmount -= $amount;
        } else {
            echo '<br>Too much unloading. ' . $this->typeTransport . self::$currentAmount . '<br>';
        }
    }
}