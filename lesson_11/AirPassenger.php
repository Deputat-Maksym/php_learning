<?php

require_once 'Transport.php';
require_once 'Loading.php';
require_once 'UnLoading.php';
require_once 'UnLoadingAll.php';
require_once 'HowMuchEmpty.php';

class AirPassenger extends Transport
{
    use Loading, HowMuchEmpty, UnLoading, UnLoadingAll;

    private $typeTransport = 'passengers';
}