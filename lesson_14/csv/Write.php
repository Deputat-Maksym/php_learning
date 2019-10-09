<?php

require_once 'WriteFile.php';

class Write implements WriteFile
{
    private $fileName = null;

	public function __construct(string $fileName)
	{
		$this->fileName = $fileName;
	}

    public function writeData(array $writeData)
    {
        if(file_exists($this->fileName)) {
            return $handle = fopen($this->fileName, 'r');
        } else {
            return false;
        }
    }
}
