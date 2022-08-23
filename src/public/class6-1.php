<?php
class Calculation
{
	private $num;

	public function __construct($num)
	{
		$this->num = $num;
	}

	public function output()
	{
		$output = $this->addTwo();
		return $output;
	}

	private function addTwo()
	{
		return $this->num + 2;
	}
}

$calculation = new Calculation(5);
echo $calculation->output();
