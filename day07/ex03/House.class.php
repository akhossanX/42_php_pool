<?php

abstract class House
{
	public abstract function getHouseName();
	public abstract function getHouseMotto();
	public abstract function getHouseSeat();

	public function introduce()
	{
		print("House ".static::getHouseName()
				." of "
				.static::getHouseSeat()." : \""
				.static::getHouseMotto()."\""
				.PHP_EOL
			);
	}
}

?>
