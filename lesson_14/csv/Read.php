<?php

require_once 'ReadFile.php';

class Read implements ReadFile
{
    private $fileName;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }

    public function readData()
    {

        if(file_exists($this->fileName)) {
            return $handle = fopen($this->fileName, 'r');
            $getData = $handle;
        } else {
            echo 'File is not exist';
        }
    }
}