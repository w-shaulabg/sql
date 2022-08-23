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
		$catName = $this->name();
		$catAge = $this->age();
		echo "猫の名前は" . $catName . "です". "<br/>";
		echo "猫の年齢は" . $catAge. "歳です";
	}
	
	private function name()
	{
		return $this->name;
	}
	
	private function age()
	{
		return $this->age;
	}
}

$tama = new Cat("タマ", 7);
$tama->introduction();