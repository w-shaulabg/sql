<?php

class Cat
{
	private $name;
	
	public function __construct($name)
	{
		$this->name = $name;
	}
	
	public function name()
	{
		return "猫の名前は" . $this->name . "です";
	}
}

$cat = new Cat("タマ");
echo $cat->name();