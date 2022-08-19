<?php

class Cat
{
	private $name;
	private $age;
	
	public function __construct($name, $age)
	{
		$this->name = $name;
		$this->age = $age;
	}
	
	public function introduction()
	{
		return $this->name . "は" . $this->age . "歳です";
	}
}
$cat = new Cat("タマ",5);
echo $cat->introduction();