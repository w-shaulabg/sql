<?php

class Human
{
	private $name;
	private $weight;

	const MY_NAME_IS = "私の名前は";
	const MY_WEIGHT_IS = "私の体重は";

	public function __construct($name, $weight)
	{
		$this->name = $name;
		$this->weight = $weight;
	}

	public function name()
	{
		return self::MY_NAME_IS . $this->name . "です";
	}

	public function weight()
	{
		return self::MY_WEIGHT_IS . $this->weight . "kgです";
	}
}
$human = new Human("太郎",65);
echo $human->name() . "<br/>";
echo $human->weight();

