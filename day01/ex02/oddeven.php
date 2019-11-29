#!/usr/bin/php
<?php
	while (true)
	{
		echo "Enter a number: ";
		$nbr = fgets(STDIN);
		if (feof(STDIN))
			die("\n");
		$cp = substr($nbr, 0, -1);
		$nbr = trim($nbr);
		if (is_numeric($nbr))
		{
			if (intval($nbr) % 2)
				echo "The number ".$nbr." is odd\n";
			else
				echo "The number ".$nbr." is even\n";
		}
		else
			echo "'".$cp."' is not a number\n";
	}
?>
