#!/usr/bin/php
<?php
	$str = trim($argv[1]);
	while (strpos($str, "  "))
		$str = str_replace("  ", " ", $str);
	$str = explode(" ", $str);
	$last = array_shift($str);
	$str = implode(" ", $str);
	echo "$str"." ".$last."\n";
?>
