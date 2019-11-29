#!/usr/bin/php
<?php

	function do_op($op1, $op, $op2)
	{
		switch ($op)
		{
			case "+":	echo $op1 + $op2."\n"; break ;
			case "-":	echo $op1 - $op2."\n"; break ;
			case "*":	echo $op1 * $op2."\n"; break ;
			case "/":	echo $op1 / $op2."\n"; break ;
			case "%":	echo $op1 % $op2."\n"; break ;
			default:	echo "Syntax Error\n";
		}
	}

	if ($argc == 2)
	{
		$arr = sscanf($argv[1], "%f %c %f %s");
		if (!is_numeric($arr[0]) || !is_numeric($arr[2]) || !empty($arr[3]))
			exit("Syntax Error\n");
		do_op($arr[0], $arr[1], $arr[2]);
	}
	else
		exit("Incorrect Parameters\n");

?>
