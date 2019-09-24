<?php

trait UnLoading
{
    public function UnLoad($amount): void
    {
        if($amount <= self::$currentAmount) {
            self::$currentAmount -= $amount;
        }
    }
}