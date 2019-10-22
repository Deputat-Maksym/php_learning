<?php


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
            $handle = fopen($this->fileName, 'r');
            $fileData = [];

            while(($data = fgetcsv($handle, 1000, ';')) !== false) {
                array_push($fileData, $data);
            }

            fclose($handle);
            return $fileData;
        } else {
            return false;
        }
    }
}