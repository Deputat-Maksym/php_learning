<?php

require_once 'ReadFile.php';

class Read implements ReadFile
{
    private $fileName = null;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }

    public function readData()
    {
        if(file_exists($this->fileName)) {
            return $handle = fopen($this->fileName, 'r');
        } else {
            return false;
        }
    }
}