#!/usr/bin/php
<?php
	if ($argc < 2)
		exit("");
	$token = $argv[1];
	$couple = $argv;
	array_shift($couple);
	array_shift($couple);
	foreach ($couple as $value)
	{
		$pos = strpos($value, $token);
		if ( $pos !== False)
		{
			$index = strpos($value, ":") + 1;
			$res = substr($value, $index);
		}
	}
	if (!empty($res))
		echo "$res\n";
?>
