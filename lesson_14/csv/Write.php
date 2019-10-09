<?php

require_once 'WriteFile.php';

class Write implements WriteFile
{
    private $fileName = null;

    public function writeData($writeData)
    {
        if(file_exists($this->fileName)) {
            return $handle = fopen($this->fileName, 'r');
        } else {
            return false;
        }
    }
}