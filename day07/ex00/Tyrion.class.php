<?php

class Tyrion extends Lannister
{
	public function __construct()
	{
		parent::__construct();
		echo "My name is ".get_class($this). PHP_EOL;
	}

	public function getSize()
	{
		return "Short";
	}
}
