<?php

class Tyrion
{
	public function sleepWith($someone)
	{
		if ($someone instanceof Jaime)
			print("Not even if I'm drunk !".PHP_EOL);
		else if ($someone instanceof Stark)
			print("Let's do this.".PHP_EOL);
		else if ($someone instanceof Lannister)
			print("Not even if I'm drunk !".PHP_EOL);
	}
}

?>
