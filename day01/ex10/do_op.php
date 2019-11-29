#!/usr/bin/php
<?php
	if ($argc != 4)
		exit ("Incorrect Parameters\n");
	$x = $argv;
	array_shift($x);
	$op = trim($x[1]);
	$op1 = trim($x[0]);
	$op2 = trim($x[2]);
	switch ($op)
	{
		case "+":	echo $op1 + $op2."\n"; break ;
		case "-":	echo $op1 - $op2."\n"; break ;
		case "*":	echo $op1 * $op2."\n"; break ;
		case "/":	echo $op1 / $op2."\n"; break ;
		case "%":	echo $op1 % $op2."\n"; break ;
	}
?>
