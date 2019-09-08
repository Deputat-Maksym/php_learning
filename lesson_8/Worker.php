<?php


class Worker
{
	private $name;
	private $age;
	private $salary;

	public function __construct($name, $age, $salary)
	{
		$this -> name = $name;
		$this -> age = $age;
		$this -> salary = $salary;

	}

	private function checkAge($age): int
	{
		if($age > 0 && $age <= 100) {
			return true;
		} else {
			return false;
		}
	}

	public function setName($name): string
	{
		$this -> name = $name;
	}

	public function getName(): string
	{
		return $this -> name;
	}

	public function setAge($age)
	{
		if($this -> checkAge($age)) {
			return $this -> name = $age;
		}
	}

	public function getAge(): int
	{
		return $this -> age;
	}

	public function setSalary($salary): int
	{
		$this -> name = $salary;
	}

	public function getSalary(): int
	{
		return $this -> salary;
	}

	public function showInfo() {
		printf('Name - %s<br>Age - %s<br><br>',
					$this -> name,
					$this -> age
		);
	}
}
