<?php

class Cat
{
	private $name;
	
	public function __construct($name)
	{
		$this->name = $name;
	}
	
	public function introduction()
	{
	  $catName = $this->name();
		echo "猫の名前は" . $catName . "です";
	}
	
	private function name()
	{
	  return $this->name;
	}
}

$tama = new Cat("タマ");
$tama->introduction();