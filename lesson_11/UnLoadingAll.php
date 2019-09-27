<?php

trait UnLoadingAll
{
    public function unLoadingAll(): void
    {
        self::$currentAmount = 0;
    }
}