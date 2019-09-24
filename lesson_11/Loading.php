<?php

trait Loading
{
    public function setLoad($amount): void
    {
        if($amount <= ($this->totalMaxAmount - $amount)) {
            self::$currentAmount += $amount;
        }
    }
}