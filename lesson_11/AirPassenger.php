<?php

require_once 'Transport.php';
require_once 'Loading.php';
require_once 'UnLoading.php';
require_once 'HowMuchEmpty.php';

class AirPassenger extends Transport
{
    use Loading, HowMuchEmpty, UnLoading;

//    public function __construct($totalMaxAmount)
//    {
//        parent::__construct($totalMaxAmount);
//    }
}