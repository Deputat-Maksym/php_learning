<?php

class Users
{
    private  $name;
    private  $dateOfBirthday;
    private  $position;
    private  $salery;

    private static $count = 0;

    /**
     * Users constructor.
     * @param $name
     * @param $dateOfBirthday
     * @param $position
     * @param $salery
     */
    public function __construct($name, $dateOfBirthday, $position, $salery)
    {
        $this->name = $name;
        $this->dateOfBirthday = $dateOfBirthday;
        $this->position = $position;
        $this->salery = $salery;
        self::$count++;

    }

    public function __clone()
    {
        $this->position = NULL;
        $this->salery = NULL;
        self::$count++;
    }

    public function setPosition($position)
    {
        $this->position = $position;
    }

    public function setSalary($salary)
    {
        $this->salery = $salary;
    }

    public static function getStaticCount()
    {
        return self::$count;
    }

    public static function __callStatic($name, $arguments)
    {
        var_dump($name);
        var_dump($arguments);
        if($name == 'setStaticCount') {
            self::$count = $arguments[0];
        }
    }

    public function __sleep()
    {
        return array ('name', 'dateOfBirthday');
    }

    public function __wakeup()
    {
        $this->position = 'empty';
        $this->salery = 'empty';
    }
}