<?php

class Jaime
{
	public function sleepWith($someone)
	{
		if ($someone instanceof Tyrion)
			print("Not even if I'm drunk !".PHP_EOL);
		else if ($someone instanceof Stark)
			print("Let's do this.".PHP_EOL);
		else if ($someone instanceof Lannister)
			print("With pleasure, but only in a tower in Winterfell, then.".PHP_EOL);
	}
}

?>
