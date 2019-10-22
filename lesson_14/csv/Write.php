<?php


class Write implements WriteFile
{
    private $fileName = null;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }

    public function writeData($writeData)
    {
        if(file_exists($this->fileName)) {
            $handle = fopen($this->fileName, 'a');
            fwrite($handle, PHP_EOL); // перенесення рядка
            fputcsv($handle, $writeData, ';');
            fclose($handle);
        } else {
            return false;
        }
    }
}