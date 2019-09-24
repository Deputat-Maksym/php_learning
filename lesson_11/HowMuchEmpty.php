<?php

trait HowMuchEmpty
{
    public function getEmpty(): int
    {
        return $this->totalMaxAmount - self::$currentAmount;
    }
}