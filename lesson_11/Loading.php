<?php

trait Loading
{
    public function setLoad(int $amount): void
    {
        if($this->typeTransport === 'cargo') {
            $this->typeTransport = 'Free cargo space - ';
        } else {
            $this->typeTransport = 'Empty passengers places - ';
        }

        if($amount <= ($this->totalMaxAmount - self::$currentAmount)) {
            self::$currentAmount += $amount;
        } else {
            echo '<br>Too much loading. ' . $this->typeTransport . $this->getEmpty() . '<br>';
        }
    }
}